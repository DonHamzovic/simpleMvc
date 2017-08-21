<?php

class Dashboard_model  extends Model {


        function __construct() {
            parent::__construct();
        
        }


        public function  asyncInsert()
        {
           $name = $_POST['_eleve_name'];
           
           $stm=$this->db->prepare('INSERT INTO eleve (name) VALUES (:name) ');
           $data=  $stm->execute( array(':name' => $name ));
           $data = array ('name' => $name  , 'id' => $this->db->lastInsertId());
           echo json_encode($data);
        }


        public function get_Names() {

            $stm = $this->db->prepare("SELECT * FROM eleve");
            $stm->execute();
            $data= $stm->fetchall(PDO::FETCH_ASSOC);
            echo json_encode($data);

        }

        public function Delete_student (){

               $id = $_POST['id'];

               $stm = $this->db->prepare('DELETE from eleve where id = :id');
               $stm->execute(array (':id' => $id));




        }

}