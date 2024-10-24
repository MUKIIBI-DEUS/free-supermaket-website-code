<?php
    include("../../../../assets/database_connect/database.php");//the database connection file and logic(coon is disposed to the current file because of the included file so  dont ask your self where it comes from)

    //fetch all values from the form
    $product_id=($_POST['product_id']);
    $productName=$_POST['product_name'];
    $category=$_POST['category'];
    $unitCost=$_POST['unitCost'];
    $buyingPrice=intval($_POST['buyingPrice']);



    //UPDATE PRODUCT details in both product and inventory tables when the updateButton is clicked


        //update the product in the product table first
        $sql="update  products set product_name=?,category=?,buying_price=?,unitcost=? where product_id=? ";
       
        $statement1=$conn->prepare($sql);
        $statement1->bind_param("sssss",$productName,$category,$buyingPrice,$unitCost,$product_id);

        $statement1->execute();


        //update the product in the inventory table secondly since on the name of the product is to be updated not the id which might cause referential errors if inventory not first
        $sql2="update  inventory set product_name=? where product_id=? ";
       
        $statement2=$conn->prepare($sql2);
        $statement2->bind_param("ss",$productName,$product_id);

        if($statement2->execute()){

              

        echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
                        <h2 style='font-weight: bold; margin-top: 10px;'>Product info has been updated successfully!</h2>
                        <p style='margin-bottom: 20px;'>Product has been updated successfully.</p>";

        }
        
        
        
        ?>