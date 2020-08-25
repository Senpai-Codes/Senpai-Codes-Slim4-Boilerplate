<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/users', \App\Action\UsersAction::class);
    $app->get('/user/{id}/{}token', \App\Action\UserAction::class);
    $app->get('/template', \App\Action\HomeActionTWIG::class);

};