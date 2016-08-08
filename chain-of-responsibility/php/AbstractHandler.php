<?php

namespace DesignPatterns\ChainOfResponsibility;

abstract class AbstractHandler
{
    private $next;

    public function __construct($next)
    {
        $this->next = $next;
    }


    public function getNext()
    {
        return $this->next;
    }

    abstract public function handle($request);
}