<?php
// HTTP
define('HTTP_SERVER',   'http://localhost/www-opencart-alcohol/admin/');
define('HTTP_CATALOG',  'http://localhost/www-opencart-alcohol/');

// HTTPS
define('HTTPS_SERVER',  'http://localhost/www-opencart-alcohol/admin/');
define('HTTPS_CATALOG', 'http://localhost/www-opencart-alcohol/');

// DIR
define('DIR_APPLICATION',  dirname(dirname(__FILE__)) . '/admin/');
define('DIR_SYSTEM',       dirname(dirname(__FILE__)) . '/system/');
define('DIR_LANGUAGE',     dirname(dirname(__FILE__)) . '/admin/language/');
define('DIR_TEMPLATE',     dirname(dirname(__FILE__)) . '/admin/view/template/');
define('DIR_CONFIG',       dirname(dirname(__FILE__)) . '/system/config/');
define('DIR_IMAGE',        dirname(dirname(__FILE__)) . '/image/');
define('DIR_CACHE',        dirname(dirname(__FILE__)) . '/system/cache/');
define('DIR_DOWNLOAD',     dirname(dirname(__FILE__)) . '/system/download/');
define('DIR_UPLOAD',       dirname(dirname(__FILE__)) . '/system/upload/');
define('DIR_LOGS',         dirname(dirname(__FILE__)) . '/system/logs/');
define('DIR_MODIFICATION', dirname(dirname(__FILE__)) . '/system/modification/');
define('DIR_CATALOG',      dirname(dirname(__FILE__)) . '/catalog/');

// DB
define('DB_DRIVER',   'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '200ok');
define('DB_DATABASE', 'opencart-alcohol');
define('DB_PREFIX',   'oc_');
