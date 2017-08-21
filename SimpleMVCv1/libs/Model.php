
<?php 

class  Model 
{

    function __construct() {
        
        $this->db = new Database(DB_Type,Host,DB_NAME ,USER_NAME,PASSWORD);

    }
}

