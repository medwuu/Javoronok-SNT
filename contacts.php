<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/contacts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Контакты</title>
</head>
<body>
    <?php include('src/components/header.php'); ?>

    <main class="main container">
        <h2 class="section-title">Контакты</h2>
        <hr>
        <p>
            Юридический и фактический адрес:
            <br>
            141822, Московская область, Дмитровский район, Якотское поселение, деревня Тимошкино.
            <br>
            Телефон сторожки: <a href="tel:+79253124519">8(925) 312-45-19</a> (круглосуточно)
            <br>
            Телефон председателя: <a href="tel:+79852796855">8(985)279-68-55</a>
            <br>
            Email: <a href="email:sntzhavoronok@mail.ru">sntzhavoronok@mail.ru</a>
        </p>
        <hr>
        <div class="map">
            <div style="position:relative;overflow:hidden;">
                <a href="https://yandex.com/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс Карты</a>
                <a href="https://yandex.com/maps/geo/sadovodcheskoye_nekommercheskoye_tovarishchestvo_zhavoronok/53203668/?ll=37.711350%2C56.501376&utm_medium=mapframe&utm_source=maps&z=15" style="color:#eee;font-size:12px;position:absolute;top:14px;">Садоводческое некоммерческое товарищество Жаворонок — карта, как добраться, координаты</a>
                <iframe src="https://yandex.com/map-widget/v1/?ll=37.711350%2C56.501376&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzIwMzY2OBLMAdCg0L7RgdGB0LjRjywg0JzQvtGB0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCU0LzQuNGC0YDQvtCy0YHQutC40Lkg0LPQvtGA0L7QtNGB0LrQvtC5INC-0LrRgNGD0LMsINGB0LDQtNC-0LLQvtC00YfQtdGB0LrQvtC1INC90LXQutC-0LzQvNC10YDRh9C10YHQutC-0LUg0YLQvtCy0LDRgNC40YnQtdGB0YLQstC-INCW0LDQstC-0YDQvtC90L7QuiIKDffaFkIVuwJiQg%2C%2C&utm_source=share&z=15" width="1400" height="500" frameborder="1" allowfullscreen="true" style="position:relative;border:0;"></iframe>
            </div>
        </div>
    </main>

    <?php include('src/components/footer.php'); ?>
</body>
</html>