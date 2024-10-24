<?php
    $id=$_POST["supplier_id"];

    include("../../../../assets/database_connect/database.php");
    
    $connection=$conn;//insert a connection from the include file   

    if($connection->error){
        echo "Connection Failed :".$connection->error;

    }else{//if connection is success

                $sql="select * from supplier where supplier_id=$id";

                $results=$connection->query($sql);

                $row=mysqli_fetch_assoc($results);

                if($results){
                    // echo $row['fname'];
                    

                }else{
                    echo "Something went wrong";
                }
  



    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_suppliers.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        #loader{
            position:fixed;
            width: 100%;
            top:0;
            left:0;
            bottom:0;
            background:gray;
            color:white;
            z-index:9999;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            border-radius:9px;

           
        }
        #boxSized{
            margin-left:20px;
        }
        </style>    

</head>
<body>

<!-- LOADER -->

<div id="loader">

<div class="spinner-border text-light" role="status">
    <span class="visually-hidden">Loading--------</span>            
</div>

<span id="boxSized"></span>

<h1>Fresh Mart</h1>





</div>

<!-- LOADER  END-->  

<!-- MAINCONTAINER -->
<div class="mainContainer">
<form action="all_users_db_logic.php" method="post" id="updateform">

                <h4>Edit Supplier Details</h4>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Supplier_id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="supplier_id" value="<?=$row['supplier_id']?>" readonly>
                
                </div>                

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="firstName" value="<?=$row['fname']?>">
                
                </div>



        



        <!-- SUPPLIER -->
                
                <div class="mb-3">

            
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="lastName" value="<?=$row['lname']?>">
                
                </div>



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="contact" value="<?=$row['s_contact']?>">
                
                </div>



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Location</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="location" value="<?=$row['s_location']?>">
                
                </div>


                <h4>Product List</h4>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ProductID</label>
                    <input type="number" class="form-control" id="productId" aria-describedby="emailHelp" autocomplete="off" required name="product_id" value="<?=$row['product_id']?>" placeholder="select a product id from the  table">
                
                </div>

            


                <button type="button" class="btn btn-primary" name="updateSupplier" onclick="confrirmAction('updateSupplier_api.php','Are sure you want to save these changes made on this supplier')">Save changes</button>


                <button type="button" class="btn btn-danger" name="deleteBtn" onclick="confrirmAction('deleteSupplier_api.php','Are sure you want to delete this supplier')">Remove supplier</button>
        </form>










       

<!-- Product List afterFrom -->
    <div class="productList">
        <!-- fill the screen -->
        <!-- <button><a href="add_suppliers.php">Full screen</a></button> -->

        <p>Select a product for auto fill</p>

        <input type="text" placeholder="Search product" style="border-radius:4px;border:2px solid gray;outline:none;text-align:center;position:sticky;top:0;" id="searchPdt">






    <table class="table table-striped pdtList" >
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product_ID</th>
      <th scope="col">Product Name</th>

    </tr>
  </thead>
  <tbody id="tbBody">


    <?php
    
      try {
          include("../../../../assets/database_connect/database.php");
      
          $sql = "SELECT * FROM products order by product_name asc";
          $results = mysqli_query($conn, $sql); // $conn from the database file in the include()
      
          if ($results) { // Check if the query was successful and returned a mysqli_result object
              if (mysqli_num_rows($results) > 0) { // Check if there are any rows in the products table
                  // Loop through each row and display each value in the table
                  while ($row = mysqli_fetch_assoc($results)) {
                      echo "
                      <tr class='tbRow'>
                          <th scope='row' class='tbData'>{$row['product_id']}</th>
                          <td class='tbData'>{$row['product_name']}</td>
                         

             

            
                      </tr>";
                  }
              }
          }
      } catch (Exception $e) {
          // Handle any exceptions that might occur
          echo "An error occurred: " . $e->getMessage();
      }
    
    
    
    
    ?>









  </tbody>
</table>
 
    </table>










    </div>
</div>
        









    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="update_suppliers.js"></script>
</body>
</html>







