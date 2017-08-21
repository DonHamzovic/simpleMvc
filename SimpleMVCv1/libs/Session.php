
<?php

class Session  {


     public static function init() {

            @session_start();
    }

     public static function  set($name ,$value ) {
        
        $_SESSION[$name] =$value;

    }


     public static function  get($name) {

            if (isset ( $_SESSION[$name])) {
                
            return $_SESSION[$name];   
            }

            return false;


    }

     public static function destroy () {

        session_unset();
        session_destroy();

    }




}