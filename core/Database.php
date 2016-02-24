<?php

  require_once '../app/config/database.php';

  use Illuminate\Database\Capsule\Manager as Capsule;

  $capsule = new Capsule();

  $capsule->addConnection([
    'driver' => $config['database']['driver'],
    'host' => $config['database']['host'],
    'username' => $config['database']['username'],
    'password' => $config['database']['password'],
    'database' => $config['database']['database'],
    'charset' => $config['database']['charset'],
    'collation' => $config['database']['collation'],
    'prefix' => $config['database']['prefix']
  ]);

  $capsule->bootEloquent();
