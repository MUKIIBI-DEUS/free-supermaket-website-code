<?php
    $server="localhost";
    $userName="root";
    $password="";
    $dbName="freshmart";
    $conn="";
    // $conn=mysqli_connect("localhost","root","","freshmart");//create acconection to mysql database

    try{
        $conn=mysqli_connect("localhost","root","","freshmart");

        if($conn){
            
        }
        else{
            echo "<script>alert('Failed to connect')</script>";
        }





    }catch(Exception $e){
        echo "Error occured".$e->getMessage();
    }


?>