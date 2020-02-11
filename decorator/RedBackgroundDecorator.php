<?php

class RedBackgroundDecorator extends HtmlElementDecorator
{
    public function __construct(HtmlElement $element)
    {
        parent::__construct($element);

        $this->addAttr('style', 'background: red;');
        $this->addAttr('class', 'please-work');
        $this->addAttr('class', 'please-work-again');
    }
}
