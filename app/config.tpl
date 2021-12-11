<?php
    require_once 'Statuscodes.php';
    define('WEBSITE','');
    define('DS',DIRECTORY_SEPARATOR);
    define('HTTP_HOST','http://'.$_SERVER["HTTP_HOST"].'/firefly/');
    define('STYLE',HTTP_HOST.'app/Style/');
    define('IMAGES',HTTP_HOST.'app/Images/');
    define('ICONS',HTTP_HOST.'app/Icons/');
    define('INCLUDE',HTTP_HOST.'app/Include/');
    define('SCRIPT',HTTP_HOST.'app/Script/');
    define('UPLOADS',HTTP_HOST.'app/Uploads/');
    define('UP_IMAGES',HTTP_HOST.'app/Uploads/Images/');
    define('UP_VIDEOS',HTTP_HOST.'app/Uploads/Videos/');
    define('UPLOAD_DIR',__DIR__.'/Uploads/Images/');
    define('ADMIN_MAIL','');
    define('ADMIN_MAIL_PASS','');

    
    define('DB_NAME','bighall');
    define('DB_HOST','localhost');
    define('DB_PORT','3306');
    define('DB_USER','root');
    define('DB_PASS','');
?>