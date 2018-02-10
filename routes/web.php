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

use App\Helpers\RandomOutfit;

$router->get('/', function () use ($router) {
    return view('main', [
    	'title' => 'Random outfit',
    	'content' => (new RandomOutfit())->drawRandomOutfit()
    ]);
});