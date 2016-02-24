<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
  // Name just for Testing.
  public $name = 'John Doe';

  // If you don't want to use created_at & updated_at field in table uncomment next line.
  //public $timestamps = [];

  // Define what fields in the table can be writen
  protected $fillable = ['name', 'lastname', 'email'];

  // Define table name of this model.
  protected $table = 'user';
}
