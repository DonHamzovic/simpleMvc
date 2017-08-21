<?php

class Helper extends Controller
{

    function __construct() {
            parent::__construct();
           // echo " we are in helper</br>";         
    }

    function index() {
          $this->view->render('help/index'); 
    }

    function  other ( $arg= null){

         echo "in other </br>";
         echo "opetion = ".$arg;

         require 'models/Help_model.php';
         $model = new Help_model(); 

    }

    
}
