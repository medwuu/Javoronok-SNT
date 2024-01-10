<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/management.css">
    <link rel="stylesheet" href="src/css/documents.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Документы</title>
</head>
<body>
    <?php include('src/components/header.php'); ?>

    <main class="main container">
        <h3 class="section-title">Документы</h3>
        <hr>
        <div class="spoiler">
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <!-- TODO: добавить ссылки к этому и подобным элементам снизу -->
                    <a href="">Финансово-экономическое обоснование</a>
                </h3>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <a href="">Приходно-расходная смета</a>
                </h3>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <a href="">Отчёт об исполнении приходно-расходной сметы</a>
                </h3>
            </div>

            <div class="spoiler-item">
                <h3 class="spoiler-title section-title arrow">Внутренние регламентные документы</h3>
                <p class="spoiler-text">
                    <a class="spoiler-text-link" href="">Устав</a>
                    <a class="spoiler-text-link" href="">Правила внутреннего распорядка</a>
                    <a class="spoiler-text-link" href="">Положение об энергоснабжении</a>
                    <a class="spoiler-text-link" href="">Положение о ревизионной комиссии</a>
                    <a class="spoiler-text-link" href="">Типовой договор о пользовании имуществом общего пользования</a>
                    <a class="spoiler-text-link" href="">Должностная инструкция дежурного сторожа СНТ</a>
                </p>
            </div>

            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <a href="">Глава 9.1 ГК РФ</a>
                </h3>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <a href="">Федеральный закон 66-ФЗ</a>
                </h3>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <a href="">Федеральный закон 217-ФЗ</a>
                </h3>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <a href="">Решения общих собраний</a>
                </h3>
            </div>
            <div class="spoiler-item">
                <h3 class="spoiler-title section-title">
                    <a href="">Договор на вывоз мусора</a>
                </h3>
            </div>
        </div>
        <div class="archive-button">
            <!-- TODO: добавить ссылку -->
            <a class="archive-link" href="">Архив</a>
        </div>
    </main>

    <?php include('src/components/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="src/js/spoiler.js"></script>
</body>
</html>