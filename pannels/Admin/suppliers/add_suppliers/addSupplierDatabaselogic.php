<?php
try{
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $contact=$_POST['contact'];
    $location=$_POST['location'];
    $productid=$_POST['product_id'];



    //sending the data to the database
    $connection=mysqli_connect("localhost","root","","freshmart");

    if($connection){
        $sql="insert into supplier(fname,lname,s_contact,s_location,product_id) values (?,?,?,?,?)";

        $statement=$connection->prepare($sql);

        $statement->bind_param("sssss",$firstName,$lastName,$contact,$location,$productid);

        $statement->execute();


        
    }else{
        echo "Failed";
    }











}catch(Exception $e){
    echo "<br>"."error occured".$e->getMessage();
}

?>
