<?php
    $server="localhost";
    $userName="root";
    $password="";
    $dbName="freshmart";
    $conn="";


    try{
        $conn=mysqli_connect($server,$userName,$password,$dbName);

        if($conn){
            
        }
        else{
            echo "<script>alert('Failed to connect')</script>";
        }





    }catch(Exception $e){
        echo "Error occured".$e->getMessage();
    }


?>