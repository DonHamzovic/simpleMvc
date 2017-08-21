
<?php

    class Database extends PDO 
{

        function __construct($db_type,$db_Host,$db_Name,$db_Username,$DB_Password)
        {

                parent::__construct($db_type.':host='.$db_Host.';dbname='.$db_Name, $db_Username, $DB_Password);

        }



        function insert ($table,$data)
        {
               var_dump($data);
               
               $fields =null;
               $fields_val =null;

               $fields = implode( ',' ,array_keys($data));
               $fields_val = ':'. implode( ',:' ,array_keys($data));
               
               $stm = $this->prepare("INSERT INTO $table 
                            ($fields)
                     VALUES ($fields_val) ");

                foreach ($data as $key => $value) {
                   $stm->bindValue(":$key" ,$value);     
                 }       

               $stm->execute();

        }



        function update($table ,$data,$where)
        {       

                $fieldDetails =null;

                foreach ($data as $key => $value) {
                
                        $fieldDetails .= "$key =:$key ,";
                }

                 $fieldDetails = rtrim($fieldDetails,',');

                 $stm = $this->prepare("UPDATE $table SET  $fieldDetails  WHERE $where");
        
               foreach ($data as $key => $value) {
                       $stm->bindValue(":$key",$value );
               }
               
               $stm->execute();

        }

}