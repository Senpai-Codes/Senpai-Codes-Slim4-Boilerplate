<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
<<<<<<< HEAD
    $app->get('/users', \App\Action\UsersAction::class);
<<<<<<< HEAD
    $app->get('/user/{id}/{}token', \App\Action\UserAction::class);
=======

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

>>>>>>> 09660b9df6432f10587173ba6c53022660cd6705
    $app->get('/template', \App\Action\HomeActionTWIG::class);

    $app->get('/dashboard/{name}', \App\Action\DashboardAction::class);

=======
    $app->post('/posts', \App\Action\PostsAction::class);
    $app->get('/user/{id}/{token}', \App\Action\UserAction::class);
    $app->get('/template', \App\Action\HomeActionTWIG::class);
    $app->get('/update', \App\Action\UserUpEmailAction::class);
    $app->get('/delete/{id}', \App\Action\UserDeleteAction::class);
    $app->get('/Dashboard/{name}', \App\Action\DashboardAction::class);
<<<<<<< HEAD
>>>>>>> origin/olfa
=======
    $app->get('/Register', \App\Action\RegisterAction::class);
    $app->post('/Register', \App\Action\RegisterPostAction::class);
>>>>>>> origin/olfa
};