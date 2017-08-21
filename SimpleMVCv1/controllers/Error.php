
<?php

class Error extends  Controller

{
    function __construct(){
            
            parent::__construct();
          //  echo "this is an error page";
            

    }

    function index() {

        
            $this->view->render('error/index');

    }
     
}
