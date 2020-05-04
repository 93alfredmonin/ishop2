<?php

require_once '../config/init.php';
require LIBS . '/functions.php';
new ishop\App();
ishop\App::$app->setProperty('Test', 'TEST');
debug(ishop\App::$app->getProperties());