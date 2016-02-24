<?php

  /**
  * [Load Javascript Files]
  * @param  [varchar] $location [location of ]
  * @return [string]           [String with location to file]
  */
  function load_js($location, $param = '')
  {
    if(file_exists('../public/assets/'.$location.'.js'))
    {
      return '<script src="/public/assets/'.$location.'.js"></script>';
    }
    else
    {
      throw new Exception("The Javascript file ".$location." does not exist", 1);
    }
  }

  /**
  * [Load CSS Files]
  * @param  [varchar] $location [location of ]
  * @return [string]           [String with location to file]
  */
  function load_css($location, $param = '')
  {
    if(file_exists('../public/assets/'.$location.'.css'))
    {
      return '<link rel="stylesheet" href="/public/assets/'.$location.'.css">';
    }
    else
    {
      throw new Exception("The CSS file ".$location." does not exist", 1);
    }
  }
