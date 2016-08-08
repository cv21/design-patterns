<?php

namespace DesignPatterns\ChainOfResponsibility;

class FirstHandler extends AbstractHandler
{
    public function handle($request)
    {
        if (isset($request)) {
            // process data
        }

        $this->getNext()->handle($request);
    }
}