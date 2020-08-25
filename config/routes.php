<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);

    $app->get('/users', \App\Action\UsersAction::class);

    $app->post('/posts', \App\Action\PostsAction::class);

    $app->get('/user/{id}/{token}', \App\Action\UserAction::class);

    /**
     * insert route
     * values to pass
     * body -> firstname
     * body ->lastname
     * body -> email
     * 
     */
    $app->post('/user', \App\Action\AddUserAction::class);

    /**
     * update route
     * values to pass
     * body -> firstname
     * body ->lastname
     * body -> email
     * 
     */
    $app->post('/user-update', \App\Action\UpdateUserAction::class);

    $app->get('/template', \App\Action\HomeActionTWIG::class);

    $app->get('/dashboard/{name}', \App\Action\DashboardAction::class);

};