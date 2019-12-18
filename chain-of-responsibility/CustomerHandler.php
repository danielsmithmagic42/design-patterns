<?php

class CustomerHandler extends BaseHandler
{
  protected function canHandle($request)
  {
    return isset($request['customer']);
  }

  public function handle($request)
  {
    if (!$this->canHandle($request)) {
      parent::handle($request);
    }

    echo $request['customer'] . PHP_EOL;

    parent::handle($request);
  }
}
