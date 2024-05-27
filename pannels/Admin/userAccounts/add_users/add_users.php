<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_Users.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
        <form action="add_user_data_logic.php" method="post" enctype="multipart/form-data">

        <h4>User Details</h4>

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
                <option value="Admin">Admin</option>
                <option value="Employee">Employee</option>
            </select>
          
        </div>  

   




        <button type="submit" class="btn btn-lg" id="lightgreen" name="addUser">Add User</button>
        </form>












    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="add_users.js"></script>
</body>
</html>

