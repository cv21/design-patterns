<?php

namespace DesignPatterns\ChainOfResponsibility;

abstract class AbstractHandler
{
    protected $next;

    public function __construct($next = null)
    {
        $this->next = $next;
    }

    abstract public function handleRequest($request);
}