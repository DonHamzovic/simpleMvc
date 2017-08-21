<?php

class Login_model  extends Model {


        function __construct() {
            parent::__construct();
            echo 'Login model is called <br>';
        }


        public function  login()
        {
                  
           $stm = $this->db->prepare ('SELECT id,role from user where
               username = :username   and
               password =:password');

          $stm->execute (array(
              'username' =>$_POST['_username'],
              'password' => HASH::create($_POST['_password'], PSW_SALT)
           ));     
           


           $data= $stm->fetch();  
                     
           $count = $stm->rowCount();
              
         if ($count > 0 ) {
                
                Session::init();
                Session::set('loggedIn' ,true);
                Session::set('role', $data['role']);
                
             header('Location: '.URL.'Dashboard');
            exit;

         }else {

            header('Location: '.URL.'Login');
           
            }


           
        }


}