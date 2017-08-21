<?php


function __autoload($class) {
    
require LIBS.$class.'.php';    
}

// require 'libs/Bootstrap.php';
// require 'libs/Controller.php';
// require 'libs/View.php';
// require 'libs/Database.php';
// require 'libs/Model.php';
// require 'libs/Session.php';
// require 'libs/Hash.php';

require 'config/paths.php';
require 'config/constant.php';
require 'config/database.php';

$Bootstrap = new Bootstrap;
