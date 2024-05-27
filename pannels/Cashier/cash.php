<?php
                       session_start();//start the session 



                       // check id user ID is set to avoid pannel entrance without login
                       if (!isset($_SESSION['userId'])) {
                        header("Location:../../index.php");
                        exit();
                       }

                       $conn=mysqli_connect("localhost","root","","freshmart");

                       // Check for session inactivity and destroy session if necessary
                       if($conn){

                            if (isset($_SESSION['last_activity'])) {
                            //create acconection to mysql database
                                $inactive_time = time() - $_SESSION['last_activity'];
                                $inactive_threshold = 10*60; // 10 minutes in seconds
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
                       }    




                    //    $sessionTimeout = 900; // 3 secont
                    //    $lastActivity = $_SESSION['LAST_ACTIVITY'];
                    //    echo $lastActivity;

                


                    //   $userName=$_SESSION['userName'];//get the userName fetched by the session from loginPage on role verification;
                    //     echo "<p>Welcome Back, $userName</p>";



                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cash.css">
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
<!-- Admin name and photo -->
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


                <img src="" alt="">
             
                    
                
            </div>
        </div>

        <!-- shopping cart section -->
        <!-- <div id="cart-popup" class="cart-popup">
            <h4>shopping Cart</h4>
            <table id="cart-items">
                <thread> 
                    <tr>
                        <th>Item</th>
                        <th>#</th>
                        <th>Price()</th>
                        <th>Total()</th>
                    </tr>
                </thread>
                <tbody></tbody>
            </table>
            <p>Total() <span id="cart-total">0.00</span></p>
            <a class="cart-close" onclick="closeCart()"><ion-icon name="close-circle-outline"></ion-icon></a>
        </div> -->
        



            <!-- main highlight -->
            <div class="main-highlight">
                <!-- title section and arrow -->
                <div class="main-header">
                    <h2 class="main-title">Recommendations</h2>
                    <div class="main-arrow">
                        <ion-icon class="back"  name="chevron-back-circle-outline"></ion-icon> 
                        <ion-icon class="next"  name="chevron-forward-circle-outline"></ion-icon>
                    </div>
                </div>
                <!-- highligt menu -->
                <div class="highlight-wrapper">
                    <div class="highlight-card">
                        <img class="highlight-img" src="images/water.jpg">
                        <div class="highlight-desc">
                            <h4>water</h4>
                            <p>2000</p>
                        </div>
                    </div>
                    
                    <div class="highlight-card">
                        <img class="highlight-img" src="images/sugar.jpg">
                        <div class="highlight-desc">
                            <h4>sugar</h4>
                            <p>10,000</p>
                        </div>
                    </div>
                    

                    <div class="highlight-card">
                        <img class="highlight-img" src="images/soda.jpg">
                        <div class="highlight-desc">
                            <h4>Soda</h4>
                            <p>8000</p>
                        </div>
                    </div>

                    <div class="highlight-card">
                        <img class="highlight-img" src="images/towels.jpeg">
                        <div class="highlight-desc">
                            <h4>Towels</h4>
                            <p>100,000</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <!main menus/order -->
            <div class="main-menus">
                <!-- filter section -->
                <div class="main-filter">
                    <div>
                        <h2 class="main-title">Products<br>Category</h2>
                        <div class="main-arrow">
                            <ion-icon class="back-menus"  name="chevron-back-circle-outline"></ion-icon> 
                            <ion-icon class="next-menus"  name="chevron-forward-circle-outline"></ion-icon>
                        </div>
                    </div>
                        
                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="Fast-food-outline"></ion-icon> 
                            </div>
                            <p>Milk</p>
                        </div>


                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="ice-cream-outline"></ion-icon> 
                            </div>
                            <p>icecream</p>
                        </div>

                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="cafe-outline"></ion-icon> 
                            </div>
                            <p>Coffee</p>
                        </div>

                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="Fish-outline"></ion-icon> 
                            </div>
                            <p>Seafood</p>
                        </div>

                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="Pizza-outline"></ion-icon> 
                            </div>
                            <p>Pizza</p>
                        </div>

                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="Nutrition-outline"></ion-icon> 
                            </div>
                            <p>Friuts</p>
                        </div>



                        <div class="filter-card">
                            <div class="filter-icon">
                                <ion-icon name="wine-outline"></ion-icon> 
                            </div>
                            <p>Wine</p>
                        </div>    
                    </div>
                </div>
                <hr class="divider">
                <!-- list of products -->
                <div class="main-detail">
                    <h2 class="main-title">Choose product</h2>
                    <div class="detail-wrapper">

                    

                        <!-- <div class="detail-card">
                            <img class="detail-img" src="images/friuts.jpg">
                            <div class="detail-desc">
                                <div class="detail-name">
                                    <h4>Fruits</h4>
                                    <h4>Fruits</h4>
                                    <p class="detail-sub"></p>
                                    <p class="price">2000</p>
                                    <button class="add-to-cart-btn" onclick="addToCart('Fruits',2000)">Add to Cart</button>
                                </div>
                                <ion icon class="detail-favorites" name="bookmark-outline"></ion>
                            </div>
                        </div> -->




                        <?php
    
    try {
        include("../../assets/database_connect/database.php");


                                 //A FUNCTION TO REMOVE ../ basing on the count if count is 2  it removes ../../  respectively
                                //  function remove_prefix($count, $prefix, $string) {
                                //     while ($count > 0 && strpos($string, $prefix) === 0) {
                                //     $string = substr($string, strlen($prefix));
                                //     $count--;
                                //     }
                                //     return $string;
                                //     }
    
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
                                <h4 style= 'visibility:hidden;'>{$row['product_id']}</h4>
                                <h4>{$row['product_name']}</h4>
                                <h4>{$row['category']}</h4>
                                <p class='price'>{$row['unitcost']}</p>
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
</body>
<!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->

<!-- adding javascript -->
<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="app.js"></script> -->
</html>

