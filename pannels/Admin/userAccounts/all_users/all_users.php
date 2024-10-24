




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="all_users.css">
    <link rel="stylesheet" href="bootstrap.css">


    <style>
        #loader{
            position:fixed;
            width: 100%;
            top:0;
            left:0;
            bottom:0;
            background:#E7E5E5;
            color:#024E31;
            z-index:9999;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            /* border-radius:9px; */

           
        }
        .boxSized{
            margin-left:20px;
        }



    </style>

</head>

<body>

<div id="loader">

<div class="spinner-border text-success" role="status">
    <span class="visually-hidden">Loading--------</span>  
    <h1>F</h1>          
</div>

<span class="boxSized"></span>

<h1>Fresh Mart</h1>

<span class="boxSized"></span>

<h6>please wait</h6>
<h6>------</h6>






</div>

<!-- LOADER  END-->



    <div class="searchUsers">
        <div class="search">
            <input type="text" placeholder="Search user">
            <button>Search</button>
        </div>



       

        <select name="" id="">

            <option value="">User.ID</option>
            <option value="">F_name</option>
            <option value="">L_name</option>
            <option value="">Photo</option>
            <option value="">D0J</option>
            <option value="">Location</option>
            <option value="">Contact</option>
            <option value="">Email</option>
            <option value="">User Name</option>
            <option value="">password</option>
            <option value="">Role</option>
        </select>



    </div>

   <!-- BOOTSTRAP TABLE -->
    <table class="table table-striped">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">User_ID</th>
      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
      <th scope="col">Photo</th>
      <th scope="col">Date of Join</th>
      <th scope="col">Location</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">User Name</th>
      <th scope="col">User password</th>
      <th scope="col">Role</th>
      <!-- <th scope="col">Pdt1</th>
      <th scope="col">Pdt2</th>
      <th scope="col">Pdt3</th> -->
      <th scope="col" class="actionTitle">Actions</th>
      <th scope="col" ></th>

    </tr>
  </thead>
  <tbody>





    <!-- PHP -->
    <?php
        include("../../../../assets/database_connect/database.php");//the database connection file and logic


        $sql="select * from employee";

        $results=mysqli_query($conn,$sql);

        if($results){
            if(mysqli_num_rows($results)>0){
                while($row=mysqli_fetch_assoc($results)){
                    echo "    <tr class='tbRow'>
                    <th scope='row' class='tbData'>{$row['e_id']}</th>
                    <td class='tbData'>{$row['fname']}</td>
                    <td class='tbData'>{$row['lname']}</td>
                    <td class='tbData'>   <img src='{$row['e_photo']}' alt='' style='height:50px;width:50px;'></td>
                    <td class='tbData'>{$row['doj']}</td>
                    <td class='tbData'>{$row['e_location']}</td>
                    <td class='tbData'>{$row['e_contact']}</td>
                    <td class='tbData'>{$row['e_email']}</td>
                    <td class='tbData'>{$row['userName']}</td>
                    <td class='tbData'>{$row['e_password']}</td>
                    <td class='tbData'>{$row['e_role']}</td>
                    
              
                    <td class='actions editBtn openUserEditBar tbData'>Edit</td>
                    <td class='actions deleteBtn'></td>
                  </tr>";
                }
            }
        }















    ?>
 


  </tbody>
</table>
 
    </table>



<!-- EDITBAR -->
<!-- editBar to appear on any edit click -->
    <!-- <div class="editUserBar"> -->
   
    <form class="editUserBar">
        <div class="mb-3">

       
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">User_id</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"  readonly disabled >
          
        </div>



        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">First name</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" disabled>

        </div>

        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Last Name</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>

       
        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Contact</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>

   

        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Location</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>







        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Product 1</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>




        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Product 2</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>



        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Product 3</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>




        <!-- <button type="submit" class="btn btn-lg btn-success">Add user</button> -->
        <div class="btns">
            <button class="btn updateSales">Update</button>
            <button class="btn deleteSales">Delete</button>
            <button class="btn" id="cancelUpdate">Cancel</button>
        </div>


    </form>







        <script>
            //Handle the loader 
document.onreadystatechange=function(){
    if(document.readyState !=="complete"){
        document.querySelector('#loader').style.display="flex";//enable the loader if the page isnt fully loaded
        console.log("page isnt ready");
    }else{
        document.querySelector('#loader').style.display="none";//disable the loader if the page is fully loaded
        console.log("page is ready");
    }
}
        </script>
    <script src="all_users.js"></script>
</body>
</html>


