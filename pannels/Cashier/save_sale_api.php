<?php
include("../../assets/database_connect/database.php");

if ($conn) {
    // Ensure the key name matches and provide a default value
    $employee_id=$_POST['employee_id'];//obtain post values from the ajax js from salePannel js 
    $qty = $_POST['pdt_quantity1']; 
    $productName=$_POST['productName'];

    $product_id=$_POST['product_id'];


    $product_price=$_POST['productprice'];

    $productProfit=$_POST['productProfit'];


    // echo "productName: $$productName";

    // echo "this is, $qty,$productName";

    //deduct the number of qty of a given card from the inventory table in freshmart
    $update_Inventory_query="UPDATE inventory set inventory_no = inventory_no-? where product_id=?";//update the inventory of each product on a loop phase in ajax





    $stmt=$conn->prepare($update_Inventory_query);
    $stmt->bind_param("ss",$qty,$product_id);
    $stmt->execute();






    $query = "INSERT INTO sales (employee_id,product_id,product_Name,qty,total,profit,date_of_sale,sale_time) VALUES ('$employee_id','$product_id','$productName','$qty','$product_price','$productProfit',CURDATE(),CURTIME())";
    mysqli_query($conn, $query);



    echo "success";//if the response text is sucess then display a an alert

    $conn->close();
    


} else {
    echo "connection failed";
}
?>
