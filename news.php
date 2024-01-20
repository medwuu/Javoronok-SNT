<!DOCTYPE html>
<html lang="ru">
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
            <?php
                $env = parse_ini_file('.env');
                $servername = $env['db_host'];
                $username = $env['news_db_username'];
                $password = $env['news_db_password'];
                $dbname = $env['news_db_name'];
                $dbtable = $env['news_db_table'];

                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT * FROM $dbtable ORDER BY `id` DESC";
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
                        if ($news_num%2==0) {
                            echo '</div>';
                            echo '<hr>';
                        }
                        
                        $news_num++;
                    }
                }
                else {
                    echo '<h1 style="color: var(--red);">Произошла ошибка. Попробуйте позже!</h1>';
                }
                $conn->close();
            ?>
            <!-- TODO: динамическая загрузка новостей -->
        </div>
    </main>

    <?php include('src/components/footer.php'); ?>
</body>
</html>