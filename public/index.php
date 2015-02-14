<?php

use PurpleBooth\Controller\RatingsController;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app['ratings.controller'] = $app->share(function() use ($app) {
    return new RatingsController();
});

$app->get('/', "ratings.controller:indexAction");
$app->get('/{isbn}', "ratings.controller:getAction");

$app->run();