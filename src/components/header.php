<?php
    $layers_up = substr_count($_SERVER["PHP_SELF"], "/") - 1;
    $layers = str_repeat("../", $layers_up);
?>

<header class="header container">
    <a class="logo" href="<?php echo $layers; ?>index.php">
        <div class="logo-photo">
            <img src="<?php echo $layers; ?>src/img/logo.png" alt="">
        </div>
        <h1 class="logo-name">
            СНТ
            <br>
            Жаворонок
        </h1>
    </a>
    <nav class="navigation">
        <?php
            echo '<a class="nav-link' . (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' nav-link-active' : '') . '" href="' . $layers . 'about.php">О СНТ</a>';
            echo '<a class="nav-link' . (basename($_SERVER['PHP_SELF']) == 'news.php' ? ' nav-link-active' : '') . '" href="' . $layers . 'news.php">Новости</a>';
            echo '<a class="nav-link' . (basename($_SERVER['PHP_SELF']) == 'management.php' ? ' nav-link-active' : '') . '" href="' . $layers . 'management.php">Органы управления</a>';
            echo '<a class="nav-link' . (basename($_SERVER['PHP_SELF']) == 'documents.php' ? ' nav-link-active' : '') . '" href="' . $layers . 'documents.php">Документы</a>';
            echo '<a class="nav-link' . (basename($_SERVER['PHP_SELF']) == 'members.php' ? ' nav-link-active' : '') . '" href="' . $layers . 'members.php">Членам СНТ</a>';
            echo '<a class="nav-link' . (basename($_SERVER['PHP_SELF']) == 'contacts.php' ? ' nav-link-active' : '') . '" href="' . $layers . 'contacts.php">Контакты</a>';
        ?>
        </nav>
    <div class="burger">
        <span> </span>
    </div>
</header>
<?php echo '<script src="' . $layers . 'src/additional/burger.js"></script>'; ?>