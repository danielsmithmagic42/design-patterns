<?php

class Input extends SimpleHtmlElement
{
    public function __construct($type)
    {
        return parent::__construct('input type="' . $type . '"');
    }
}
