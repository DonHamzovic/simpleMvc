
<?php

class Dashboard  extends Controller
{
    function __construct() {
            parent::__construct();
           // echo "We are in Dashboard page";
               Session::init();
                 $logged = Session::get('loggedIn');
                if (!$logged){
                       Session::destroy();
                       header('Location: '.URL.'Login');
                       exit;
                }   


                $this->view->js = array('Dashboard/js/default.js');
     
    }


    function index() {            
         
         $this->view->render('Dashboard/Dashboard'); 
    }
    

    function  logout (){

        Session::destroy();

           header('Location: '.URL.'Login');

    }

     function asyncInsert (){

            $this->model->asyncInsert();

     }


     function get_Names() {

        $this->model->get_Names();

     }

     function Delete_student(){

         $this->model->delete_student();
     }
}
