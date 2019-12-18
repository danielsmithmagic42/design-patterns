<?php

class PaymentHandler extends BaseHandler
{
  protected function canHandle($request)
  {
    return isset($request['payment']);
  }

  public function handle($request)
  {
    if (!$this->canHandle($request)) {
      parent::handle($request);
    }

    echo $request['payment'] . PHP_EOL;

    parent::handle($request);
  }
}
