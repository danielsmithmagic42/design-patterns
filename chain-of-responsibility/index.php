<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$h1 = new CustomerHandler();
$h2 = new ProductHandler();
$h3 = new PaymentHandler();

$h1->setNext($h2);
$h2->setNext($h3);

$data = [
  'customer' => 'John Smith',
  'product' => 'iPhone 99',
  'payment' => 'paid',
];

$h1->handle($data);
