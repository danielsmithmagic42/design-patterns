<?php

class ProductHandler extends BaseHandler
{
  protected function canHandle($request)
  {
    return isset($request['product']);
  }

  public function handle($request)
  {
    if (!$this->canHandle($request)) {
      parent::handle($request);
    }

    echo $request['product'] . PHP_EOL;

    parent::handle($request);
  }
}
