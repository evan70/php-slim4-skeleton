<?php

use Selective\BasePath\BasePathMiddleware;
use Slim\App;
use Slim\Middleware\ErrorMiddleware;

return function (App $app) {
    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    // Add the Slim built-in routing middleware
    // $app->addRoutingMiddleware();            //default Slim Middleware

    $app->add(BasePathMiddleware::class); // <--- here Selective\BasePath\BasePathMiddleware

    // Catch exceptions and errors
    $app->add(ErrorMiddleware::class);
};