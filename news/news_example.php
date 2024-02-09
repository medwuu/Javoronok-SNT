<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/news.css">
    <link rel="stylesheet" href="../src/css/news_example.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../src/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../src/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../src/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="../src/img/favicons/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Новости СНТ</title>
</head>
<body>
    
    <?php include('../src/components/header.php'); ?>

    <main class="main container small-container">
        <div class="back-btn">
            <a class="nav-link" href="../news.php">&#8592; Назад</a>
        </div>
        <?php
            $env = parse_ini_file('../.env');
            $servername = $env['db_host'];
            $username = $env['news_db_username'];
            $password = $env['news_db_password'];
            $dbname = $env['news_db_name'];
            $dbtable = $env['news_db_table'];

            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * FROM $dbtable WHERE id = " . $_GET['id'];
            $row = $conn->query($sql)->fetch_assoc();

            echo '<h2 class="news-title">' . $row['title'] . '</h2>';
            echo '<div class="news-date">Опубликовано ' . substr($row['creation_date'], 8, 2)  . '.' . substr($row['creation_date'], 5, 2) . '.' . substr($row['creation_date'], 0, 4) . '</div>';
            echo '<hr>';
            if ($row['img']) {
                // TODO: нескольно фото / видео
                echo '<div class="news-note-img">';
                echo    '<img src="' . $row['img'] . '"" alt="">';
                echo '</div>';
            }
            // IMPORTANT: https://text-html.com/
            echo '<div class="news-note-text">';
            echo    $row['text'];
            echo '</div>';
            echo '<hr>';

            $prev_sql = "SELECT id FROM $dbtable WHERE id<" . $_GET['id'] . " ORDER BY id DESC LIMIT 1";
            $next_sql = "SELECT id FROM $dbtable WHERE id>" . $_GET['id'] . " ORDER BY id ASC LIMIT 1";
            $prev_result = $conn->query($prev_sql)->fetch_assoc();
            $next_result = $conn->query($next_sql)->fetch_assoc();
            if ($prev_result || $next_result) {
                echo '<div class="prev-next-btns">';
                if ($prev_result) {
                    echo '<div class="prev-btn">';
                    echo    '<a class="nav-link" href="news_example.php?id=' . $prev_result['id'] . '">&#8592; Предыдущая новость</a>';
                    echo '</div>';
                }
                if ($next_result) {
                    echo '<div class="next-btn">';
                    echo    '<a class="nav-link" href="news_example.php?id=' . $next_result['id'] . '">Следующая новость &#8594;</a>';
                    echo '</div>';
                }
                echo '</div>';
            }

            $conn->close();
        ?>
    </main>

    <?php include('../src/components/footer.php'); ?>
</body>
</html>