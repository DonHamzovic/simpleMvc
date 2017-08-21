<?php



class Login extends Controller
{

    function __construct() {
            
            parent::__construct();
           // echo " we are in Login</br>";
    }

    function index(){

            echo HASH::create('hamza', PSW_SALT);
            $this->view->render('login/index'); 
    }


public function login() {

    $this->model->login();

}

    
}
