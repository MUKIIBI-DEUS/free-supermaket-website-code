<?php
    //fetch all values from name
    $product_id=$_POST['product_id'];
    $product_name=$_POST['pdtName'];
    $inventoryNumber=$_POST['inventoryNo'];
    
    //update or make some changes in the inventory
    if(isset($_POST['updateProductInventory'])){
        //insert a connection
        include("../../../../assets/database_connect/database.php");//the database connection file and logic(coon is disposed to the current file because of the included file so  dont ask your self where it comes from)



        $updateSql="update inventory set inventory_no=? where product_id=?";

        $stmt=$conn->prepare($updateSql);
        $stmt->bind_param("ss",$inventoryNumber,$product_id);//ss for ?? parameters in the updatesql

        $stmt->execute();


        echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
                        <h2 style='font-weight: bold; margin-top: 10px;'>Product inventory has been updated successfully!</h2>
                        <p style='margin-bottom: 20px;'>Product has been added successfully.</p>";
      

    }









?>