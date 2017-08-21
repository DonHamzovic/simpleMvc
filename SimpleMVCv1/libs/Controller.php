<?php

class Controller
{
    function __construct() {
        
      //  echo "Main Controller </br>";
       
        $this->view = new View();

    }


    function loadModel($name) {

        $path = 'models/'.$name.'_model.php';

        if(file_exists($path)){
           
            require $path;

            $model_name = $name.'_model';

            $this->model = new $model_name;
         
        }

    }


}
