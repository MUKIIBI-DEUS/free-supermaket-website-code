<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="inventory.css">
    <link rel="stylesheet" href="bootstrap.css">

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
            /* border-radius:9px; */

           
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


   <!-- BOOTSTRAP TABLE -->
    <table class="table table-striped">
    <table class="table">
  <thead id="tbhead">
    <tr>
      <th scope="col">Product_ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Inventory_no</th>
      <!-- <th scope="col" class="actionTitle">Actions</th> -->
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

      include("../../../assets/database_connect/database.php");

      if(!$conn){
        echo "connecting to the database failed";     
      }else{

      }


      $sqlquery="select * from inventory where inventory_no<=10";//select all stock below 10 or ==10
      $results=mysqli_query($conn,$sqlquery);

      if($results){
        if(mysqli_num_rows($results)>0){
          while($row=mysqli_fetch_assoc($results)){


              echo "
              

                    
                    <tr class='tbRow'>
                      <th scope='row' class='tbData'>{$row['product_id']}</th>
                      <td class='tbData'>{$row['product_name']}</td>
                      <td class='tbData'>{$row['inventory_no']}</td>
           


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
    <script src="inventory.js"></script>
</body>
</html>