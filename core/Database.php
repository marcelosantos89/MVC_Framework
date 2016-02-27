<?php

  $config = include '../app/config/database.php';

  use Illuminate\Database\Capsule\Manager as Capsule;

  $capsule = new Capsule();

  $capsule->addConnection([
    'driver' => $config['driver'],
    'host' => $config['host'],
    'username' => $config['username'],
    'password' => $config['password'],
    'database' => $config['database'],
    'charset' => $config['charset'],
    'collation' => $config['collation'],
    'prefix' => $config['prefix']
  ]);

  $capsule->bootEloquent();
