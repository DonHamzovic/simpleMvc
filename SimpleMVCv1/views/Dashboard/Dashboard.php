                
<?php require 'views/header.php'; ?>

this is the Dashboard page


 <form  id="student_insert" action="<?php echo URL;?>Dashboard/asyncInsert" method="post" > 

      <lable> nom d'eleve <lable><br><input  type="text" name="_eleve_name" />
      <br><input type="submit"/> 


   <div id="Names">
   
    
    </div>    



 </form>


<?php require 'views/footer.php'; ?>