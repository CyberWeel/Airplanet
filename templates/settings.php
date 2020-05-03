<?php
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('ROOT', $_SERVER["DOCUMENT_ROOT"]);
define('PROTOCOL', 'http://');
define('ADDRESS', PROTOCOL.DOMAIN);
define('MAIN_CSS_PATH', ADDRESS.'/css/main.css');

require_once ROOT.'/templates/head.php';
require_once ROOT.'/templates/header.php';
require_once ROOT.'/templates/footer.php';