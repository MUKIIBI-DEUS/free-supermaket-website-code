<?php
    $id = $_POST["sid"];
    include("../../../../assets/database_connect/database.php");

    $connection = $conn;//set conn from include file to connnection

    if ($connection->error) {
        echo "Connection Failed: " . $connection->error;
    } else {
        $sql = "SELECT * FROM sales WHERE sales_id = $id";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit/Delete Sale</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="registerStudents.css" rel="stylesheet">

    <style>
        .updateForm {
            background: #024E31;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            padding-left: 16px;
            height: 50px;
            width: 50%;
            margin-left: 37px;
            border-radius: 8px;
            align-items: center;
        }
    
        form {
            padding: 40px;
        }

        input {
            margin-top: 10px;
        }

        .btn {
            margin-top: 10px;
        }

        a {
            color: white;
            text-decoration: none;
        }
        a:hover {
            color: black;
        }

        label {
            font-weight: bold;
        }
      
        #loader {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            background: gray;
            color: white;
            z-index: 9999;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 9px;
        }
        #boxSized {
            margin-left: 20px;
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
<!-- LOADER END -->

<div class="updateForm primary">
    <a href="all_sales.php"><img src="./back-tb.png" alt="">All sales</a>
    <h4 style="margin: 30px; color: white;">EDIT/DELETE SALE</h4>
</div>

<form id="salesForm" method="post">
    <div class="formDiv">
        <label for="sales_id" class="form-label" style="margin-top:10px;">Sales Id</label>
        <input class="form-control" type="text" name="sales_id" required value="<?=$row['sales_id']?>" readonly>
        
        <label for="employee_id" class="form-label" style="margin-top:10px;">Employee_id</label>
        <input class="form-control" type="text" name="employee_id" required value="<?=$row['employee_id']?>" readonly>

        <label for="product_id" class="form-label" style="margin-top:10px;">Product_id</label>
        <input class="form-control" type="text" name="product_id" required value="<?=$row['product_id']?>" readonly>

        <label for="product_Name" class="form-label" style="margin-top:10px;">Product Name</label>
        <input class="form-control" type="text" name="product_Name" required value="<?=$row['product_Name']?>" readonly>

        <label for="qty" class="form-label" style="margin-top:10px;">Quantity</label>
        <input class="form-control" type="text" name="qty" required value="<?=$row['qty']?>">

        <label for="total" class="form-label" style="margin-top:10px;">Total Amount</label>
        <input class="form-control" type="text" name="total" required value="<?=$row['total']?>">

        <label for="profit" class="form-label" style="margin-top:10px;">Profit</label>
        <input class="form-control" type="text" name="profit" required value="<?=$row['profit']?>">

        <label for="date_of_sale" class="form-label" style="margin-top:10px;">Date of Sale</label>
        <input class="form-control" type="date" name="date_of_sale" required value="<?=$row['date_of_sale']?>">

        <label for="sale_time" class="form-label" style="margin-top:10px;">Time of Sale</label>
        <input class="form-control" type="time" name="sale_time" required value="<?=$row['sale_time']?>">        

        <button type="button" class="btn btn-primary" onclick="confirmAction('update_sales_api.php', 'Are you sure you want to save the changes?')">Save changes</button>
        <button type="button" class="btn btn-danger" onclick="confirmAction('delete_sales_api.php', 'Are you sure you want to delete this sale?')">Delete</button>
    </div>
</form>

<script>
    function confirmAction(actionUrl, message) {
        if (confirm(message)) {
            document.getElementById('salesForm').action = actionUrl;//set the action of form basing on the clicked button and intended api
            document.getElementById('salesForm').submit();//submit the form finally on yes
        }
    }

    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector('#loader').style.display = "flex";
        } else {
            document.querySelector('#loader').style.display = "none";
        }
    }
</script>

</body>
</html>
