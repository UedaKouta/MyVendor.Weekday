<?php
require dirname(__DIR__) . '/autoload.php';
exit((require dirname(__DIR__) . '/bootstrap.php')(PHP_SAPI === 'cli-server' ? 'html-app' : 'prod-html-app'));


// JSONアプリケーション （最小）
// require dirname(__DIR__) . '/autoload.php';
// exit((require dirname(__DIR__) . '/bootstrap.php')('app'));

// プロダクション用HALアプリケーション
// require dirname(__DIR__) . '/autoload.php';
// exit((require dirname(__DIR__) . '/bootstrap.php')('prod-hal-app'));
