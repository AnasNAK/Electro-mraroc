<?php

//load config
require_once 'config/config.php';
//load helpers
require_once 'helper/url_helper.php';
require_once 'helper/session_helper.php';
//autoload core libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
