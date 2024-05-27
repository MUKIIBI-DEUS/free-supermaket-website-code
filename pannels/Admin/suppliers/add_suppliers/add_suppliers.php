<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_suppliers.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

<!-- MAINCONTAINER -->
<div class="mainContainer">
<form action="addSupplierDatabaselogic.php" method="post">

                <h4>Supplier Details</h4>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="firstName">
                
                </div>



        



        <!-- SUPPLIER -->
                
                <div class="mb-3">

            
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="lastName">
                
                </div>



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="contact">
                
                </div>



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Location</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="location">
                
                </div>


                <h4>Product List</h4>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ProductID</label>
                    <input type="number" class="form-control" id="productId" aria-describedby="emailHelp" autocomplete="off" required name="product_id" readonly>
                
                </div>

            


                <button type="submit" class="btn btn-lg" id="lightgreen">Add supplier</button>
        </form>












<!-- Product List afterFrom -->
    <div class="productList">
        <p>Select a product for auto fill</p>






    <table class="table table-striped pdtList" >
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product_ID</th>
      <th scope="col">Product Name</th>

    </tr>
  </thead>
  <tbody>


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
<script src="add_suppliers.js"></script>
</body>
</html>