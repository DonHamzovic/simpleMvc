<?php

class User_model  extends Model {


        function __construct() {
            parent::__construct();
        
        }

        public function userList() {

            $stm =$this->db->prepare('SELECT * FROM user ');
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }



          public function userSingleList($id) {

            $stm =$this->db->prepare('SELECT id,username,role FROM user where id=:id ');
            $stm->execute(array('id' => $id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }

        public function  create($data){

            $this->db->insert('user',array(
                
                        'username' => $data['login'] ,
                        'password' =>HASH::create($data['password'], PSW_SALT),
                        'role' => $data['role']   ,
                ));

        }   
        
        public function  edit_user($data){

            $Post_data = array(
                
                        'username' => $data['login'] ,
                        'password' =>HASH::create($data['password'], PSW_SALT),
                        'role' => $data['role']
                );

              

              $this->db->update('user',$Post_data,"id =  {$data['id']}");

              
        }   


        
	public function delete($id)
	{   
        var_dump($id);
		$sth = $this->db->prepare('DELETE  FROM user WHERE id = :id');
		$sth->execute(array(
			':id' => $id
		));
	}
}