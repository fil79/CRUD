<?php
/* include the silex autoload */
require_once __DIR__.'/vendor/autoload.php';
$app = new Silex\Application();
/* silex uses anonymous functions to define routes */
$app->get('/', function() use($app) {
return 'Hello World!';
});
$app->run();
?> 