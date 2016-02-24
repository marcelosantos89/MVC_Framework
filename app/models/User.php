<?php

/**
 *
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
  public $name = 'John Doe';

  public $timestamps = [];

  protected $fillable = ['name', 'lastname', 'email'];

  protected $table = 'user';
}


 ?>
