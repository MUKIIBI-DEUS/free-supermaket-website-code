<?php
    //fetch all values from name
    $product_id=$_POST['product_id'];
    $new_stock=intval($_POST['new_stock']);//convert the new stock into number to avoid data type collision
    
    //update or make some changes in the inventory
    if(isset($_POST['addNewStock'])){
        //insert a connection
        include("../../../../assets/database_connect/database.php");//the database connection file and logic(coon is disposed to the current file because of the included file so  dont ask your self where it comes from)



        $newStockSql="update inventory set inventory_no=(inventory_no+?) where product_id=?";

        $stmt=$conn->prepare($newStockSql);
        $stmt->bind_param("ss",$new_stock,$product_id);//ss for ?? parameters in the updatesql

        $stmt->execute();

        echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;'>
        <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
        <h2 style='font-weight: bold; margin-top: 10px;'>New stock has been added</h2>
        <p style='margin-bottom: 20px;'>New stock has been add successfully!.</p>";

    }









?>