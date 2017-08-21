<?php 



class Hash 
{
      public static function create($data, $PSW_SALT) 
      {
          
          $context = hash_init("MD5", HASH_HMAC,$PSW_SALT);
          hash_update($context ,$data);

          return hash_final($context); 

      }      
}


?>
