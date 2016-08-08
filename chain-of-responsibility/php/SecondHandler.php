<?php

namespace DesignPatterns\ChainOfResponsibility;

class SecondHandler extends AbstractHandler
{
    public function handle($request)
    {
        if (isset($request['data'])) {
            // process data
        }

        $this->getNext()->handle($request);
    }
}