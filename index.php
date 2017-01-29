<?php
define('SIMPLENOTE','');
define('ROOT_PATH', __DIR__);
define('APPLICATION_PATH',ROOT_PATH.'/application');
define('APPLICATION_NAMESPACE', 'Simplenote');
require 'framework/f3il.php';
$app= \F3il\Application::getInstance(APPLICATION_PATH.'/configuration.ini');
$app->setDefaultControllerName('Simplenote');
$app->run();