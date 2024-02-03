<footer class="footer">
    <div class="footer-inner container">
        <nav class="footer-nav">
            <div class="footer-nav-item">
                <?php echo '<a class="footer-nav-link' . (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' footer-nav-link-active' : '') . '" href="' . $layers . 'about.php">О СНТ</a>'; // $layers берётся из header.php // ?>
            </div>
            <div class="footer-nav-item">
                <?php echo '<a class="footer-nav-link' . (basename($_SERVER['PHP_SELF']) == 'news.php' ? ' footer-nav-link-active' : '') . '" href="' . $layers . 'news.php">Новости</a>'; ?>
            </div>
            <div class="footer-nav-item">
                <?php echo '<a class="footer-nav-link' . (basename($_SERVER['PHP_SELF']) == 'management.php' ? ' footer-nav-link-active' : '') . '" href="' . $layers . 'management.php">Органы управления</a>'; ?>
            </div>
            <div class="footer-nav-item">
                <?php echo '<a class="footer-nav-link' . (basename($_SERVER['PHP_SELF']) == 'documents.php' ? ' footer-nav-link-active' : '') . '" href="' . $layers . 'documents.php">Документы</a>'; ?>
            </div>
            <div class="footer-nav-item">
                <?php echo '<a class="footer-nav-link' . (basename($_SERVER['PHP_SELF']) == 'members.php' ? ' footer-nav-link-active' : '') . '" href="' . $layers . 'members.php">Членам СНТ</a>'; ?>
            </div>
            <div class="footer-nav-item">
                <?php echo '<a class="footer-nav-link' . (basename($_SERVER['PHP_SELF']) == 'contacts.php' ? ' footer-nav-link-active' : '') . '" href="' . $layers . 'contacts.php">Контакты</a>'; ?>
            </div>
        </nav>
        <address class="footer-address">
            <p>141822, Российская Федерация, Московская область, Дмитровский городской округ, территория объединения "Жаворонок"</p>
            <a href="https://yandex.com/maps/geo/sadovodcheskoye_nekommercheskoye_tovarishchestvo_zhavoronok/53203668/" class="footer-map-link" target="_blank">
                Смотреть на картах
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                    <path opacity="1" fill="#ff3234" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                </svg>
            </a>
        </address>
        <div class="footer-contacts">
            <h3 class="footer-contacts-title">Контакты:</h3>
            <p class="footer-contacts-tel">Телефон сторожки:<br>
                <a href="tel:+798253124519">
                    +7 (925) 312-45-19
                    <svg xmlns="http://www.w3.org/2000/svg" height=".7em" viewBox="0 0 512 512">
                        <path fill="#25d366" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
                    </svg>
                </a>
                <br><br>
                Телефон председателя:<br>
                <a href="tel:+79852796855">
                    +7 (985) 279-68-55
                    <svg xmlns="http://www.w3.org/2000/svg" height=".7em" viewBox="0 0 512 512">
                        <path fill="#25d366" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
                    </svg>
                </a>
            </p>
            <div class="footer-contacts-social">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#25dd66" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                    </svg>
                    <p class="footer-contacts-social-name">WhatsApp</p>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="#2aabee" d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/>
                    </svg>
                    <p class="footer-contacts-social-name">Telegram</p>
                </a>
            </div>
            <h4 class="footer-contacts-subscribe">Подписывайтесь!</h4>
        </div>
    </div>
</footer>