<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/test', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/test' route");
    return "{\"test\": \"true\"}";
});