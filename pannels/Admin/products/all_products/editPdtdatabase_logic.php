<?php
    include("../../../../assets/database_connect/database.php");//the database connection file and logic(coon is disposed to the current file because of the included file so  dont ask your self where it comes from)

    //fetch all values from the form
    $product_id=($_POST['product_id']);
    $productName=$_POST['product_name'];
    $category=$_POST['category'];
    $unitCost=$_POST['unitCost'];



    //UPDATE PRODUCT details in both product and inventory tables when the updateButton is clicked
    if(isset($_POST['updateProduct'])){

        //update the product in the product table first
        $sql="update  products set product_name=?,category=?,unitcost=? where product_id=? ";
       
        $statement1=$conn->prepare($sql);
        $statement1->bind_param("ssss",$productName,$category,$unitCost,$product_id);

        $statement1->execute();


        //update the product in the inventory table secondly since on the name of the product is to be updated not the id which might cause referential errors if inventory not first
        $sql2="update  inventory set product_name=? where product_id=? ";
       
        $statement2=$conn->prepare($sql2);
        $statement2->bind_param("ss",$productName,$product_id);

        $statement2->execute();        

        echo "<br>"."<div style='background:white;border:1px solid black';padding:50px;text-align:center;><h1 style='color:green;'>Data has been updated successfully !!!!!</h1></div>
        <br>
        <button><a href='all_products.php'>back to products view</a></button>
        ";

        
    }else{
        echo "<br>","failed to update_prodcut";
    }


    //DELETE PRODUCT completely from the database even the inventory table  when delete button is clicked remember to start deleting from inventory just because of the referential integrity btn products and inventory tables
    if(isset($_POST['deleteProduct'])){



        //delete from the inventory table first to avoid referential integrity btn products and inventory table
        $sql3="delete from inventory where product_id=? ";

        $statement3=$conn->prepare($sql3);
        $statement3->bind_param("s",$product_id);

        $statement3->execute(); 



        //delete the product in the product table secondly to avoid referential integrity btn products and inventory table
        $sql4="delete from products where product_id=? ";

        $statement4=$conn->prepare($sql4);
        $statement4->bind_param("s",$product_id);

        $statement4->execute();    

        echo "<br>"."<div style='background:white;border:1px solid black';padding:50px;text-align:center;><h1 style='color:green;'>$productName, has been  deleted successfully !!!!!</h1></div>
        <br>
        <button><a href='all_products.php'>back to products view</a></button>
        ";


    }    




?>