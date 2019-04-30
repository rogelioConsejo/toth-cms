<?php

define("TEMPLATE_PATH", dirname(__FILE__));
define("ROOT_PATH", substr(TEMPLATE_PATH, 0, strpos(TEMPLATE_PATH,'/assets')));
define("PRIVATE_PATH", ROOT_PATH . '/private');
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("ASSETS_PATH", ROOT_PATH . '/assets');