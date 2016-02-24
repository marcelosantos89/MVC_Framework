<?php

use Core\Controller;

class Welcome extends Controller
{

  /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome
	 * 		http://example.com/welcome/index
	 *  	http://example.com/
	 *
   *	To change Default controller go to (ROOT)/app/config/routes.php
	 */
  public function index()
  {
    $user = new User;
    $data['name'] = $user->name;
    $this->view('Welcome/index', $data);
  }

}
