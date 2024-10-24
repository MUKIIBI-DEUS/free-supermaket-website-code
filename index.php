<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">

    <title>Login</title>




</head>
<body>

    

    <form class="loginBox" action="loginLogic.php" method="post">
        <h3>FRESH MART</h3>


        <?php
            //starting assession

            session_start();


            if(isset($_SESSION['errorMessage'])){//check if the $_SESSION['errorMessage'] is set in the loginLogic
                $errorMessage=$_SESSION['errorMessage'];
                
                echo "<p style='color:red;'>$errorMessage</p>";//load the errorMessage from session['errorMessage'] from the loginLogic
            }elseif(isset($_SESSION['loginStatusMessage'])){
                $loginStatusMessage=$_SESSION['loginStatusMessage'];
                
                echo "<p style='color:red;'>$loginStatusMessage</p>";//load the loginStatusMessage from session['loginStatusMessage'] from the loginLogic

            }else{

            }

        
        ?>

      

      
        <input type="text" placeholder="User Name" name="userName" required>
        <input type="password" placeholder="Password" name="userPassword" required>

        <input type="submit" name="submitForm" value="login" id="btn">

    </form>



    
</body>
</html>

<?php

?>