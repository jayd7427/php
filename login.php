<?php

session_start();
if ($_POST)
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($_SESSION['email'] == $email &&  $_SESSION['password']== $password)
    {
       header ("location:home.php");

    }
    else
    {
    echo "incorrect email  or password";
    }

}
?>

<html>
<body>
    <form method = "post">
        email:<input type ="email" name ="email" required><br>

        password: <input type ="password" name ="password" required><br>
        
        <input type ="submit" value ="login">
</form>
</body>
</html>
