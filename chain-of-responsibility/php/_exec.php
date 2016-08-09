<?php

use DesignPatterns\ChainOfResponsibility\FirstHandler;
use DesignPatterns\ChainOfResponsibility\SecondHandler;

require_once __DIR__ . '/_autoload.php';

$request = [
    'data' => 'something'
];

$secondHandler = new SecondHandler();
$handler = new FirstHandler($secondHandler);
$handler->handleRequest($request);