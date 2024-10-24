
<?php
$id = $_POST["sid"];
include("../../../../assets/database_connect/database.php");

$connection = $conn;//set conn from include file to connnection

if ($connection->error) {
    echo "Connection Failed: " . $connection->error;
} else {
    $sql = "SELECT * FROM products WHERE product_id= $id";
    $results = $connection->query($sql);
    $row = mysqli_fetch_assoc($results);

    if (!$results) {
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
    <link rel="stylesheet" href="bootstrap.css">


    <style>
        form{
            padding:70px;
        }
        .editPdts{
            display:flex;
            justify-content:space-between;
            padding-left: 5px;
            align-items:center;
            position:sticky;
            height:50px;
            top:0;
            color:#fff;
            background:#024e31;
            border-radius:5px;
        }
    </style>
</head>
<body>
   

<form action="editPdtdatabase_logic.php" method="post" enctype="multipart/form-data" id="productForm">
 <div class="editPdts">
 <h1>Edit Products</h1>
 <!-- <img src="../../../../assets/images/uploads/pen.png" alt="sorry" style="height:40px;width:40px;"> -->
 </div>


<!-- Product buying price -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Id</label>

    <input type="number" class="form-control" name="product_id" required autocomplete="off" min="100" readonly value="<?=$row['product_id']?>" >

</div>



<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="product_name" required  value="<?=$row['product_name']?>">
  
</div>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category</label>
    <select class="form-select" aria-label="Default select example" name="category">

        <option selected  value="<?=$row['category']?>"><?=$row['category']?></option>
        <option value="Electronics">Electronics</option>
        <option value="Clothing and Fashion">Clothing and Fashion</option>
        <option value="Home and Kitchen">Home and Kitchen</option>
        <option value="Beauty and Personal Care">Beauty and Personal Care</option>
        <option value="Health and Fitnes">Health and Fitness</option>
        <option value="Automotive">Automotive</option>
        <option value="Books and Literature">Books and Literature</option>
        <option value="Sports and Outdoor">Sports and Outdoor</option>
        <option value="Furniture and Decoration">Furniture and Decoration</option>
        <option value="Toys and Games">Toys and Games</option>
        <option value="Food and Beverages">Food and Beverages</option>
        <option value="Pet Supplies">Pet Supplies</option>
        <option value="Office Supplies">Office Supplies</option>
        <option value="Baby and Maternity">Baby and Maternity</option>
        <option value="Tools and Home Improvement">Tools and Home Improvement</option>


        







    </select>

</div>

<!-- Product buying price -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Buying price (only numbers or digits)</label>

    <input type="number" class="form-control" name="buyingPrice" required autocomplete="off" min="100" value="<?=$row['buying_price']?>">

</div>


<!-- Product UnitCOst -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Selling cost (only numbers or digits)</label>

    <input type="number" class="form-control" name="unitCost" required autocomplete="off" min="100" value="<?=$row['unitcost']?>">

</div>



 



















<button type="button" class="btn btn-primary btn-lg" onclick="confirmAction('edit_product_api.php', 'Are you sure you want to save the changes?')">Save Changes</button>

<button type="button" class="btn btn-danger btn-lg" onclick="confirmAction('delete_product_api.php', 'Are you sure you want to delete this product?')" disabled>Delete Product</button>
</form>







<script>

function confirmAction(actionUrl, message) {
        if (confirm(message)) {
            document.getElementById('productForm').action = actionUrl;//set the action of form basing on the clicked button and intended api
            document.getElementById('productForm').submit();//submit the form finally on yes
        }
    }
</script>
</body>
</html>