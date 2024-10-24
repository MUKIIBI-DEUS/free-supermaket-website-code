<?php
include("../../assets/database_connect/database.php");

    session_start();//start the session 
                           // check id user ID is set to avoid pannel entrance without login OR
                           //logout when user name is not explicitly ---Employee
                           $userRole=$_SESSION['userRole'];//assign userRole value from session['userRole']
                          
                           if (!isset($_SESSION['userId']) || $userRole !=="Employee") {//check whether the creteria above is fulfilled

                            header("Location:../../index.php");//if the creteria is not then automatically logout or head to the index.php
                            
                            session_unset(); // Unset $_SESSION variable for this page
                            session_destroy(); // Destroy session data in storage
                            
                            exit();
                           }


    if (isset($_SESSION['last_activity'])) {
        //create acconection to mysql database
            $inactive_time = time() - $_SESSION['last_activity'];
            $inactive_threshold = 10 * 60; // 30 minutes in seconds
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
    <title>Cashier</title>
    <link rel="stylesheet" href="salesPannel.css">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- <link rel="stylesheet" href="bootstrap.css"> -->
    <style>
        #loader{
            position:fixed;
            width: 100%;
            top:0;
            left:0;
            bottom:0;
            background:#464646;
            color:#fff;
            z-index:9999;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            overflow: hidden;
            background: linear-gradient(300deg,green,green,blue);
            background-size: 180% 180%;
            animation: gradient-animation 18s ease infinite;

           
        }




        @keyframes gradient-animation {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
        }
        .boxSized{
            margin-left:20px;
        }
        span{
            height:90px;
            overflow: hidden;

        }
        .wordLogo{
            overflow: hidden;
        }
        .l{
            font-size:10px;
            overflow: hidden;
        }



    </style>
    
</head>
<body>
     <!-- LOADER -->

     <div id="loader">

<div class="spinner-border text-light" role="status" class="wordLogo">
    <span class="visually-hidden" >Loading--------</span>  
    <h6 class="wordLogo l">F</h6>        
</div>

<span class="boxSized"></span>

<h1 class="wordLogo">Fresh Mart</h1>

<span class="boxSized"></span>

<h6 class="wordLogo">please wait</h6>
<h6 class="wordLogo">.......</h6>






</div>

<!-- LOADER  END-->
<!-- LOADER END -->
    
        <!----------------- main div ----------------------->


    <div class="main_container">
        <!-- ==================actionButtons div============== -->
        <div class="actionsButtons">

            <div class="iconPlace" id="salesPane">
                <img src="../../assets/images/sell_pane_white.png" alt="">
                <!-- <p>Sell product</p> -->

            </div>

                <!-- DASHBOARD -->
            <!-- <div class="iconPlace" id="other">
                <img src="../../assets/images/white_dashboard2.png" alt="">
               

            </div> -->

            <!-- <div class="iconPlace">
                <img src="../../assets/images/whiteSales.png" alt="">
                

            </div> -->

            <div class="iconPlace" >
                

                <a href="../../logoutPage.php"><img src="../../assets/images/logout-50.png" alt=""></a>
                <!-- <p>Sales pane</p> -->

            </div>
 

            </div>



         <!-- ==================middleDiv div============== -->

         <div class="middleDiv">
            <!-- search div -->
            <div class="searchDiv">
                <input type="text" placeholder="Search product" id="searchInput" value="">
                <button>Filter</button>

            </div>



            <div class="filterButtonsDiv">
                <button id="allBtn">All</button>
                <button>Electronics</button>
                <button>Clothing and Fashion</button>
                <button>Home and Kitchen</button>
                <button>Beauty and Personal Care</button>

            </div>

            <!-- PRoduct div -->
            <div class="productCardDiv">

                    <?php
                    include("../../assets/database_connect/database.php");
                    //CHECK CONNECTION AND GIVE FEEDBACK
                    if(!$conn){
                        echo "<script>alert('Connection failed')</script>";
                    }


                    //DATA FETCHING

                    $sql="SELECT p.*
FROM products p
JOIN inventory i ON p.product_id = i.product_id
WHERE i.inventory_no >=1 order by product_name asc";//fetch all products from the products table where the inventory no is 1 and above

                    $results=mysqli_query($conn,$sql);




                    //A FUNCTION TO REMOVE ../ basing on the count if count is 2  it removes ../../  respectively
                    function remove_prefix($count, $prefix, $string) {
                        while ($count > 0 && strpos($string, $prefix) === 0) {
                        $string = substr($string, strlen($prefix));
                        $count--;
                        }
                        return $string;
                        }



                    // Check if results is not null and has elements
                    if($results){
                        while($row=mysqli_fetch_assoc($results)){
                            $imagePath = remove_prefix(2, "../", $row['productImage']);
                            echo "<div class='card'>
                            <img src='$imagePath' alt='sorry' class='cardData' data-src='$imagePath'>

                            <h4 class='cardData'>{$row['product_name']}</h4>

                            <p class='cardData' >{$row['category']}</p>

                            <h3 class='cardData' >{$row['unitcost']}</h3>
                            <h3 class='cardData' style='visibility:hidden;'>{$row['buying_price']}</h3>
                            <p class='cardData product_id' style='visibility:hidden;'>{$row['product_id']}</p>
                            


                        </div>";
                        }
                    }
                    
                

                    
                    
                    
                    
                    ?>




        </div><!-- PRoduct div -->

         </div>


         <!-- ORDER OR CART START-->
          <div class="product_cart">

            <div class="statusBar"><!-- statusBar start -->




            <?php
    
                      $userPhoto=$_SESSION['userPhoto'];
                        //A FUNCTION TO REMOVE ../ basing on the count if count is 2  it removes ../../  respectively

                        $string1 = $userPhoto;//get the database image string but not the returned one in the function
                        $new_string = remove_prefix(2, "../", $string1); //remove 2 occurance of ../ to have a correct deirctory path basing on the current loaction            

                        echo "<img src='$new_string' alt=''>";
            
            ?>


                


                <div class="greetings"><!-- welcome user--->

                <?php
                        
                      $username=$_SESSION['userName'];//get the userName fetched by the session from loginPage on role verification;

                      echo "<h5>Welcome $username !</h5>
                    <p id='userId' style='visibility:hidden;'>{$_SESSION['userId']}</p>";
                ?>                

                </div>


                <div class="notificationBell">
                    <img src="../../assets/images/notification2.png" alt="">
                </div>



                
            </div><!-- statusBar End -->
            <p id="currentOrder">Current Order</p>




            <div class="current_Order_div"><!--current_Order_div Start -->




            <!-- <div class="productCard">
                        <img src="../../assets/images/notification2.png" alt="">

                        <div class="productDetails">
                            <h4>apple</h4>

                            <div class="productQty">
                                <button class="deductpdtQty">-</button>

                                <input type="text" value="1" class="pdtqty" min="1">

                                <button class="addOnpdtQty">+</button>

                            </div>



                        </div>

                        <div class="productPrice">
                        
                            <button class="cancelOrder">x</button>
                            <input type="text" value="2000" class="productTotalPrice">

                            <input type="text" value="2000" style="height:1px;visibility:hidden;margin-top:5px" class="price">
                           
                        </div>
                        


                    </div> -->
                    <!-- product in cart-- -->




                


            </div><!--current_Order_div End -->




            <div class="total_of_products"><!--products total start -->

                <div class="prices">
                    <p>Cash in</p>
                    <input type="text" id="cashIn">
                </div>


                <div class="prices">
                    <p>Total Items</p>
                   <input type="text" value="0" id="totalItemCount" readonly>
                </div>



                <div class="prices">
                    <p>sub Total</p>
                    <input type="text" value="0" id="">
                </div>
                               

                <div class="prices">
                    <p>Total</p>
                    <input type="text" id="finalTotalPrice" readonly>
                </div>    
                
                <div class="prices">
                    <h3>Balance</h3>
                    <h2 id="customer_balance">0</h2>
                </div>  

                <button id="makeSaleButton">Check Out</button>


            </div><!--products total End -->



          </div><!-- ORDER OR CART END -->


        
<!-- MAIN DIV OR CONTAINER -->
    </div>

    <script src="salesPannel.js"></script>
    
</body>
</html>