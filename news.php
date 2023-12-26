<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/news.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Новости</title>
</head>
<body>
    <header class="header container">
        <a class="logo" href="index.php">
            <div class="logo-photo">
                <img src="src/img/logo.png" alt="">
            </div>
            <h1 class="logo-name">
                СНТ
                <br>
                Жаворонок
            </h1>
        </a>
        <nav class="navigation">
            <a class="nav-link" href="about.php">О СНТ</a>
            <a class="nav-link nav-link-active" href="news.php">Новости</a>
            <a class="nav-link" href="management.php">Органы управления</a>
            <a class="nav-link" href="documents.php">Документы</a>
            <a class="nav-link" href="members.php">Членам СНТ</a>
            <a class="nav-link" href="contacts.php">Контакты</a>
        </nav>
    </header>

    <main class="main container">
        <h3 class="section-title">Новости СНТ:</h3>
        <div class="news-container">
            <div class="news-row">
                <div class="news-item">
                    <a class="news-item-inner" href="">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок<span class="news-important">Важно</span></h3>
                            <a class="nav-link" href="news.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
                <div class="news-item">
                    <a class="news-item-inner" href="">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
            <div class="news-row">
                <div class="news-item">
                    <a class="news-item-inner" href="">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
                <div class="news-item">
                    <a class="news-item-inner" href="">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
            <div class="news-row">
                <div class="news-item">
                    <a class="news-item-inner" href="">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
                <div class="news-item">
                    <a class="news-item-inner" href="">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок<span class="news-important">Важно</span></h3>
                            <a class="nav-link" href="news.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>       
    </main>

    <footer class="footer">
        <div class="footer-inner container">
            <nav class="footer-nav">
                <div class="footer-nav-item">
                    <a class="footer-nav-link" href="about.php">О СНТ</a>
                </div>
                <div class="footer-nav-item">
                    <a class="footer-nav-link footer-nav-link-active" href="news.php">Новости</a>
                </div>
                <div class="footer-nav-item">
                    <a class="footer-nav-link" href="management.php">Органы управления</a>
                </div>
                <div class="footer-nav-item">
                    <a class="footer-nav-link" href="documents.php">Документы</a>
                </div>
                <div class="footer-nav-item">
                    <a class="footer-nav-link" href="members.php">Членам СНТ</a>
                </div>
                <div class="footer-nav-item">
                    <a class="footer-nav-link" href="contacts.php">Контакты</a>
                </div>
            </nav>
            <address class="footer-address">
                <p>141822, Российская Федерация, Московская область, Дмитровский городской округ, территория объединения "Жаворонок"</p>
                <a href="" class="footer-map-link">
                    Смотреть на картах
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                        <path opacity="1" fill="#ff3234" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                </a>
            </address>
            <div class="footer-contacts">
                <h3 class="footer-contacts-title">Контакты:</h3>
                <p class="footer-contacts-tel">Телефон сторожки:<br>
                    <a href="tel:+798253124519">
                        +7 (925) 312-45-19
                        <svg xmlns="http://www.w3.org/2000/svg" height=".7em" viewBox="0 0 512 512">
                            <path fill="#25d366" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
                        </svg>
                    </a>
                    <br><br>
                    Телефон председателя:<br>
                    <a href="tel:+79852796855">
                        +7 (985) 279-68-55
                        <svg xmlns="http://www.w3.org/2000/svg" height=".7em" viewBox="0 0 512 512">
                            <path fill="#25d366" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
                        </svg>
                    </a>
                </p>
                <div class="footer-contacts-social">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#25dd66" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                        <p class="footer-contacts-social-name">WhatsApp</p>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path fill="#2aabee" d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/>
                        </svg>
                        <p class="footer-contacts-social-name">Telegram</p>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#7360f2" d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/>
                        </svg>
                        <p class="footer-contacts-social-name">Viber</p>
                    </a>
                </div>
                <h4 class="footer-contacts-subscribe">Подписывайтесь!</h4>
            </div>
        </div>
    </footer>
</body>
</html>