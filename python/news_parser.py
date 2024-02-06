import os
import sqlite3
import dotenv
import requests
import tqdm
from bs4 import BeautifulSoup
from bleach import clean

global connect
global cursor


def clean_html(src, allowed=['a']):
    return clean(src, tags=allowed, strip=True, strip_comments=True)

def initConnection():
    global connect
    global cursor
    connect = sqlite3.connect('news.db', check_same_thread=False)
    cursor = connect.cursor()

    cursor.execute('''DROP TABLE IF EXISTS `news`;''')
    cursor.execute('''CREATE TABLE IF NOT EXISTS `news` (
        `id` SERIAL UNSIGNED,
        `creation_date` TIMESTAMP NOT NULL,
        `title` text NOT NULL,
        `text` text NOT NULL,
        `img` text,
        `is_important` tinyint(1) NOT NULL DEFAULT '0'
    );''')

def processMainText(main_text):
    if main_text:
        final_text = str(main_text)
        final_text = final_text.replace('\n', '').replace('  ', ' ').strip()
        final_text = clean_html(final_text, ['a', 'br', 'b', 'strong', 'i', 'itallic'])
    if not(main_text) or not(final_text):
        final_text = 'Нет текста...'
    return final_text

def processImg(main_text):
    if main_text and main_text.find('img'):
        img_link = main_text.find('img').get('src')
        if '../../' in img_link:
            img_link = os.getenv('WEBSITE_NAME') + img_link[6:]
    else:
        img_link = ''
    return img_link

def createSQLRequest(news_count: int, timestamp: str, title: str, main_text: str='Нет текста...', img_link: str='') -> str:
    sql = f'''INSERT INTO `news` (`id`, `creation_date`, `title`, `text`{', `img`' if img_link else ''}) VALUES (
                '{news_count}',
                '{"-".join(timestamp)} 12:00:00',
                '{title}',
                '{main_text}'{',' +
                img_link if img_link else ''}
            )'''
    return sql

def work():
    news_count = 1
    for page in tqdm.tqdm(range(45, 0, -1)):
        url = os.getenv('WEBSITE_NAME') + f'page/{page}' if page != 1 else ''
        r = requests.get(url)
        soup = BeautifulSoup(r.text, 'lxml')
        titles = soup.find_all(class_='widget-title')[::-1]
        news_time = soup.find_all(class_='widget-blog_post-created')[::-1]
        texts = soup.find_all(class_='widget-blog_post-content')[::-1]
        for row in range(len(titles)):
            try:
                title = titles[row].text
                timestamp = '-'.join(news_time[row].find('em').text.split('.')[::-1])
                main_text = processMainText(texts[row].find(class_='widget-content'))
                img_link = processImg(texts[row].find(class_='widget-content'))
                
                if img_link:
                    cursor.execute('''INSERT INTO `news` (`id`, `creation_date`, `title`, `text`, `img`)
                                   VALUES (?, ?, ?, ?, ?)''',
                                   (news_count, timestamp, title, main_text, img_link))
                else:
                    cursor.execute('''INSERT INTO `news` (`id`, `creation_date`, `title`, `text`)
                                   VALUES (?, ?, ?, ?)''',
                                   (news_count, timestamp, title, main_text))
            except sqlite3.OperationalError as error:
                print(f"[ERROR] пропущена новость \"{titles[row].text}\" №{news_count} на странице {page} <{error}>")
            except Exception as error:
                print(f"[ERROR] пропущена новость №{news_count} на странице {page} <{error}>")
            finally:
                news_count += 1
                continue

        connect.commit()


def main():
    dotenv.load_dotenv()
    initConnection()
    work()

if __name__ == '__main__':
    main()