
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


    <div class="searchProducts">
        <div class="search">
            <input type="text" placeholder="Search Product" id="searchProductInv">
            <button>Search</button>
        </div>
       

    </div>


   <!-- BOOTSTRAP TABLE -->
   <form action="edit_add_inventory_form.php" method="post" id="inventoryform"> 
      <input type="text" name="sid" id="sid" style="visibility:hidden;height:10px;">
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
      <tbody id="tbBody">


        <?php
      try{  

          include("../../../../assets/database_connect/database.php");

          if(!$conn){
            echo "connecting to the database failed";     
          }else{

          }


          $sqlquery="select * from inventory";
          $results=mysqli_query($conn,$sqlquery);

          if($results){
            if(mysqli_num_rows($results)>0){
              while($row=mysqli_fetch_assoc($results)){


                echo <<<HTML
                <tr class='tbRow'>
                    <th scope='row' class='tbData'>{$row['product_id']}</th>
                    <td class='tbData'>{$row['product_name']}</td>
                    <td class='tbData'>{$row['inventory_no']}</td>

                    <td class='actions'>
                        <button class='btn btn-primary edtBtn' type='button' >Edit Stock</button>
                    </td>

                    <td class='actions'>
                        <button class='btn btn-success addBtn' type='button'>Add Stock</button>
                    </td>
                </tr>
                HTML;


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

    </form>







<!-- FETCH PRODUCT ID -->

    <script src="inventory.js"></script>
</body>
</html>