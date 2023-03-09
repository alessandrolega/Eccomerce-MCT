<?php
header("Content-Encoding: UTF-8"); 
header("Content-Type: text/csv; charset=UTF-8");

define('PROTOCOL',$_SERVER['REQUEST_SCHEME'] == 'https'?'https':'https');

define('BASE_PATH_EXTEND', '/wp-content/themes/merceriacreativatania/');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].BASE_PATH_EXTEND);
define('CURRENT_URL', PROTOCOL."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
define('BASE_URL', PROTOCOL.'://'.$_SERVER['HTTP_HOST'].'/');

define('BASE_URL_THEME', BASE_URL.BASE_PATH_EXTEND);
define('NO_IMAGE_CAR', BASE_URL_THEME.'assets/images/grandPrixNoImage.jpg');
define('IMAGES_URL', BASE_URL_THEME.'assets/images/');
define('VIDEO_URL', BASE_URL_THEME.'assets/video/');

define('LOGS_BASE_PATH', BASE_PATH);
?>
