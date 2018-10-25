<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/Articles', 'ArticlesController@index');
    $router->get('/Articles/create', 'ArticlesController@create');
    $router->get('/Articles/show', 'ArticlesController@show');
//    $router->get('/Categories', 'CategoriesController@index');
//    $router->get('/Categories/create', 'CategoriesController@create');
//    $router->get('/Categories/{id}/edit', 'CategoriesController@edit');
//    $router->post('/Categories', 'CategoriesController@store');
//    $router->put('/Categories/{id}', 'CategoriesController@update');
//    $router->delete('/Categories/{id}', 'CategoriesController@destroy');
//    $router->get('/api/Categories', 'CategoriesController@apiIndex');
    $router->resource('/Categories',CategoriesController::class);
    $router->get('/Links', 'LinkController@index');
    $router->get('/Sites', 'SiteController@index');

});
