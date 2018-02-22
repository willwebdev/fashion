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

$router->get('/', function () use ($router) {
    return view('main', [
    	'title' => 'Capsule Styling',
    	'content' => view('outfit-generator', [
    		"outfit" => (new RandomOutfit())->drawRandomOutfit()
    	])
    ]);
});

$router->get('/capsule-wardrobe', function () use ($router) {
    return view('main', [
    	'title' => 'Minimalist men\'s capsule wardrobe',
    	'content' => view('capsule-wardrobe')
    ]);
});

$router->get('/legal', function () use ($router) {
    return view('main', [
    	'title' => 'Terms and privacy policy',
    	'content' => view('legal')
    ]);
});