<?php

spl_autoload_register(function($class) {
    require_once realpath(__DIR__ . str_replace('\\', '/', str_replace('DesignPatterns\ChainOfResponsibility', '', $class)) . '.php');
});