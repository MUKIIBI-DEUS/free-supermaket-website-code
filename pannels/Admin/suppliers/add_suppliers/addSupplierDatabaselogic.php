<?php
    ob_start();
    session_start();
    $userId=intval($_SESSION['userId']);//fetch user id from the session
    $ipAddress = $_SERVER['REMOTE_ADDR'];//fetch client ip address
try{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $contact=$_POST['contact'];
    $location=$_POST['location'];
    $productid=$_POST['product_id'];



    //sending the data to the database
    
    include("../../../../assets/database_connect/database.php");//include the conn from the include file
    $connection=$conn;

    if($connection){
        $sql="insert into supplier(fname,lname,s_contact,s_location,product_id) values (?,?,?,?,?)";

        $statement=$connection->prepare($sql);

        $statement->bind_param("sssss",$firstName,$lastName,$contact,$location,$productid);

        if($statement->execute()){//if the excution was success full then print the message and even log the info

            //fetch the last supplier id inserted in supplier for logs

            $last_id_sql_log="SELECT MAX(supplier_id) AS last_id from supplier";

            $last_id_results=$conn->query($last_id_sql_log);
            $last_id_row_info=mysqli_fetch_assoc($last_id_results);
            $last_id_value=intval($last_id_row_info['last_id']);

            //final log sql for supplier registration
            $sql_for_logs="INSERT INTO logs(user_id_for_logs,action_type,described,new_values,ip_address,affected_table,affected_record_id) VALUES($userId,'add supplier','empty','firstName=>$firstName::LastName=>$lastName::contact=>$contact::location=>$location::productId=>$productid','$ipAddress','supplier',$last_id_value)";


            $log_add_supplier=$connection->query($sql_for_logs);//insert log
    
            



            echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
            <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
            <h2 style='font-weight: bold; margin-top: 10px;'>New  supplier has been added successfully!</h2>
            <p style='margin-bottom: 20px;'>New supplier has been added successfully.</p>
            <button style='background-color: #337ab7; color: #ffffff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;'><a href='all_suppliers.php' style='text-decoration: none; color: #ffffff;'>Go back to the All  suppliers tab on top to view changes</a></button>
            </div>";   


        }



        
    }else{
        echo "Failed";
    }











}catch(Exception $e){
    echo "<br>"."error occured".$e->getMessage();
}

?>
