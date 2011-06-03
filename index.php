<?php
// define root directory
define("LOCAL_DIR", realpath(dirname(__FILE__) . '/') . '/');
define("BASE_URL", "http://localhost/CMS/");
define("IMAGE_PATH", BASE_URL ."public/images/");
define("CSS_PATH", BASE_URL ."public/css/");
define("JS_PATH", BASE_URL ."public/js/");

//load system base files
require(LOCAL_DIR . 'system/system.php');

// run constructor functions
system_construct();

// rerouting and bodywork
url_dispatch();

// run destructor functions
system_destruct();

?>
