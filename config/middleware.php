<?php

use Selective\BasePath\BasePathMiddleware;
use Slim\App;
use App\Middleware\HttpExceptionMiddleware;
use App\Middleware\ErrorHandlerMiddleware;
use Slim\Middleware\ErrorMiddleware;
use Slim\Views\TwigMiddleware;


return function (App $app) {
    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();


    $app->add(TwigMiddleware::class);

    // Add the Slim built-in routing middleware
    $app->addRoutingMiddleware();

    $app->add(BasePathMiddleware::class);


    //custom MiddleWare
    $app->add(HttpExceptionMiddleware::class);

    // Catch exceptions and errors
    $app->add(ErrorHandlerMiddleware::class); 

    $loggerFactory = $app->getContainer()->get(\App\Factory\LoggerFactory::class);
    $logger = $loggerFactory->addFileHandler('error.log')->createInstance('error');

    $app->addErrorMiddleware(true, true, true, $logger);

};