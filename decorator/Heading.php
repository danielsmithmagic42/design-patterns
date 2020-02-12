<?php

class Heading extends SimpleHtmlElement
{
    public function __construct($type)
    {
        return parent::__construct('h' . $type);
    }
}
