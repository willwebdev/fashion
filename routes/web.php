<?php

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

use Symfony\Component\HttpFoundation\Response;
use App\Helpers\RandomOutfit;

const IMG_SIZE_W = 175;

$router->get('/', function () use ($router) {
    return view('main', [
    	'title' => 'Minimalise capsule wardrobe',
    	'content' => view('home')
    ]);
});