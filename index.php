<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!-- TODO: решить судьбу капчи -->
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <!-- TODO: сгенерировать заново с доменом релиза (https://www.gismeteo.ru/informers/constructor/) -->
    <link rel="stylesheet" type="text/css" href="https://nst1.gismeteo.ru/assets/flat-ui/legacy/css/informer.min.css">
    <title>СНТ Жаворонок</title>
</head>
<body>
    <?php include('src/components/header.php'); ?>
    
    <main class="main container">
        <div class="left-side">
            <h2 class="section-title">Новости:</h2>
            <div class="news-container">
                <!-- Новость 1 -->
                <a class="news-block" href="news/news_example.php">
                    <div class="news-img">
                        <img src="src/img/news photo.png" alt="">
                    </div>
                    <div class="news-content-odd">
                        <div class="news-title">
                            <!-- TODO: нужна важная новость – дописывать span -->
                            <h3>Заголовок<span class="news-important">Важно</span></h3>
                        </div>
                        <div class="news-short">
                            <p>Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem iusto eligendi aperiam. Aliquam totam tenetur. Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem...</p>
                        </div>
                    </div>
                </a>
                <hr>
                <!-- Новость 2 -->
                <a class="news-block" href="news/news_example.php">
                    <div class="news-content-even">
                        <div class="news-title">
                            <h3>Заголовок</h3>
                        </div>
                        <div class="news-short">
                            <p>Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem iusto eligendi aperiam. Aliquam totam tenetur. Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem...</p>
                        </div>
                    </div>
                    <div class="news-img">
                        <img src="src/img/news photo.png" alt="">
                    </div>
                </a>
                <hr>
                <!-- Новость 3 -->
                <a class="news-block" href="news/news_example.php">
                    <div class="news-img">
                        <img src="src/img/news photo.png" alt="">
                    </div>
                    <div class="news-content-odd">
                        <div class="news-title">
                            <h3>Заголовок</h3>
                        </div>
                        <div class="news-short">
                            <p>Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem iusto eligendi aperiam. Aliquam totam tenetur. Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem...</p>
                        </div>
                    </div>
                </a>
                <hr>
                <!-- Новость 4 -->
                <a class="news-block" href="news/news_example.php">
                    <div class="news-content-even">
                        <div class="news-title">
                            <h3>Заголовок</h3>
                        </div>
                        <div class="news-short">
                            <p>Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem iusto eligendi aperiam. Aliquam totam tenetur. Aliquam totam tenetur fugit maiores. Aliquam qui minus suscipit ut rerum distinctio fuga veritatis. Dolorum cupiditate architecto rem...</p>
                        </div>
                    </div>
                    <div class="news-img">
                        <img src="src/img/news photo.png" alt="">
                    </div>
                </a>
            </div>
            <div class="all-news">
                <a class="nav-link" href="news.php">Все новости &#8594;</a>
            </div>
        </div>

        <div class="right-side">
            <div class="weather">
                <!-- TODO для дебага -->
                <!-- <img src="src/img/weather.png" alt=""> -->
                <div id="gsInformerID-<?php echo parse_ini_file('.env')['GISMETEO_TOKEN']; ?>" class="gsInformer" style="width:560px;height:232px">
                    <div class="gsIContent">
                        <div id="cityLink">
                            <a href="https://www.gismeteo.ru/weather-moscow-4368/" target="_blank" title="Погода в Москве">
                                <img src="https://nst1.gismeteo.ru/assets/flat-ui/img/gisloader.svg" width="24" height="24" alt="Погода в Москве">
                            </a>
                            </div>
                        <div class="gsLinks">
                            <table>
                                <tr>
                                    <td>
                                        <div class="leftCol">
                                            <a href="https://www.gismeteo.ru/" target="_blank" title="Погода">
                                                <img alt="Погода" src="https://nst1.gismeteo.ru/assets/flat-ui/img/logo-mini2.png" align="middle" border="0" width="11" height="16" />
                                                <img src="https://nst1.gismeteo.ru/assets/flat-ui/img/informer/gismeteo.svg" border="0" align="middle" style="left: 5px; top:1px">
                                            </a>
                                            </div>
                                            <div class="rightCol">
                                                <a href="https://www.gismeteo.ru/weather-moscow-4368/2-weeks/" target="_blank" title="Погода в Москве на 2 недели">
                                                    <img src="https://nst1.gismeteo.ru/assets/flat-ui/img/informer/forecast-2weeks.ru.svg" border="0" align="middle" style="top:auto" alt="Погода в Москве на 2 недели">
                                                </a>
                                            </div>
                                        </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="map-text">Мы на карте:</div>
                <!-- <img src="src/img/map.png" alt=""> -->
                <div style="position:relative;overflow:hidden;">
                    <a href="https://yandex.com/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс Карты</a>
                    <a href="https://yandex.com/maps/geo/sadovodcheskoye_nekommercheskoye_tovarishchestvo_zhavoronok/53203668/?ll=37.713917%2C56.502769&utm_medium=mapframe&utm_source=maps&z=16.53" style="color:#eee;font-size:12px;position:absolute;top:14px;">Садоводческое некоммерческое товарищество Жаворонок — Яндекс Карты</a>
                    <iframe src="https://yandex.com/map-widget/v1/?ll=37.713917%2C56.502769&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzIwMzY2OBLMAdCg0L7RgdGB0LjRjywg0JzQvtGB0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCU0LzQuNGC0YDQvtCy0YHQutC40Lkg0LPQvtGA0L7QtNGB0LrQvtC5INC-0LrRgNGD0LMsINGB0LDQtNC-0LLQvtC00YfQtdGB0LrQvtC1INC90LXQutC-0LzQvNC10YDRh9C10YHQutC-0LUg0YLQvtCy0LDRgNC40YnQtdGB0YLQstC-INCW0LDQstC-0YDQvtC90L7QuiIKDffaFkIVuwJiQg%2C%2C&z=16.53" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;border:0"></iframe>
                </div>
            </div>
            <div class="write-to-governance">
                <form action="src/additional/form.php" id="ajax-form" method="POST" enctype="multipart/form-data">
                    <legend>Написать в правление</legend>
                    <div class="form-group">
                        <label class="form-label" for="">Тема<span class="form-necessary">*</span>:</label>
                        <br>
                        <input class="form-input" type="text" name="theme">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Email<span class="form-necessary">*</span>:</label>
                        <br>
                        <input class="form-input" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Номер участка:</label>
                        <br>
                        <input class="form-input" type="text" name="land_number">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Номер телефона:</label>
                        <br>
                        <input class="form-input" type="tel" name="telephone">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Сообщение<span class="form-necessary">*</span>:</label>
                        <br>
                        <textarea class="form-input form-message" type="text" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Прикрепить файл (до <?php echo parse_ini_file('.env')['MAX_FILE_SIZE'] ?>МБ):</label>
                        <br>
                        <input class="form-input form-file" id="user-file" type="file" name="user-file">
                    </div>
                    <!-- TODO: решить судьбу капчи -->
                    <!-- <div class="g-recaptcha" data-sitekey="<?php echo parse_ini_file('.env')['RECAPTCHA_TOKEN']; ?>"></div> -->
                    <div class="form-group form-result" id="form-result"></div>
                    <button class="submit-btn" id="submit-btn" type="" name="send">Отправить</button>
                </form>
            </div>
        </div>
    </main>

    <?php include('src/components/footer.php'); ?>
    <script async src="https://www.gismeteo.ru/api/informer/getinformer/?hash=<?php echo parse_ini_file('.env')['GISMETEO_TOKEN']; ?>"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="src/additional/form.js"></script>
</body>
</html>