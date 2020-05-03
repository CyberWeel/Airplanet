<?php function make_header() :string {
    return '<header class="header">'."\n".
        '<div class="container">'."\n".
        '<section class="header__inner">'."\n".
        '<a href="'.ADDRESS.'/main.php" title="На главную" class="header__logo-link">'."\n".
        '<img src="'.ADDRESS.'/img/logo.png" alt="Логотип компании" class="header__logo">'."\n".
        '</a>'."\n".
        '<address class="header__work">'."\n".
        '<a href="tel:+78000039210" title="Номер телефона 8 800 00 392 10" class="header__work-phone">8 (800) 00-392-10</a>'."\n".
        '<div class="header__work-link">'."\n".
        '<span>График работы</span>'."\n".
        '<div class="header__work-schedule">'."\n".
        '<span>Пн-Вс: 09:00-20:00</span>'."\n".
        '<span>Обед: 14:00-14:30</span>'."\n".
        '</div>'."\n".
        '</div>'."\n".
        '</address>'."\n".
        '</section>'."\n".
        '</div>'."\n".
        '</header>';
} 