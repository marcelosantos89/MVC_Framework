<?php


  /**
  * [Load Javascript Files]
  * @param  [varchar] $location [location of ]
  * @return [string]           [String with location to file]
  */
  function load_js($location, $param = '')
  {
    if(file_exists('../public/assets/'.$location.'.js')){
      //return "<script src='assets/".$location.".js'></script>";
      return '<script src="/public/assets/'.$location.'.js"></script>';
    } else {
      throw new Exception("The Javascript file ".$location." does not exist", 1);
    }
  }
