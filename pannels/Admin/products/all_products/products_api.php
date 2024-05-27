<?php
    
    try {
        $conn=mysqli_connect("localhost","root","","freshmart");

        $query=$_GET['query'];
    
        $sql = "SELECT * FROM products where  product_name like '%{$query}%' ";
        $results = mysqli_query($conn, $sql); // $conn from the database file in the include()

        $records=array();
    
        if ($results) { // Check if the query was successful and returned a mysqli_result object
            if (mysqli_num_rows($results) > 0) { // Check if there are any rows in the products table
                // Loop through each row and display each value in the table
                while ($row = mysqli_fetch_assoc($results)) {
                    $records[]=$row;
          
                }

                echo json_encode($records);
                
            }
        }
    } catch (Exception $e) {
        // Handle any exceptions that might occur
        echo "An error occurred: " . $e->getMessage();
    }
  
  
  
  
  ?>