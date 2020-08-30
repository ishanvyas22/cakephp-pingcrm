<?php

// Check platform requirements
require dirname(__DIR__) . '/config/requirements.php';

// For built-in server
if (PHP_SAPI === 'cli-server') {
    $_SERVER['PHP_SELF'] = '/' . basename(__FILE__);

    $url = parse_url(urldecode($_SERVER['REQUEST_URI']));
    $file = __DIR__ . $url['path'];
    if (strpos($url['path'], '..') === false && strpos($url['path'], '.') !== false && is_file($file)) {
        return false;
    }
}
require dirname(__DIR__) . '/vendor/autoload.php';

use App\Application;
use Cake\Http\Server;

// Bind your application to the server.
$server = new Server(new Application(dirname(__DIR__) . '/config'));

// Run the request/response through the application and emit the response.
$server->emit($server->run());
