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

$app->get('/api/saved-items/all', function (Request $request, Response $response, array $args) {
    $data = array();

    $savedItem1 = array();
    $savedItem1['id'] = 1;
    $savedItem1['url'] = 'url';
    $savedItem1['image'] = 'image';
    $savedItem1['title'] = 'title';
    $savedItem1['isRead'] = false;
    $savedItem1['dateCreated'] = date('Y-m-d H:i:s');
    $savedItem1['dateModified'] = date('Y-m-d H:i:s');

    $savedItem2 = array();
    $savedItem2['id'] = 1;
    $savedItem2['url'] = 'url';
    $savedItem2['image'] = 'image';
    $savedItem2['title'] = 'title';
    $savedItem2['isRead'] = true;
    $savedItem2['dateCreated'] = date('Y-m-d H:i:s');
    $savedItem2['dateModified'] = date('Y-m-d H:i:s');

    $data[] = $savedItem1;
    $data[] = $savedItem2;

    return $response->withJson($data);
});

$app->get('/api[/{test}]', function (Request $request, Response $response, array $args) {
    $data = array();
    
    if (isset($args['test'])) {
        $data['out'] = $args['test'];
    }

    return $response->withJson($data);
});