<?php

class Controller {

  /**
   * @todo Better comments
   * @todo Check if file_exists before require_once
   */

  public function model($model)
  {
    require_once '../app/models/'.$model.'.php';

    return new $model();
  }

  public function view($view, $data = [])
  {
    require_once '../app/views/'.$view.'.php';
  }


}
