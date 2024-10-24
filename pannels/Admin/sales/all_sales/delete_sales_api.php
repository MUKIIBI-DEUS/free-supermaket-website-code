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


        //FETCH ALL NAME VALUES FROM update_sales_form
        $sales_id = $_POST["sales_id"];
        $product_id=$_POST["product_id"];
        $employee_id=$_POST["employee_id"];
        $quantity = intval($_POST["qty"]);
        $total = intval($_POST['total']);
        $profit = intval($_POST["profit"]);
        $date_of_sale = $_POST["date_of_sale"];
        $sale_time = $_POST["sale_time"];
        $product_Name=$_POST["product_Name"];



        


        

       
            $sql2 = "DELETE FROM sales WHERE sales_id='$sales_id'";// sql statement to delete the sale

            $results2 = $conn->query($sql2);//delete the sale finally


            if ($results2 && isset($_SESSION['userId'])) {//check if the action was successful


                $sql_for_logs="INSERT INTO logs(user_id_for_logs,action_type,described,new_values,ip_address,affected_table,affected_record_id) VALUES($userId,'delete','sales_id=>$sales_id,employee_id=>$employee_id::product_id=>$product_id::productName=>$product_Name::qauntity=>$quantity::Total=>$total::profits=>$profit::DOS=>$date_of_sale::sales_time=>$sale_time','empty','$ipAddress','sales','$sales_id')";


                $log_delete=$conn->query($sql_for_logs);//insert log



                echo "<div style='background-color: #dc3545; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <i style='font-size: 48px; color: #fff;' class='fas fa-check-circle'></i>
                        <h2 style='font-weight: bold; margin-top: 10px; color:#fff;'>Sale info has been deleted successfully!</h2>
                        <p style='margin-bottom: 20px; color:#fff;'>Sale has been deleted successfully.</p>
                    </div>";

                    
            } else {
                echo "Something went wrong";
            }
        } 
?>
