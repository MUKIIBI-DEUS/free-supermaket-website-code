<?php
    ob_start();
    session_start();
    $userId=intval($_SESSION['userId']);//fetch user id from the session
    $ipAddress = $_SERVER['REMOTE_ADDR'];//fetch client ip address

// fetch name values from the update supplier details form on confirmation
    $supplierId=$_POST['supplier_id'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $contact=$_POST['contact'];
    $location=$_POST['location'];
    $productId=$_POST['product_id'];

    include("../../../../assets/database_connect/database.php");//include the conn from the include file

    if($conn){
        if(isset($_SESSION['userId'])){//if the user id session value is set then go ahead to make chances 
            




            //fetch previous supplier info for logging
            $sqlLogs_stmt="select * from supplier where supplier_id=$supplierId";
            $results=mysqli_query($conn,$sqlLogs_stmt);
            $row=mysqli_fetch_assoc($results);//collect all row information from sql stmt

            $prev_supplier_id=$row['supplier_id'];
            $prev_fname=$row['fname'];
            $prev_lname=$row['lname'];
            $prev_s_contact=$row['s_contact'];
            $prev_s_location=$row['s_location'];
            $prev_product_id=$row['product_id'];








                $sql = "update supplier set fname='$firstName',lname='$lastName',s_contact='$contact',s_location='$location',product_id='$productId' where supplier_id=$supplierId";

                $results = $conn->query($sql);//update the supplier
    
                if ($results) {//if supplier is updated then log the information
    
                    $sql_for_logs="INSERT INTO logs(user_id_for_logs,action_type,described,new_values,ip_address,affected_table,affected_record_id) VALUES($userId,'update','supplier_id=>$supplierId,fname=>$prev_fname::lname=>$prev_lname::prev_s_contact=>$prev_s_contact::prev_s_location=>$prev_s_location::prev_product_id=>$prev_product_id','supplier_id=>$supplierId::fname=>$firstName::lname=>$lastName::contact=>$contact::location=>$location::productId=>$productId','$ipAddress','supplier','$supplierId')";


                    $log_update_supplier=$conn->query($sql_for_logs);//insert log
    
    
    
                    echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                            <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
                            <h2 style='font-weight: bold; margin-top: 10px;'>Supplier info has been updated successfully!</h2>
                            <p style='margin-bottom: 20px;'>Supplier info has been updated successfully.</p>
                        </div>";
                } else {
                    echo "Something went wrong";
                }
            






















           

        // if(isset($_POST['deleteBtn'])){
        //     $sql="delete from supplier  where supplier_id=?";

        //     $stmt=$conn->prepare($sql);
        //     $stmt->bind_param("s",$supplierId);
        //     $stmt->execute();

        //     echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
        //     <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
        //     <h2 style='font-weight: bold; margin-top: 10px;'>Data deleted successfully!</h2>
        //     <p style='margin-bottom: 20px;'>Your data has been deleted successfully.</p>
        //     <button style='background-color: #337ab7; color: #ffffff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;'><a href='all_suppliers.php' style='text-decoration: none; color: #ffffff;'>Go back to view changes</a></button>
        //     </div>";       
        }
        
    }else{
        echo "connection failed";
    }

    









?>