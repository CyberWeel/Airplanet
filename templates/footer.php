<?php function make_footer() :string {
    # Социалки можно в foreach() обернуть
    return '<footer class="footer">'."\n".
        '<div class="container">'."\n".
        '<section class="footer__inner">'."\n".
        '<div class="footer__author">'."\n".
        'Автор работы:'."\n".
        '<a href="https://github.com/CyberWeel/" title="Профиль на GitHub - https://github.com/CyberWeel/" class="footer__author-link">Мурашов Никита</a>'."\n".
        '</div>'."\n".
        '<a href="'.ADDRESS.'/main.php" title="На главную" class="footer__logo-link">'."\n".
        '<img src="'.ADDRESS.'/img/logo.png" alt="Логотип компании" class="footer__logo">'."\n".
        '</a>'."\n".
        '<div class="footer__socials">'."\n".
        '<span class="footer__socials-heading">Наши социальные сети</span>'."\n".
        '<ul class="footer__socials-list">'."\n".
        '<li class="footer__socials-item">'."\n".
        '<a href="#" title="Мы на ВКонтакте" class="footer__socials-link">'."\n".
        '<div class="sprite-socials-vk"></div>'."\n".
        '</a>'."\n".
        '</li>'."\n".
        '<li class="footer__socials-item">'."\n".
        '<a href="#" title="Мы на Facebook" class="footer__socials-link">'."\n".
        '<div class="sprite-socials-fb"></div>'."\n".
        '</a>'."\n".
        '</li>'."\n".
        '<li class="footer__socials-item">'."\n".
        '<a href="#" title="Мы на Google+" class="footer__socials-link">'."\n".
        '<div class="sprite-socials-gp"></div>'."\n".
        '</a>'."\n".
        '</li>'."\n".
        '<li class="footer__socials-item">'."\n".
        '<a href="#" title="Мы на Twitter" class="footer__socials-link">'."\n".
        '<div class="sprite-socials-tw"></div>'."\n".
        '</a>'."\n".
        '</li>'."\n".
        '<li class="footer__socials-item">'."\n".
        '<a href="#" title="наша почта" class="footer__socials-link">'."\n".
        '<div class="sprite-socials-mail"></div>'."\n".
        '</a>'."\n".
        '</li>'."\n".
        '</ul>'."\n".
        '</div>'."\n".
        '</section>'."\n".
        '</div>'."\n".
        '</footer>';
}