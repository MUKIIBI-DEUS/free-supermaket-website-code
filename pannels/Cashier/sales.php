<?php

    session_start();//start the session 
                           // check id user ID is set to avoid pannel entrance without login
                           if (!isset($_SESSION['userId'])) {
                            header("Location:../../index.php");
                            exit();
                           }


    if (isset($_SESSION['last_activity'])) {
        //create acconection to mysql database
            $inactive_time = time() - $_SESSION['last_activity'];
            $inactive_threshold = 10 * 60; // 10 minutes in seconds
            if ($inactive_time > $inactive_threshold) {

                $e_id=$_SESSION['userId'];//set the E_ID from session variable
                $updateLoginStatus="UPDATE employee set loginStatus='false' where e_id=$e_id";
                $updateStatus=mysqli_query($conn,$updateLoginStatus);


                session_unset(); // unset $_SESSION variable for this page
                session_destroy(); // destroy session data in storage

                header("Location:../../index.php");//head to the index/loginPage
                exit();
            }
        }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sales.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"> -->
    <title>Grosery store</title>

</head>
<body>
        <!-- SIDEBAR -->
        <div class="sidebar">

            <!-- logo -->
            <h1 class="logo">FreshMart</h1>
            <hr class="divider">

            <!-- list of menus -->
            <div class="sidebar-menus">
                <a href="cash.php">Home</a>
                <a href="sales.php">Sales</a>
                <a href="form.php">Register</a>
                
            </div>

            <!-- logout -->
            <div class="sidebar-logout">
                <a href="../../logoutPage.php"><ion-icon name="log-out-outline"></ion-icon>Logout</a>
            </div>
        </div>

        <!-- menu -->
        <div class="main">
            <!-- main navbar -->
            <div class="main-navbar">
                <!--menu when appear on mobile version-->
                <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>

                <!-- =search bar -->
            <div class="search">
                <input type="text"placeholder="place your orders?">
                <button class="search-btn">search</button>
            </div>

            
            <!-- profile icon on left side of navbar -->
            <div class="profile">
            <?php
                    //    session_start();//start the session 


                      $username=$_SESSION['userName'];//get the userName fetched by the session from loginPage on role verification;

                      $userPhoto=$_SESSION['userPhoto'];
                        //A FUNCTION TO REMOVE ../ basing on the count if count is 2  it removes ../../  respectively
                      function remove_prefix($count, $prefix, $string) {
                        while ($count > 0 && strpos($string, $prefix) === 0) {
                        $string = substr($string, strlen($prefix));
                        $count--;
                        }
                        return $string;
                        }
                        $string1 = $userPhoto;//get the database image string but not the returned one in the function
                        $new_string = remove_prefix(2, "../", $string1); //remove 2 occurance of ../ to have a correct deirctory path basing on the current loaction




                        // echo $new_string; // Output: ../../../assets/images/uploads/white_user136.png
                    

                      
                      




                        echo "<div class='adminDetails'>
                        <img src='$new_string' alt='haha not found' style='border-radius:90%;height:50px;width:50px;' >
                        <p>$username</p>
                       </div>";



                       



                ?>

            </div>
             </div>
        

        <!-- list of products -->
        <div class="main-detail">
        <h4 class="main-title" style="background:#ffc107;padding:10px;border-radius:10px;">Choose product</h4>
            <div class="detail-wrapper">
<!-- 
                <div class="detail-card">
                    <img class="detail-img" src="images/dove.jpg">
                    <div class="detail-desc">
                        <div class="detail-name">
                            <h4>Dove</h4>
                            <p class="price">20,000</p>
                        </div>
                        <ion icon class="detail-favorites" name="bookmark-outline"></ion>
                    </div>
                </div>  -->
                
                <?php

    
    try {
        include("../../assets/database_connect/database.php");


        $sql = "SELECT * FROM products order by product_name asc";
        $results = mysqli_query($conn, $sql); // $conn from the database file in the include()


    
        if ($results) { // Check if the query was successful and returned a mysqli_result object
            if (mysqli_num_rows($results) > 0) { // Check if there are any rows in the products table
                // Loop through each row and display each value in the table
                while ($row = mysqli_fetch_assoc($results)) {
                        $string1 = $row['productImage'];//get the database image string but not the returned one in the function
                        $image_string = remove_prefix(2, "../", $string1); //remove 2 occurance of ../ to have a correct deirctory path basing on the current loaction


                    echo "
                    <div class='detail-card'>
                        <img class='detail-img' src='$image_string'>
                        <div class='detail-desc'>
                            <div class='detail-name'>
                                <h4 class='descData'
                                style='visibility:hidden;'>{$row['product_id']}</h4>
                                <h4 class='descData'>{$row['product_name']}</h4 class='descData'>
                                <h4 >{$row['category']}</h4>
                     
                                <p class='price descData'>{$row['unitcost']}</p>
                            </div>
                            <ion icon class='detail-favorites' name='bookmark-outline'></ion>
                        </div>
                    </div>";





                }
            }
        }

        $conn->close();
    } catch (Exception $e) {
        // Handle any exceptions that might occur
        echo "An error occurred: " . $e->getMessage();
    }

    ?>

        </div>
            

<div class="container"> 
            <form class="sales" >
                 <h1>Sales</h1>
                 <hr class="divider">
                 <input type="number" placeholder="Product id" class="pdtData" readonly>
                <input type="text" placeholder="ProductName" class="pdtData" readonly>
                <input type="text" placeholder="Unit Cost" class="pdtData" readonly>
                <input type="number" placeholder="Quantity" id="qty">
                <input type="text" placeholder="Total" id="total">
                <input type="number" placeholder="Cash in" id="cashin">
                <input type="text" placeholder="Change" id="balance">
                <button id="leave" style="height: 50px;">CheckOut</button>
            
            </form>
        </div>
     
             <!--list orders  -->
             <script>



















             </script>

             <script src="sales.js"></script>

</body>

    <!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->
 </html>


