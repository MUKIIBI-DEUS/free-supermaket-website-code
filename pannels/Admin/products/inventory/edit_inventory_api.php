<?php

    ob_start();
    session_start();
    $userId=intval($_SESSION['userId']);//fetch user id from the session
    $ipAddress = $_SERVER['REMOTE_ADDR'];//fetch client ip address


    //fetch all values from name
    $product_id=intval($_POST['product_id']);
    $product_name=$_POST['pdtName'];
    $inventoryNumber=$_POST['inventoryNo'];
    
    //update or make some changes in the inventory
 
        //insert a connection
        include("../../../../assets/database_connect/database.php");//the database connection file and logic(coon is disposed to the current file because of the included file so  dont ask your self where it comes from)

        //FETCH PREVIOUS PRODUCT STOCK VALUES BEFORE UPDATE FOR LOG PURPOSE
        $prev_stock_value_log="select * from inventory where product_id=$product_id";

        $results=$conn->query($prev_stock_value_log);

        $row=mysqli_fetch_assoc($results);

        $prev_stock_value=$row['inventory_no'];







        $updateSql="update inventory set inventory_no=? where product_id=?";

        $stmt=$conn->prepare($updateSql);
        $stmt->bind_param("ss",$inventoryNumber,$product_id);//ss for ?? parameters in the updatesql

        If($stmt->execute()){

           


                //final log sql for stock modification
                $sql_for_logs="INSERT INTO logs(user_id_for_logs,action_type,described,new_values,ip_address,affected_table,affected_record_id) VALUES($userId,'edit product stock','$prev_stock_value','$inventoryNumber','$ipAddress','inventory',$product_id)";


                $log_add_product_intial_stock=$conn->query($sql_for_logs);//insert log            

        
        

        echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
                        <h2 style='font-weight: bold; margin-top: 10px;'>Product inventory has been updated successfully!</h2>
                        <p style='margin-bottom: 20px;'>Product has been added successfully.</p>";
      
    }else{
        echo "something went wrong";
    }
    









?>