<?php
    // Start output buffering and session
    ob_start();
    session_start();


    $userId=intval($_SESSION['userId']);//fetch user id from the session
    $ipAddress = $_SERVER['REMOTE_ADDR'];//fetch client ip address

    

    
    include("../../../../assets/database_connect/database.php"); // Include the database connection

    if ($conn->error) {
        echo "Connection Failed: " . $conn->error;
    } else { // If the connection is successful
        $sales_id = $_POST["sales_id"];
        $product_id=$_POST["product_id"];
        $employee_id=$_POST["employee_id"];
        $quantity = intval($_POST["qty"]);
        $total = intval($_POST['total']);
        $profit = intval($_POST["profit"]);
        $date_of_sale = $_POST["date_of_sale"];
        $sale_time = $_POST["sale_time"];
        $product_Name=$_POST["product_Name"];



        //FETCH PREVIOUS SALES DETAILS FOR LOG ACTIVITY BEFORE UPDATE
        $prv_values_sql="SELECT * from sales WHERE sales_id='$sales_id'";
        $previous_sale_values=$conn->query($prv_values_sql);

        
        $row=$previous_sale_values->fetch_assoc();//row

        $prv_sales_id=$row['sales_id'];
        $prv_employee_id=$row['employee_id'];
        $prv_product_id=$row['product_id'];
        $prv_product_Name=$row['product_Name'];
        $prv_qty=$row['qty'];
        $prv_total=$row['total'];
        $prv_profit=$row['profit'];
        $prv_date_of_sale=$row['date_of_sale'];
        $prv_sale_time=$row['sale_time'];
       

      




        echo "<pre>";
        // print_r($_POST);  // Print all POST data
        echo "</pre>";
    

      
            $sql = "UPDATE sales SET qty='$quantity', total='$total', profit='$profit', date_of_sale='$date_of_sale', sale_time='$sale_time' WHERE sales_id='$sales_id'";

            $results = $conn->query($sql);//update the sale

            if ($results) {//if product is deleted then log the information

                $sql_for_logs="INSERT INTO logs(user_id_for_logs,action_type,described,new_values,ip_address,affected_table,affected_record_id) VALUES($userId,'update','sales_id=> $prv_sales_id::employee_id=>$prv_employee_id::product_Id=>$prv_product_id::productName=>$product_Name::qauntity=>$prv_qty::Total=> $prv_total::profits=>$prv_profit::DOS=>$prv_date_of_sale::sales_time=>$prv_sale_time','sales_id=>$sales_id,employee_id=>$employee_id::product_id=>$product_id::productName=>$product_Name::qauntity=>$quantity::Total=>$total::profits=>$profit::DOS=>$date_of_sale::sales_time=>$sale_time','$ipAddress','sales','$sales_id')";


                $log_delete=$conn->query($sql_for_logs);  //insert log



                echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
                        <h2 style='font-weight: bold; margin-top: 10px;'>Sale info has been updated successfully!</h2>
                        <p style='margin-bottom: 20px;'>Sale has been updated successfully.</p>
                    </div>";
            } else {
                echo "Something went wrong";
            }
        } 

?>
