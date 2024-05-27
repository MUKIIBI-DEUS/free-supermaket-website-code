<?php

    session_start();//start the session 
                           // check id user ID is set to avoid pannel entrance without login
                           if (!isset($_SESSION['userId'])) {
                            header("Location:../../index.php");
                            exit();
                           }


    if (isset($_SESSION['last_activity'])) {
        //create acconection to mysql database
            $inactive_time = time() - $_SESSION['last_activity'];
            $inactive_threshold = 10 * 60; // 10 minutes in seconds
            if ($inactive_time > $inactive_threshold) {

                $e_id=$_SESSION['userId'];//set the E_ID from session variable
                $updateLoginStatus="UPDATE employee set loginStatus='false' where e_id=$e_id";
                $updateStatus=mysqli_query($conn,$updateLoginStatus);


                session_unset(); // unset $_SESSION variable for this page
                session_destroy(); // destroy session data in storage

                header("Location:../../index.php");//head to the index/loginPage
                exit();
            }
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <form action="add_user_data_logic.php" method="post" enctype="multipart/form-data">

        <h3 style="color: rgb(8, 34, 18);">User Details</h3>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="firstName">
          
        </div>


   


<!-- USER -->
        
        <div class="mb-3">

       
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="lastName">
          
        </div>



        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Up load Photo</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="photo">
          
        </div>

        
<!-- 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date of Join</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="doj">
          
        </div> -->


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Location</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="location">
          
        </div>

       

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">contact</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="contact">
          
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="email">
          
        </div>




        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">userName</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="userName">
          
        </div>       
        
        



        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="pswd">
          
        </div> 
        
        
        

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role">
                <option value="Customer">Customer</option>

            </select>
          
        </div>  

   




        <button type="submit" class="btn btn-lg btn-dark"  name="addUser">Add User</button>
        </form>

    
</body>
</html>