<?php
    include("../../../../assets/database_connect/database.php");//the database connection file and logic(coon is disposed to the current file because of the included file so  dont ask your self where it comes from)

    //fetch all values from the form
    $product_id=($_POST['product_id']);
    $productName=$_POST['product_name'];
    $category=$_POST['category'];
    $unitCost=$_POST['unitCost'];
    $buyingPrice=intval($_POST['buyingPrice']);


    //DELETE PRODUCT completely from the database even the inventory table  when delete button is clicked remember to start deleting from inventory just because of the referential integrity btn products and inventory tables
    



        //delete from the inventory table first to avoid referential integrity btn products and inventory table
        $sql3="delete from inventory where product_id=? ";

        $statement3=$conn->prepare($sql3);
        $statement3->bind_param("s",$product_id);

        $statement3->execute(); 



        //delete the product in the product table secondly to avoid referential integrity btn products and inventory table
        $sql4="delete from products where product_id=? ";

        $statement4=$conn->prepare($sql4);
        $statement4->bind_param("s",$product_id);

        if($statement4->execute()){

           

        echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
                        <h2 style='font-weight: bold; margin-top: 10px;'>Product  has been deleted successfully!</h2>
                        <p style='margin-bottom: 20px;'>Product has been deleted successfully.</p>";

        }
    




?>