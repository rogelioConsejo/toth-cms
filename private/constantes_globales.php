<?php

#define("PRIVATE_PATH", dirname(__FILE__));
define("PRIVATE_PATH", $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
define("ROOT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", ROOT_PATH . '/public');