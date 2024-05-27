<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="inventory.css">
    <link rel="stylesheet" href="bootstrap.css">


</head>

<body>
    <div class="searchProducts">
        <div class="search">
            <input type="text" placeholder="Search Product">
            <button>Search</button>
        </div>
       


        <select name="" id="">

            <option value="">Product_id</option>
            <option value="">ProductName</option>
            <option value="">inventory_no</option>

        </select>

    </div>


   <!-- BOOTSTRAP TABLE -->
    <table class="table table-striped">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product_ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Inventory_no</th>
      <th scope="col" class="actionTitle">Actions</th>
      <th scope="col" ></th>

    </tr>
  </thead>
  <tbody>


    <?php
  try{  
      $serverName="localhost";
      $userName="root";
      $password="";
      $database="freshmart";

      $connection=mysqli_connect($serverName,$userName,$password,$database);

      if(!$connection){
        echo "connecting to the database failed";     
      }else{

      }


      $sqlquery="select * from inventory";
      $results=mysqli_query($connection,$sqlquery);

      if($results){
        if(mysqli_num_rows($results)>0){
          while($row=mysqli_fetch_assoc($results)){


              echo "
              

                    
                    <tr class='tbRow'>
                      <th scope='row' class='tbData'>{$row['product_id']}</th>
                      <td class='tbData'>{$row['product_name']}</td>
                      <td class='tbData'>{$row['inventory_no']}</td>
                      <td class='actions editBtn openProductEditBar tbData'>Edit</td>

                      <td class='actions deleteBtn'>
                            <button class='addStockBtn'>Add Stock</button>
                      
                      </td>

                    </tr>
              ";


          }





        }





        
      }else{
        echo "failed";
      }
  }catch(Exception $e){
    echo "<br>"."Error message".$e->getMessage();
  }
    ?>







  </tbody>
</table>
 
    </table>





<!-- EDITBAR -->
<!-- editBar to appear on any edit click -->
    <form class="editProductBar" action="inventory_databaseLogic.php" method="post">
      
          <input type="text" placeholder="Product Id" class="inpt_values" name="product_id" readonly>


          <input type="text" placeholder="Product Name" class="inpt_values" name="pdtName" readonly>

          <input type="number" placeholder="inventory number" class="inpt_values" name="inventoryNo" required>
      

        
          <input type="submit" name ="updateProductInventory"class="updateProduct btn btn-success" value="Update">
          <button type="submit" name ="" id="cancelUpdate" class="btn btn-dark"><a href="inventory.php" style="text-decoration:none;color:white;">Cancel</a></button>
          


    </form>


    <!-- ADDING NEW STOCK POPUP -->
    
        <form class="addNewStock" action="addNewStock_databaseLogic.php" method="post">

          <!-- input 1-->
            <div class="mb-3 row">

              <label for="inputPassword" class="col-sm-2 col-form-label">PID</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control editStockValues" id="inputPassword" autocomplete="off" name="product_id">
          </div>

          </div>
        

        <!-- input 2 -->
        <div class="mb-3 row">

          <label for="inputPassword" class="col-sm-2 col-form-label">Product</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control editStockValues" id="inputPassword" value="Milk" autocomplete="off">
          </div>

        </div>


           <!-- input 3 -->
        <div class="mb-3 row">
          
          <label for="inputPassword" class="col-sm-2 col-form-label">Stock</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPassword" placeholder="New Stock(Qty)" autocomplete="off" name="new_stock" required>


          </div>




        </div>



        <!-- Buttons -->
               
        <div class="mb-3 row">
          
          <button for="inputPassword" class="col-sm-2 col-form-label" id="cancelBtn">Cancel</button>
          
          <div class="col-sm-10">
            <button type="submit" id="add_btn"  value="Add New Stock" name="addNewStock">Add New Stock      <img src="../../../../assets/images/add.png" alt="sorry" class="supplierIcons" style=" height: 55px;
    width: 55px;"></button>


          </div>






        
</form>





    <script src="inventory.js"></script>
</body>
</html>