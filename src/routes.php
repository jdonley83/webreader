<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Home Page");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/api[/{test}]', function (Request $request, Response $response, array $args) {
    $data = array();
    
    if (isset($args['test'])) {
        $data['out'] = $args['test'];
    }

    return $response->withJson($data);
});