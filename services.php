<?php

use DiDemo\Notifier\Mailer;
use DiDemo\SubscriberManager;

$container['mailer'] = function ($container) {
  return new Mailer($container['mailer.host'],
    $container['mailer.username'],
    $container['mailer.password'],
    $container['mailer.port']
  );
};

$container['pdo'] = function ($container) {
  return new PDO($container['pdo.dsn']);
};

$container['subscriberManager'] = function($container) {
  return new subscriberManager($container['pdo'], $container['mailer']);
};