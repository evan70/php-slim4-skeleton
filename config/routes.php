<?php

// use Psr\Http\Message\ResponseInterface;
// use Psr\Http\Message\ServerRequestInterface;
// use Slim\App;

// return function (App $app) {
//    $app->get('/', function (
//        ServerRequestInterface $request,
//        ResponseInterface $response
//    ) {
//        $response->getBody()->write('Hello, Worlda!');
//
//        return $response;
//    });
// };

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class)->setName('home');
    $app->post('/users', \App\Action\UserCreateAction::class);

};
