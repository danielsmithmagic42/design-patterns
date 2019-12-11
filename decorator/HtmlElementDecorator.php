<?php

abstract class HtmlElementDecorator implements HtmlElement, Renderable
{
  private $decoratedHtmlElement;

  /** @var array $attributes */
  protected $attributes;

  public function __construct(HtmlElement $element)
  {
    $this->decoratedHtmlElement = $element;
    $this->attributes = [];
  }

  protected function addAttr($key, $value)
  {
    if (!isset($this->attributes[$key])) {
      $this->attributes[$key] = $value;
    } else {
      $this->attributes[$key] = $this->attributes[$key] . $value;
    }
  }

  public function getChildren()
  {
    return $this->decoratedHtmlElement->getChildren();
  }

  public function add($child)
  {
    $this->decoratedHtmlElement->add($child);

    return $this;
  }

  public function getTag()
  {
    return $this->decoratedHtmlElement->getTag();
  }

  public function render()
  {
    $newOpeningTag = '<' . $this->decoratedHtmlElement->getTag();

    foreach ($this->attributes as $key => $value) {
      $newOpeningTag .= ' '.  $key . '="' . $value . '"';
    }

    $newOpeningTag .= '>';

    $oldOpeningTag = '<' . $this->decoratedHtmlElement->getTag() . '>';

    // Not transititive as replace won't be like this anymore, need to add the new styles, but also the keey the old added styles
    return str_replace ($oldOpeningTag, $newOpeningTag, $this->decoratedHtmlElement->render());
  }
}
