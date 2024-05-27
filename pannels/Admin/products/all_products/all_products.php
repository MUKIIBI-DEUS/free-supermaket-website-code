

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="all_products.css">
    <link rel="stylesheet" href="bootstrap.css">


</head>

<body>
    <div class="searchProducts">
        <div class="search">
            <input type="text" placeholder="Search Product" id="searchPdt">
            <button>Search</button>
        </div>
       


        <select name="" id="">

            <option value="">P_Name</option>
            <option value="">Category</option>
            <option value="">Price</option>
            <option value="">P_ID</option>
            <option value="">UnitCost</option>
            <option value=""></option>
        </select>

    </div>


   <!-- BOOTSTRAP TABLE -->
    <table class="table table-striped">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product_ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">UnitCost</th>
      <th scope="col">ProductImage</th>
      <th scope="col" class="actionTitle">Actions</th>
      <th scope="col" ></th>

    </tr>
  </thead>
  <tbody id='tbBody'>
<!-- EXAMPLE ROW BEFORE PHP -->
<!--       
    <tr class="tbRow">
      <th scope="row" class="tbData">1</th>
      <td class="tbData">Milk</td>
      <td class="tbData">Home</td>
      <td class="tbData">Douglas</td>
   
      <td class="actions editBtn openProductEditBar tbData">Edit</td>
      <td class="actions deleteBtn"></td>
    </tr> -->
    <!-- Fetching the data from feshmart database feeding the all_products Tables -->
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
                          <td class='tbData'>{$row['category']}</td>
                          <td class='tbData'>{$row['unitcost']}</td>

                          <td class='tbData'><img src='{$row['productImage']}' alt='sorry'style='height:70px;width:90px;border-radius:5px'></td>

                          <td class='actions editBtn openProductEditBar tbData'>Edit</td>
                          <td class='actions deleteBtn'></td>
                      </tr>";
                  }
              }
          }
      } catch (Exception $e) {
          // Handle any exceptions that might occur
          echo "An error occurred: " . $e->getMessage();
      }
    
    
    
    
    ?>








    <!-- <tr class="tbRow">
      <th scope="row" class="tbData">2</th>
      <td class="tbData">Soda</td>
      <td class="tbData">Beverages</td>
      <td class="tbData">Olivia</td>
      <td class="tbData">2000</td>
      <td class="actions editBtn openProductEditBar tbData">Edit</td>
      <td class="actions"></td>
    </tr>


    <tr>
      <th scope="row">3</th>
      <td>Beer</td>
      <td>Beverages</td>
      <td>Deus</td>
      <td>3112000</td>
      <td class="actions">Edit</td>
      <td class="actions"></td>
    </tr>
 -->

  </tbody>
</table>
 
    </table>





<!-- EDITBAR -->
<!-- editBar to appear on any edit click -->
    <form class="editProductBar" action="editPdtdatabase_logic.php" method="post">
   
      <input type="text" placeholder="Product Id" class="inpt_values" readonly  name="product_id">


      <input type="text" placeholder="Product Name" class="inpt_values" name="product_name">


      <input type="text" placeholder="Category" class="inpt_values" name="category">

      <input type="text" placeholder="Unit Cost" class="inpt_values" name="unitCost">


 


          <input type="submit" class="updateProduct btn btn-primary" name="updateProduct" value="Update">

          <input type="submit" class="deleteProduct btn btn-danger" name="deleteProduct" value="Remove" >

          <button id="cancelUpdate" class="btn btn-dark"><a href="all_products.php" style="text-decoration:none;">Cancel</a></button>



    </form>









    <script src="allproducts.js"></script>
</body>
</html>


 