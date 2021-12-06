<?php

use Symfony\Component\HttpFoundation\Cookie;

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

$router->group(['middleware' => 'example.milddleware'], function() use($router){
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
});

$router->get('setCookie','CookieController@setCookie');
$router->get('getCookie','CookieController@getCookie');
$router->get('forgetCookie','CookieController@clearCookie');
