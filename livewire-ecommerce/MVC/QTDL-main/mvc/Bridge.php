<?php
// Duong dan trang web
define('_WEB_ROOT','http://'.$_SERVER['HTTP_HOST'].'/QTDL-main');
// Duong dan den thu muc CSS+JS
define('_PATH_ROOT',_WEB_ROOT.'/public');

define('_UPLOAD', $_SERVER["DOCUMENT_ROOT"]. '/QTDL-main/uploads');
define('_PATH_UPLOAD_PRODUCT', _WEB_ROOT .'/uploads/sanpham/');

// Process URL from browser
require_once "./mvc/core/App.php";

// How controllers call Views & Models
require_once "./mvc/core/Controller.php";

// Connect Database
require_once "./mvc/core/DB.php";
?>