<?php

use Symfony\Component\HttpFoundation\Response;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version().'<br /><br /><a href="/hello-world">HW</a>.';
});

$router->get('/hello-world', function () use ($router) {
	return "<h1>HELLO WORLD.</h1>";
});