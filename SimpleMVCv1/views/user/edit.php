                
<?php require 'views/header.php'; ?>

        this is the user  edit page


<form method='post' action='<?php  echo URL; ?>user/editSave/<?php  echo $this->user->id; ?>' >

    <lable>Login</lable><input type='text'  value='<?php  echo $this->user->username; ?>' name='login' /></br>
    <lable>password</lable><input type='text' name='password' /></br>
     <lable>role </lable>
         <select name="role" >
        
            <option value="default"   <?php   if($this->user->role =='default') echo 'selected'; ?>  > default </option>
            <option value="admin"   <?php   if($this->user->role =='admin') echo 'selected'; ?>>admin </option>
            <option value="owner"   <?php   if($this->user->role =='owner') echo 'selected'; ?>> owner </option>
        
         </select> </br>
          <input type='submit'   >
</form>


 
<?php require 'views/footer.php'; ?>