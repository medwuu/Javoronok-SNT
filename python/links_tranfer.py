# -*- coding: utf-8 -*-
import os
import sqlite3
from dotenv import load_dotenv
from bs4 import BeautifulSoup
from tqdm import tqdm


def getOldData(old_connect: sqlite3.Connection) -> list:
    sql = "SELECT * FROM news"
    data = old_connect.execute(sql).fetchall()
    return data

def formatText(old_connect: sqlite3.Connection, new_connect: sqlite3.Connection, new_cursor: sqlite3.Cursor) -> bool:
    old_data = getOldData(old_connect)
    for one_news in tqdm(old_data):
        try:
            one_news_text = BeautifulSoup(one_news[3], 'lxml').find('a').get('href')
        except AttributeError:
            continue
        if one_news_text and os.getenv("WEBSITE_NAME") in one_news_text:
            try:
                sql = f"UPDATE 'news' SET text = '{one_news[3].replace(os.getenv('WEBSITE_NAME'), '../src/old-data/')}' WHERE id = '{one_news[0]}'"
                new_cursor.execute(sql)
                new_connect.commit()
            except Exception as error:
                print("Что-то пошло не так!\n", error)
                return False
    return True

def formatImg(old_connect: sqlite3.Connection, new_connect: sqlite3.Connection, new_cursor: sqlite3.Cursor) -> bool:
    old_data = getOldData(old_connect)
    for one_news in tqdm(old_data):
        if not one_news[4]:
            continue
        if os.getenv("IMAGE_WEBSITE_NAME") in one_news[4]:
            try:
                sql = f"UPDATE 'news' SET img = '{one_news[4].replace(os.getenv('IMAGE_WEBSITE_NAME'), '../src/old-data/').split('?')[0]}' WHERE id = '{one_news[0]}'"
                new_cursor.execute(sql)
                new_connect.commit()
            except Exception as error:
                print("Что-то пошло не так!\n", error)
                return False
    return True


def main():
    load_dotenv()

    old_connect = sqlite3.connect(os.getenv("OLD_DATABASE")+".db")
    new_connect = sqlite3.connect(os.getenv("NEW_DATABASE")+".db")
    new_cursor = new_connect.cursor()

    formatText(old_connect, new_connect, new_cursor)
    formatImg(old_connect, new_connect, new_cursor)

if __name__ == '__main__':
    main()