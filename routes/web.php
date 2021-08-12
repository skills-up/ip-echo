<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function (){
    $request = request();
    $data = array(
        'ip' => $request->ip(),
    );
    if ( $request->filled('name') ) {
        $data['greeting'] = $request->get('name');
    }
    return response($data)->header('x-hello-world', 'GA');
});
