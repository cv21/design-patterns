<?php

namespace DesignPatterns\ChainOfResponsibility;

class SecondHandler extends AbstractHandler
{
    public function handleRequest($request)
    {
        // process data if it needs
        if (isset($request['data'])) {
            echo sprintf("%s: %s\n", __CLASS__, $request['data']);
        }

        // pass request to next handler
        if ($this->next instanceof AbstractHandler) {
            $this->next->handleRequest($request);
        }
    }
}