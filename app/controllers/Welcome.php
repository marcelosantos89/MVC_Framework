<?php

/**
 * Class Welcome First Controller
 */
class Welcome extends Controller
{

  public function index($name = '')
  {

    $user = new User;

    $this->view('Welcome/index', ['name' => $user->name]);
  }

  //Adds user to database.
  public function create()
  {
    User::create([
      'name' => 'Marcelo',
      'lastname' => 'Santos',
      'email' => 'geral@marcelosantos.pt'
    ]);
  }

}