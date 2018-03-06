<?php

namespace WebReader;

use Slim\Http\Request;
use Slim\Http\Response;

use WebReader\Model\SavedItem as SavedItem;
use WebReader\Data\SavedItemRepo as SavedItemRepo;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Home Page");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/api/saved-items/all', function (Request $request, Response $response, array $args) {
    $repo = $this->savedItemRepo;

    return $response->withJson($repo->getAll());
});

$app->post('/api/saved-items', function (Request $request, Response $response, array $args) {
    $savedItem = new SavedItem();
    $savedItem->setUrl($request->getParsedBodyParam('url', 'http://google.com'));
    $savedItem->setImage($request->getParsedBodyParam('image', ''));
    $savedItem->setTitle($request->getParsedBodyParam('title', ''));
    $savedItem->setIsRead(false);
    $savedItem->setDateCreated(date('Y-m-d H:i:s'));
    $savedItem->setDateModified(date('Y-m-d H:i:s'));

    $savedItemRepo = new SavedItemRepo();
    $savedItem = $savedItemRepo->insert($savedItem);

    return $response->withJson($savedItem->convertToArray());
});

$app->get('/api[/{test}]', function (Request $request, Response $response, array $args) {
    $data = array();
    
    if (isset($args['test'])) {
        $data['out'] = $args['test'];
    }

    return $response->withJson($data);
});