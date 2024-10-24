<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="productsFirst.css">
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

<!-- LOADER -->

<!-- <div id="loader">

  <div class="spinner-border text-success" role="status">
      <span class="visually-hidden">Loading--------</span>  
      <h1>F</h1>          
  </div>

  <span class="boxSized"></span>

  <h1>Fresh Mart</h1>

  <span class="boxSized"></span>

  <h6>please wait</h6>
  <h6>------</h6>






</div> -->

<!-- LOADER  END-->
    <div class="navBar">
        <div class="link selectedGreen">
        <img src="../../../assets/images/product.png" alt="sorry" class="supplierIcons" style=" height: 30px;
    width: 30px;">
            <p>All Products</p>
            <!-- <hr class="optionHr"> -->
        </div>

        <div class="link">
        <img src="../../../assets/images/inventory2.png" alt="sorry" class="supplierIcons" style=" height: 30px;
    width: 30px;">
            <p>Inventory</p>
            <!-- <hr class="optionHr"> -->
        </div>


        <div class="link">
        <img src="../../../assets/images/add-product.png" alt="sorry" class="supplierIcons" style=" height: 30px;
    width: 30px;">
            <p>Add Product</p>
            <!-- <hr class="optionHr"> -->
        </div>

    </div>



<!-- MIDDLE DIV TO DISPLAY PRODUCT OPTIONS -->
    <div id="middleDisplay">








    </div>




    
    
    <script src="productsFirst.js"></script>
</body>
</html>





<?php
?>