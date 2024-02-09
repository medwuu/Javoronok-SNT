<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/news.css">
    <link rel="apple-touch-icon" sizes="180x180" href="src/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="src/img/favicons/site.webmanifest">
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
            <?php
                // TODO: вынести в .htaccess или оставить
                if (!isset($_GET['page'])) { $_GET['page'] = 1; }
                $env = parse_ini_file('.env');
                $servername = $env['db_host'];
                $username = $env['news_db_username'];
                $password = $env['news_db_password'];
                $dbname = $env['news_db_name'];
                $dbtable = $env['news_db_table'];

                $conn = new mysqli($servername, $username, $password, $dbname);
                $max_news_id = $conn->query("SELECT `id` FROM `$dbtable` ORDER BY `id` DESC LIMIT 1")->fetch_array()[0];
                if ($_GET['page'] * 10 - 10 > $max_news_id) { header('Location: /news.php'); }
                $first_news = $max_news_id - 10 * ($_GET['page'] - 1);
                $sql = "SELECT * FROM `$dbtable` WHERE `id`<=" . $first_news . " ORDER BY `id` DESC LIMIT 10";
                if($result = $conn->query($sql)){
                    $news_num = 1;
                    while($row = $result->fetch_array()){
                        if ($news_num%2) {
                            echo '<div class="news-row">';
                        }
                        echo '<div class="news-item">';
                        echo    '<a class="news-item-inner" href="news/news_example.php?id=' . $row['id'] . '">';
                        echo        '<div class="news-img">';
                        echo            '<img src="' . ($row['img'] ? $row['img'] : 'src/img/news placeholder.jpg') . '" alt="">';
                        echo        '</div>';
                        echo        '<div class="news-title">';
                        echo            '<h3>' . $row['title'] . '</h3>';
                        echo $row['is_important'] ? '<span class="news-important">Важно</span>' : '';
                        echo            '<div class="nav-link" href="news/news_example.php?id=' . $row['id'] . '">Читать &#8594;</div>';
                        echo        '</div>';
                        echo    '</a>';
                        echo '</div>';
                        if ($news_num%2) {
                            echo '<hr class="only-mobile">';
                        }
                        if ($news_num%2==0) {
                            echo '</div>';
                            echo '<hr>';
                        }
                        $news_num++;
                    } // FIXME: навигация на последней странице с нечётным кол-вом новостей

                    $prev_sql = "SELECT `id` FROM `$dbtable` WHERE `id`<=" . ($first_news - 10) . " ORDER BY `id` DESC LIMIT 1";
                    $next_sql = "SELECT `id` FROM `$dbtable` WHERE `id`>" . $first_news . " ORDER BY `id` DESC LIMIT 1";
                    $prev_result = $conn->query($prev_sql)->fetch_assoc();
                    $next_result = $conn->query($next_sql)->fetch_assoc();
                    if ($prev_result || $next_result) {
                        echo '<div class="prev-next-btns">';
                        if ($prev_result) {
                            echo '<div class="prev-btn">';
                            echo    '<a class="nav-link" href="news.php?page=' . ($_GET['page'] + 1) . '">&#8592; Ранние новости</a>';
                            echo '</div>';
                        }
                        if ($next_result) {
                            echo '<div class="next-btn">';
                            echo    '<a class="nav-link" href="news.php?page=' . ($_GET['page'] - 1) . '">Свежие новости &#8594;</a>';
                            echo '</div>';
                        }
                        echo '</div>';
                    }
                }
                else {
                    echo '<h1 style="color: var(--red);">Произошла ошибка. Попробуйте позже!</h1>';
                }
                $conn->close();
            ?>
        </div>
    </main>

    <?php include('src/components/footer.php'); ?>
</body>
</html>