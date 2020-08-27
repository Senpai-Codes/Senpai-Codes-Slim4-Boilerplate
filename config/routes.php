<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/users', \App\Action\UsersAction::class);
    $app->post('/posts', \App\Action\PostsAction::class);
    $app->get('/user/{id}/{token}', \App\Action\UserAction::class);
    $app->get('/template', \App\Action\HomeActionTWIG::class);
    $app->get('/update', \App\Action\UserUpEmailAction::class);
    $app->get('/delete/{id}', \App\Action\UserDeleteAction::class);
    $app->get('/Dashboard/{name}', \App\Action\DashboardAction::class);
};