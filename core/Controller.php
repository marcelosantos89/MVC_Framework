<?php
/**
 * Manages Controller Class.
 *
 * Other controller will extend this Class so they can use Models and Views.
 */
class Controller {

  /**
   * Loads Model from folder app/models/(file_name).php
   * @param  [char] $model [name of the Model]
   * @return [obj]        [Model Object]
   */
  public function model($model)
  {
    if(file_exists('../app/models/'.$model.'.php'))
      require_once '../app/models/'.$model.'.php';
    else
      throw new Exception("Model ".$model." could not be loaded", 1);


    return new $model();
  }

  /**
   * Loads View from folder app/views/[(folder_name)/(file_name)].php
   * @param  [char] $view [name of the Model]
   */
  public function view($view, $data = [])
  {
    require_once 'helpers/template.php';
    
    if(file_exists('../app/views/'.$view.'.php'))
      require_once '../app/views/'.$view.'.php';
    else
      throw new Exception("View ".$view." could not be loaded", 1);
  }


}
