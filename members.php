<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/management.css">
    <link rel="stylesheet" href="src/css/documents.css">
    <link rel="apple-touch-icon" sizes="180x180" href="src/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="src/img/favicons/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Членам СНТ</title>
</head>
<body>
    <?php include('src/components/header.php'); ?>

    <main class="main container">
        <h3 class="section-title">Членам СНТ</h3>
        <hr>
        <div class="spoiler">
            <!-- TODO: добавить ссылки к этому и подобным элементам снизу -->
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title arrow">Членам СНТ</h3>
                <p class="spoiler-text">
                    <a class="spoiler-text-link" href="">Экстренные и полезные телефоны</a>
                    <a class="spoiler-text-link" href="">Расписание приёма Председателя Правления СНТ в сторожке</a>
                    <a class="spoiler-text-link" href="">Квитанция об оплате</a>
                    <a class="spoiler-text-link" href="">Публичная кадастровая карта</a>
                    <a class="spoiler-text-link" href="">Порядок оформления межевого плана на садовый участок</a>
                    <a class="spoiler-text-link" href="">Порядок эксплуатации откатных ворот</a>
                    <a class="spoiler-text-link" href="">Расписание автобуса №26</a>
                    <a class="spoiler-text-link" href="">Расписание автобуса №401</a>
                    <a class="spoiler-text-link" href="">Расписание электричек</a>
                </p>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title arrow">Должники</h3>
                <p class="spoiler-text">
                    УВАЖАЕМЫЕ САДОВОДЫ!
                    <br>
                    Информируем Вас, что задолженность по финансовым платежам (без учёта пени за просрочку) допустили собственники следующих участков:
                    <br>
                    <?php
                        $env = parse_ini_file('.env');
                        $servername = $env['db_host'];
                        $username = $env['debtors_db_username'];
                        $password = $env['debtors_db_password'];
                        $dbname = $env['debtors_db_name'];
                        $dbtable = $env['debtors_db_table'];

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = "SELECT * FROM $dbtable ORDER BY house_number";
                        $debtors = $conn->query($sql);
                        if ($debtors->num_rows > 0) {
                            while ($row = $debtors->fetch_assoc()) {
                                echo "<b>" . $row["house_number"] . " (" . $row["fio"] . ") – " . $row["debt"] . " рублей;</b><br>";
                            }
                        }
                        // TODO: выводить это или "ошибка подключения"?
                        else {
                            echo 'Нет должников!';
                        }
                        
                        $sql = "SELECT SUM(debt) AS total_debt FROM debtors";
                        $total_debt = $conn->query($sql)->fetch_assoc()["total_debt"];
                        echo "Задолженность собственников указанных участков суммарно составляет <b>" . $total_debt . "</b> рублей";

                        $conn->close();
                    ?>
                    <br>
                    Для сведения сообщаем, что в настоящее время родственники бывших владельцев участков №№86, 90, 177-178, 190, 269 не оформили документы на право собственности в установленном порядке, не вступили в наследство.
                    <br>
                    Фактический адрес места жительства или другие доступные сведения, подтверждающие регистрацию по месту жительства собственника участка №100 Гусейновой А.Я., установить не предоставляется возможным.
                    <br>
                    Задолженность по платежам за указанные участки суммарно составляет 268.894 рубля 00 копеек.
                    <br>
                    В том числе:
                    <br>
                    86 (Сычева Г.Г.) – 18.750 рублей,
                    <br>
                    90 (Соколов М.Ю.) – 71.347 рублей,
                    <br>
                    100 (Гусейнова А.Я.) – 77.547 рублей,
                    <br>
                    177-178 (Волков А.И.) – 20.000 рублей,
                    <br>
                    190 (Киселев О.Б.) – 21.000 рублей,
                    <br>
                    269 (Щербинина И.А.) – 60.250 рублей.
                    <br>
                    <b>Правление СНТ «Жаворонок»</b>
                </p>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title arrow">Энергоснабжение</h3>
                <p class="spoiler-text">
                    <a class="spoiler-text-link" href="">АКТ проверки технических условий энергообеспечения</a>
                    <a class="spoiler-text-link" href="">Тарифы и порядок оплаты</a>
                    <a class="spoiler-text-link" href="">Функциональные обязанности электрика</a>
                    <a class="spoiler-text-link" href="">Единый прейскурант услуг электрика</a>
                    <a class="spoiler-text-link" href="">Порядок перехода на льготный тариф</a>
                    <a class="spoiler-text-link" href="">Положение об энергоснабжении СНТ</a>
                    <a class="spoiler-text-link" href="">Акт сверки с МЭС за 2016 г.</a>
                    <a class="spoiler-text-link" href="">Схема расположения контрольных счетчиков</a>
                    <a class="spoiler-text-link" href="">Анализ энергопотребления СНТ за 2013-2016гг.</a>
                    <a class="spoiler-text-link" href="">Актуальные и проблемные вопросы</a>
                    <a class="spoiler-text-link" href="">Электрический взгляд на СНТ</a>
                    <a class="spoiler-text-link" href="">Параграф 6 Главы 30 ГК РФ "Энергоснабжение"</a>
                    <a class="spoiler-text-link" href="">Постановление Правительства РФ №442</a>
                </p>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title arrow">Водоснабжение</h3>
                <p class="spoiler-text">
                    <a class="spoiler-text-link" href="">Ст. 19 закона "О недрах"</a>
                    <a class="spoiler-text-link" href="">Санитарно-эпидемиологические правила и нормативы</a>
                    <a class="spoiler-text-link" href="">Как проверить качество воды</a>
                    <a class="spoiler-text-link" href="">Требования к проведению дезинфекции колодцев и обеззараживаниюводы в них</a>
                    <a class="spoiler-text-link" href="">Лицензия на пользование недрами</a>
                    <a class="spoiler-text-link" href="">Условия пользования недрами</a>
                    <a class="spoiler-text-link" href="">Распоряжение Минэкологии</a>
                    <a class="spoiler-text-link" href="">Ситуационный план</a>
                    <a class="spoiler-text-link" href="">Схема расположения участка недр</a>
                    <a class="spoiler-text-link" href="">Сан-эпид Заключение от 22.02.19</a>
                </p>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title arrow">Пожарная безопасность</h3>
                <p class="spoiler-text">
                    <a class="spoiler-text-link" href="">Как правильно выбрать огнетушитель</a>
                    <a class="spoiler-text-link" href="">Приказ МЧС от 30.11.2016 г №644</a>
                    <a class="spoiler-text-link" href="">Постановление Правительства №807 от 18.08.16 г.</a>
                    <a class="spoiler-text-link" href="">Постановление Правительства РФ №390 от 25.04.12 г.</</a>
                    <a class="spoiler-text-link" href="">Федеральный закон от 22.07.2008 г. №123-ФЗ</a>
                    <a class="spoiler-text-link" href="">Федеральный закон от 23.06.2016 г. №218-ФЗ</a>
                    <a class="spoiler-text-link" href="">Свод правил №53</a>
                    <a class="spoiler-text-link" href="">СП53 в редакции 2020 года</a>
                </p>
            </div>
        </div>
    </main>

    <?php include('src/components/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="src/additional/spoiler.js"></script>
</body>
</html>
