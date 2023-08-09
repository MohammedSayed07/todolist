<?php

use app\core\App;
use app\database\Database;

require_once MAIN_DIR.'/vendor/autoload.php';

require_once MAIN_DIR.'/app/helpers.php';

$config = require 'config.php';

$app = new App();

Database::makeConnection($config['db']);