<?php require 'views/header.php'; ?>

this is the Login page
<hr>


<form action="login/login" method="post" >

    <label> username </label> <input type="text" name="_username" />
    <br>
    <label>  password </label> <input type="password" name="_password" />
    <br>

    <button type="submit">submit  </button>

</form>

<?php require 'views/footer.php'; ?>