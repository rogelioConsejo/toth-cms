<?php

define("TEMPLATE_PATH", dirname(__FILE__));
define("ROOT_PATH", substr(TEMPLATE_PATH, 0, strpos(TEMPLATE_PATH,'/assets')));
define("PRIVATE_PATH", ROOT_PATH . '/private');
define("PUBLIC_PATH", ROOT_PATH . '/public');
define("ASSETS_PATH", ROOT_PATH . '/assets');