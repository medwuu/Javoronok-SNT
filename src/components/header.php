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
        <?php echo '<a class="nav-link'. (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' nav-link-active' : '') . '" href="about.php">О СНТ</a>'; ?>
        <?php echo '<a class="nav-link'. (basename($_SERVER['PHP_SELF']) == 'news.php' ? ' nav-link-active' : '') . '" href="news.php">Новости</a>'; ?>
        <?php echo '<a class="nav-link'. (basename($_SERVER['PHP_SELF']) == 'management.php' ? ' nav-link-active' : '') . '" href="management.php">Органы управления</a>'; ?>
        <?php echo '<a class="nav-link'. (basename($_SERVER['PHP_SELF']) == 'documents.php' ? ' nav-link-active' : '') . '" href="documents.php">Документы</a>'; ?>
        <?php echo '<a class="nav-link'. (basename($_SERVER['PHP_SELF']) == 'members.php' ? ' nav-link-active' : '') . '" href="members.php">Членам СНТ</a>'; ?>
        <?php echo '<a class="nav-link'. (basename($_SERVER['PHP_SELF']) == 'contacts.php' ? ' nav-link-active' : '') . '" href="contacts.php">Контакты</a>'; ?>
    </nav>
</header>