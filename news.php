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
    <?php include('src/components/header.php'); ?>

    <main class="main container">
        <h3 class="section-title">Новости СНТ:</h3>
        <div class="news-container">
            <!-- TODO: придумать, как забирать данные из БД. сделать ссылки -->
            <div class="news-row">
                <div class="news-item">
                    <a class="news-item-inner" href="news/news_example.php">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок<span class="news-important">Важно</span></h3>
                            <a class="nav-link" href="news/news_example.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
                <div class="news-item">
                    <a class="news-item-inner" href="news/news_example.php">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news/news_example.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
            <div class="news-row">
                <div class="news-item">
                    <a class="news-item-inner" href="news/news_example.php">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news/news_example.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
                <div class="news-item">
                    <a class="news-item-inner" href="news/news_example.php">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news/news_example.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
            <div class="news-row">
                <div class="news-item">
                    <a class="news-item-inner" href="news/news_example.php">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <a class="nav-link" href="news/news_example.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
                <div class="news-item">
                    <a class="news-item-inner" href="news/news_example.php">
                        <div class="news-img">
                            <img src="src/img/news photo.png" alt="">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок<span class="news-important">Важно</span></h3>
                            <a class="nav-link" href="news/news_example.php">Читать &#8594;</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>       
    </main>

    <?php include('src/components/footer.php'); ?>
</body>
</html>