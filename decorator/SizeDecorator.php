<?php

class SizeDecorator extends HtmlElementDecorator
{
    const DEFAULT_METRIC = "px";

    public function __construct(HtmlElement $element, $width = null, $height = null)
    {
        parent::__construct($element);

        if (!is_null($width)) {
            $this->addAttr('style', 'width: ' . $width . self::DEFAULT_METRIC . ';');
        }

        if (!is_null($height)) {
            $this->addAttr('style', 'width: ' . $height . self::DEFAULT_METRIC . ';');
        }
    }
}
