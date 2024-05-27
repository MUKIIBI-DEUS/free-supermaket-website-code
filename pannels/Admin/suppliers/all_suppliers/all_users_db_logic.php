<?php
    $supplierId=$_POST['supplier_id'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $contact=$_POST['contact'];
    $location=$_POST['location'];
    $productId=$_POST['product_id'];

    $conn=mysqli_connect("localhost","root","","freshmart");

    if($conn){
        if(isset($_POST['updateSupplier'])){
            $sql="update supplier set fname=?,lname=?,s_contact=?,s_location=?,product_id=? where supplier_id=?";

            $stmt=$conn->prepare($sql);
            $stmt->bind_param("ssssss",$firstName,$lastName,$contact,$location,$productId,$supplierId);
            $stmt->execute();

            echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
            <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
            <h2 style='font-weight: bold; margin-top: 10px;'>Data updated successfully!</h2>
            <p style='margin-bottom: 20px;'>Your data has been updated successfully.</p>
            <button style='background-color: #337ab7; color: #ffffff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;'><a href='all_suppliers.php' style='text-decoration: none; color: #ffffff;'>Go back to view page</a></button>
            </div>";       
        }



        if(isset($_POST['deleteBtn'])){
            $sql="delete from supplier  where supplier_id=?";

            $stmt=$conn->prepare($sql);
            $stmt->bind_param("s",$supplierId);
            $stmt->execute();

            echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
            <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
            <h2 style='font-weight: bold; margin-top: 10px;'>Data deleted successfully!</h2>
            <p style='margin-bottom: 20px;'>Your data has been deleted successfully.</p>
            <button style='background-color: #337ab7; color: #ffffff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;'><a href='all_suppliers.php' style='text-decoration: none; color: #ffffff;'>Go back to view page</a></button>
            </div>";       
        }
        
    }else{
        echo "connection failed";
    }

    









?>