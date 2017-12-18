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
        <h1 class ="info__main-title"> О назначении и содержании сайта «OldBoy Family»:</h1>
            <p class="info__text">Данный сайт разработан для возможности просмотра и скачивания необходимых материалов владельцами франшизы OldBoy Barbershop.</p>
            <h2 class="info__title">Сайт состоит из 5 основных разделов:</h2>
            <ul class="info__list info__list--without">
                <li class="info__item"> — Главная</li>
                <li class="info__item"> — Полиграфия</li>
                <li class="info__item"> — Лого</li>
                <li class="info__item"> — Документы</li>
                <li class="info__item"> — Видео</li>
                <li class="info__item"> — Веб-баннеры</li>
            </ul>
        <p class="info__text">На Главной странице Вы можете увидеть публикацию часто скачиваемых, актуальных и новых материалов;</p>
        <p class="info__text">На странице Полиграфия находятся материалы, используемые при производстве разнообразной печатной продукции.</p>
        <p class="info__text">На странице Лого можно скачать логотип OldBoy для его последующего использования в своих целях. Для удобства логотип представлен в нескольких форматах. Важно помнить, что самостоятельное изменение логотипа, шрифта надписи или его пропорций недопустимо. В качестве цветов логотипа допускаются: белый #ffffff, чёрный #000000 и охра #d5a353.</p>
        <p class="info__text">На странице Документы Вы можете скачать необходимые юридические, общие или прочие документы, а также полиграфические файлы, содержащие большое количество текста.</p>
        <p class="info__text">На странице Видео Вы можете скачать видео, когда-либо созданные филиалами в рамках деятельности OldBoy Barbershop.</p>
        <p class="info__text">На странице Веб-баннеры Вы можете скачать типовые изображения для размещения рекламных или информационных постов в социальных сетях, или исходные макеты визуального веб-контента для их самостоятельного редактирования (включая, но не ограничиваясь баннерами о поиске мастеров, и «шапками» групп в социальных сетях).</p>
        <div class="info__questions-container" id="questions">
            <h2 class="info__sub-title">Чаво(Часто задаваемые вопросы):</h2>
                <h3 class="info__title">Как скачать материалы?</h2>
            <ul class="info__list">
                <li class="info__item">Вы можете скачать материалы, перейдя в один из тематических разделов меню (Например, «Полиграфия» => «Прайсы») и нажав на странице/карточке макета кнопку «Скачать».</li>
            </ul>
            <h3 class="info__title">Чем открыть архив?</h2>
            <ul class="info__list">
                <li class="info__item">Открыть архив можно программой WinRar(ссылка: <a href="http://www.win-rar.ru/download/">WinRar</a>) и 7-Zip (ссылка: <a href="http://www.7-zip.org/">7-Zip</a>)</li>
            </ul>
            <h3 class="info__title">Как мне найти материалы по по конкретной тематике?</h2>
            <ul class="info__list">
                <li class="info__item">Все материалы предварительно отсортированы по соответствующим разделам и подразделам. Вы можете воспользоваться навигационным меню</li>
                <li class="info__item">Для того, чтобы найти материалы по определенному запросу, воспользуйтесь формой поиска.К примеру, Вы хотите найти все материалы, связанные с баннерами, для этого введите в строке поиска — «баннер» и Вы получите все доступные материалы в соответствии с Вашим запросом. Важно уделять внимание конкретизации запросов, так как в данном случае по запросу в результатах поиска окажутся как веб-баннеры, так и баннеры для широкоформатной полиграфии (рекламные щиты 3x6 и пр.)</li>
            </ul>

            <div classs="info__format" id="format">
            <h2 class="info__sub-title">Форматы файлов:</h2>
                <p class="info__text">Файлы предоставленны в следующих форматах: <b>JPG</b>, <b>PNG</b>, <b>CDR</b>, <b>AI</b>, <b>PSD</b>, <b>MP4</b>, <b>DOC</b>, <b>PDF</b></p>
            </div>
            <ul class="info__list">
                <li class="info__item">CDR, AI, PSD — редактируемые макеты графической/полиграфической продукции.</li>
                <li class="info__item">JPEG или PNG стандартное изображение для предпросмотра, открывается на любом компьютере</li>
                <li class="info__item">PDF — отдельный документ либо файл предпросмотра, позволяющий открыть и увидеть макет полностью постранично в том порядке, в котором он представлен в CDR</li>
                <li class="info__item">SVG векторный файл, открывается в браузере, если его перетащить в окно.</li>
                <li class="info__item">DOC — текстовый документ.</li>
            </ul>
            <h3 class="info__title">Как открыть файл CDR?</h2>
            <ul class="info__list">
                <li class="info__item">Файлы формата CDR открытваются программой CorelDraw, <a href="https://www.coreldraw.com/ru/free-trials/">ссылка на официальный сайт</a>. Макеты CDR бывают редактируемыми, не редактируемыми (скривлёнными) и частично редактируемыми (некоторые тексты в них остаются изменяемыми, чаще всего в случаях, когда редактирование необходимо производить в самой типографии до печати: в эту категорию, например, относятся карты скидок, в которых нужно проставлять нумерацию и код города).
                </li>
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
                <li class="info__item">Файлы формата PDF открываются программой Adobe Reader, <a href="https://get.adobe.com/ru/reader/">ссылка на официальный сайт</a> или в окне веб-браузера. Отредактировать PDF можно в программах CorelDraw, Adobe Illustrator, Adobe Photoshop при включенной возможности редактирования PDF создателем данного файла.</li>
            </ul>
            <h3 class="info__title">Как открыть файл DOC?</h2>
            <ul class="info__list">
                <li class="info__item">Файлы формата DOC открываются программой Microsoft Office, <a href="https://products.office.com/ru-ru/office-online/documents-spreadsheets-presentations-office-online">ссылка на официальный сайт</a></li>
            </ul>
            <p class="info__text">Важно: Большинство файлов в данном пакете представлены в виде шаблонов — не печатайте макеты, не проверив и не отредактировав их под свои контактные данные! Обязательно проверьте перед печатью размер/соотношение сторон, а также все контактные данные, особенно номер телефона и адрес барбершопа.</p>
        </div>
        <h2 class="info__title">Сайт состоит из 5 основных разделов:</h2>
        <ul class="info__list">
            <li class="info__item">Rex (Bold, Bold Inline, Light)</li>
            <li class="info__item">Bernier (Regular, Distressed)</li>
            <li class="info__item">Bebas Neue (Bold, Book, Light, Regular, Thin)</li>
            <li class="info__item">Merriweather (Italic)</li>
            <li class="info__item">PT Sans Narrow (Thin, Regular)</li>
        </ul>
        
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