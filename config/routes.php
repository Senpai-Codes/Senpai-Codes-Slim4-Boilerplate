<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);

    $app->get('/template', \App\Action\HomeActionTWIG::class);


};