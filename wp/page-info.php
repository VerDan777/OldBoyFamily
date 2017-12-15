<?php
/*
    Template Name: Info Page
*/

    get_header();
?>
        <ul class="main-menu__list main-menu__list--info">
            <li class="main-menu__dropdown-item main-menu__dropdown-item--info"><a href="#questions" class="main-menu__link main-menu__sublink main-menu__sublink--info">Чаво</a></li>
            <li class="main-menu__dropdown-item main-menu__dropdown-item--info"><a href="#format" class="main-menu__link main-menu__sublink main-menu__link main-menu__sublink--info ">Форматы файлов</a></li>
        </ul>
    <div class="container">
     
      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

    </div>
    <div class="container container--info">
        <h1 class ="info__main-title"> Правила работы с сайтом «OldBoy Family»</h1>
            <p class="info__text">Данный сайт разработан для возможности скачивания необходимых материалов нашими партнерами.</p>
            <h2 class="info__title">Сайт состоит из 5 основных разделов:</h2>
            <ul class="info__list">
                <li class="info__item">Главная</li>
                <li class="info__item">Полиграфия</li>
                <li class="info__item">Лого</li>
                <li class="info__item">Документы</li>
                <li class="info__item">Веб-баннеры</li>
            </ul>
        <p class="info__text"> — На Главной странице вы можете увидеть публикацию новых материлов и материалов, которые являются часто используемыми</p>
        <p class="info__text"> — На странице Полиграфия находятся материалы, связанные с полиграфией.</p>
        <p class="info__text"> — На странице Лого находятся логотипы OldBoyю</p>
        <p class="info__text"> — На странице Документы Вы можете скачать необходимые юридические документы.</p>
        <p class="info__text"> — На странице Видео вы можете скачать видео-коллекцию OldBoy.</p>
        <p class="info__text"> — На странице Веб-баннеры Вы можете скачать веб-баннеры.</p>
        <div class="info__questions-container" id="questions">
            <h2 class="info__sub-title">Чаво(Часто задаваемые вопросы):</h2>
                <h3 class="info__title">Как скачать материалы?</h2>
            <ul class="info__list">
                <li class="info__item">Вы можете скачать материалы, перейдя в один из тематических разделов меню(«Полиграфия» -> «Прайсы») и нажав на кнопку «Скачать».</li>
            </ul>
            <h3 class="info__title">Чем открыть архив?</h2>
            <ul class="info__list">
                <li class="info__item">Открыть архив можно программой WinRar(ссылка: <a href="http://www.win-rar.ru/download/">WinRar</a>) и 7-Zip (ссылка: <a href="http://www.7-zip.org/">7-Zip</a>)</li>
            </ul>
            <h3 class="info__title">Как мне найти материалы по по конкретной тематике?</h2>
            <ul class="info__list">
                <li class="info__item">Все материалы предварительно отсортированы по соответствующим разделам и подразделам. Вы можете воспользоваться навигационным меню</li>
                <li class="info__item">Для того, чтобы найти материалы по определенному запросу, воспользуйтесь формой поиска. К примеру, Вы хотите найти все материалы, связанные с Баннерами, для этого введите в строке поиска - «Баннер» и Вы получите все доступные материалы в соответствии с Вашим запросом.</li>
            </ul>
            <h3 class="info__title">Как открыть файл CDR?</h2>
            <ul class="info__list">
                <li class="info__item">Файлы формата CDR открытваются программой CorelDraw, <a href="https://www.coreldraw.com/ru/free-trials/">ссылка на официальный сайт</a></li>
            </ul>

            <h3 class="info__title">Как открыть файл AI?</h2>
            <ul class="info__list">
                <li class="info__item">Файлы формата AI открываются программой Adobe Illustrator, <a href="https://creative.adobe.com/ru/products/download/illustrator">ссылка на официальный сайт</a></li>
            </ul>
            <h3 class="info__title">Как открыть файл PSD?</h2>
            <ul class="info__list">
                <li class="info__item">Файлы формата PSD открываются программой Adobe Photoshop, <a href="https://creative.adobe.com/ru/products/download/photoshop">ссылка на официальный сайт</a></li>
            </ul>
            <h3 class="info__title">Как открыть файл PDF?</h2>
            <ul class="info__list">
                <li class="info__item">Файлы формата PDF открываются программой Adobe Reader,<a href="https://get.adobe.com/ru/reader/">ссылка на официальный сайт</a></li>
            </ul>
            <h3 class="info__title">Как открыть файл DOC?</h2>
            <ul class="info__list">
                <li class="info__item">Файлы формата DOC открываются программой Microsoft Office,<a href="https://products.office.com/ru-ru/office-online/documents-spreadsheets-presentations-office-online">ссылка на официальный сайт</a></li>
            </ul>
        </div>
        <div classs="info__format" id="format">
        <h2 class="info__sub-title">Форматы файлов:</h2>
            <p class="info__text">Файлы предоставленны в следующих форматах: <b>JPG</b>, <b>PNG</b>, <b>CDR</b>, <b>AI</b>, <b>PSD</b>, <b>MP4</b>, <b>DOC</b>, <b>PDF</b></p>
        </div>
        
    </div>
      </section>
    </div>
    <!-- <div class="info__scroll"></div> -->
    <?php 
        get_footer();
    ?>
    <script src="scripts.js"></script>
  </body>
</html>