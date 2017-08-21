<html>

 <head>
    <title> welcome</title>

      <link rel="stylesheet" href="<?php echo URL; ?>webroot/css/default.css" />
  
    
    <script  type="text/javascript" src="<?php echo URL; ?>webroot/js/jquery.min.js"  >  </script>
 <?php 
 
  if (isset($this->js)) {
       
        foreach ($this->js as $js) {
        
           echo '<script  type="text/javascript" src=" '.URL.'views/'.$js.'"  >  </script>';
       
        }
  
  }
 
 
  ?>

 </head>

<body>

<?php    Session::init();  ?>

 <div id="header" >
   header </br>
   <a href ="<?php echo URL; ?>index" > index </a> 
 

   <?php  if(Session::get('loggedIn')==true) :?>

            <a href ="<?php echo URL; ?>Dashboard/logout" > logout </a>
               <a href ="<?php echo URL; ?>Dashboard" > Dashboard </a>
                <a href ="<?php echo URL; ?>Helper" > Help </a>
     <?php  else: ?>
          <a href ="<?php echo URL; ?>login" > login </a>
          <a href ="<?php echo URL; ?>Helper" > Help </a>
     <?php endif; ?>
        <?php  if(Session::get('role')=='owner') :?>   
                   <a href ="<?php echo URL; ?>user" >users </a>
          <?php endif; ?>
      
  
    </div>  

<div  id="content">
