<?php
    $id=intval($_POST["sid"]);
    // echo "this is the selected id".$id;

    include("../../../../assets/database_connect/database.php");
    
    $connection=$conn;//insert a connection from the include file   

    if($connection->error){
        echo "Connection Failed :".$connection->error;

    }else{//if connection is success

                $sql="select * from inventory where product_id=$id";

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
        form{
            padding:10px;
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

                <h4>Add new Stock of the Product</h4>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="product_id" value="<?=$row['product_id']?>" readonly>
                
                </div>                

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="pdtName" value="<?=$row['product_name']?>" readonly>
                
                </div>



        



        <!-- SUPPLIER -->
                
                <div class="mb-3">

            
                    <label for="exampleInputEmail1" class="form-label" style="color:green;">New Stock</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="new_stock" placeholder="Place the new stock here please(numbers only)">
                
                </div>







                                
                <div class="mb-3">

            
                    <label for="exampleInputEmail1" class="form-label">Expiry Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required name="expiry_date" >
                
                </div>








      

   

            


                <button type="button" class="btn btn-primary" name="updateSupplier" onclick="confirmSubmission('addNewStock_api.php','Are sure you want to add new Stock to this product')">Add Stock</button>


                <!-- <button type="button" class="btn btn-danger" name="deleteBtn" onclick="confrirmAction('deleteSupplier_api.php','Are sure you want to delete this supplier')">Remove supplier</button> -->
        </form>










       


        









    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="inventory.js"></script>
</body>
</html>







