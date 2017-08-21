                
<?php require 'views/header.php'; ?>

        this is the user page


<form method='post' action='<?php  echo URL; ?>user/create'>

    <lable>Login</lable><input type='text'  name='login' /></br>
    <lable>password</lable><input type='text'  name='password' /></br>
     <lable>role </lable>
         <select name="role" >
        
            <option value="default"> default </option>
            <option value="admin">admin </option>
            <option value="owner"> owner </option>
        
         </select> </br>
          <input type='submit'   >
</form>

 <table>
 <?php   
    foreach ($this->userList as $key => $val) {
        echo '<tr>';
            echo  '<td> '.$val->id.' </td>';
            echo  '<td> '.$val->username.' </td>';
            echo  '<td> '.$val->password.' </td>';
            echo  '<td> '.$val->role.' </td>';
            echo  '<td> <a href="'.URL.'user/edit/'.$val->id.'" >edit </a>
            <a href="'.URL.'user/delete/'.$val->id.'" >delete</a>  </td>';     
        echo '</tr>';     
        }   
  ?>

</table>
 
<?php require 'views/footer.php'; ?>