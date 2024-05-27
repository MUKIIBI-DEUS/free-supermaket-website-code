
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="main_Admin.css">



<!-- prevent accessing the admin -->
    <!-- <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0.02);
    window.onunload=function(){null};
</script> -->
    
</head>
<body>


<!-- Main container -->
<div class="main_container">


        <!-- SIDEBAR -->
    <div class="left_sidebar">

        <div class="company_title">

            <div class="pack1">
                <img src="../../assets/images/companyLogo.png" alt="SORRY">
                <h3 id="companyTitle">FRESH MART</h3>
            </div>

            <!-- <h3 class="moto"></h3> -->

        </div>

        <!-- MENU SEPATOR -->

        <div id="menuSeparator" style="backgroung:#fff;"></div>

    <!-- main menuBar title-------- -->

        <div class="mainMenuTitle">
            <h1 id="mainMenu">MAIN MENU</h1>
        </div>

        <!-- dashboard option -->
        <div class="selected Option" >
                
            <img src="../../assets/images/white_dashboard2.png" alt="SORRY">

            <p id="dashboard" >DashBoard</p>




        </div>

        <!-- Products -->
        <div class="Option">
                
            <img src="../../assets/images/white_product-3.png" alt="SORRY">
    
            <p>Products</p>


         </div>

         <!-- Store -->

         <div class="Option">
                
            <img src="../../assets/images/whiteStore.png" alt="SORRY">
        
            <p>Suppliers</p>
        
        
        
        
        </div>

        <!--Sales  -->
        <div class="Option">
                
            <img src="../../assets/images/whiteSales.png" alt="SORRY">
        
            <p>Sales</p>
        
        
        
        
        </div>          

        <!-- UserAccounts -->
        <div class="Option">
                
            <img src="../../assets/images/white_user136.png" alt="SORRY">
        
            <p>User Accounts</p>
        
        
        
        
        </div>


        <!-- Logout -->
        <div class="Option">
                
            <img src="../../assets/images/whiteList.png" alt="SORRY">
        
            <p><a href="../../logoutPage.php" style="color:white;text-decoration:none;">Logout</a></p>
        
        
        
        
        </div>  



  







    


    </div>
    
    <!-- RIGHT_CONTAINER -->
    <div class="middle_container">
        <!-- topbar -->
        <div class="topBar">

            <!-- welcome message -->
           <div class="welcomeBar">
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
                       }    




                    //    $sessionTimeout = 900; // 3 secont
                    //    $lastActivity = $_SESSION['LAST_ACTIVITY'];
                    //    echo $lastActivity;

                


                      $userName=$_SESSION['userName'];//get the userName fetched by the session from loginPage on role verification;
                        echo "<p>Welcome Back, $userName</p>";



                ?>

                
           </div>

           <!-- searchBar -->
           <div class="topBarsearch">
                <input type="text" placeholder="Search Anything">
           </div>


           <!-- alertbar -->
           <div class="alertBar">
                <img src="../../assets/images/messages.png" alt="haha not found" id="message">
                <img src="../../assets/images/notification.png" alt="haha not found" id="notification">
           </div>

           <span id="separator"></span>

           <!-- Admin name and photo -->
           <?php
                    //    session_start();//start the session 


                      $userRole=$_SESSION['userRole'];//get the userName fetched by the session from loginPage on role verification;

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
                        <img src='$new_string' alt='haha not found' style='border-radius:90%'>
                        <p>$userRole</p>
                       </div>";



                       



                ?>






        </div>

        <div id="optionDisplay">

        </div>

    
    </div>










</div>



<!-- JAVASCRIPT -->
<script>

window.addEventListener('beforeunload', function (event) {
    // Redirect to another page
    window.location.href = '../../logoutPage.php';
});

</script>

<script src="main_Admin_script.js"></script>
    
</body>
</html>



<?php 




?>