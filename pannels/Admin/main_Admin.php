<?php
// Start output buffering and session
ob_start();
session_start();

// Check if user ID is set and role is exactly admin to avoid panel entrance without login with right credentials
if (!isset($_SESSION['userId']) || $_SESSION['userRole']!=="Admin") {
    header("Location: ../../index.php");//if the creteria is not then automatically logout and destroy session
    session_unset(); // Unset $_SESSION variable for this page
    session_destroy(); // Destroy session data in storage
    exit();
}

include("../../assets/database_connect/database.php");

// Check for session inactivity and destroy session if necessary
if ($conn) {
    if (isset($_SESSION['last_activity'])) {
        $inactive_time = time() - $_SESSION['last_activity'];
        $inactive_threshold = 30 * 60; // 10 minutes in seconds
        if ($inactive_time > $inactive_threshold) {
            $e_id = $_SESSION['userId']; // Set the E_ID from session variable
            $updateLoginStatus = "UPDATE employee SET loginStatus='false' WHERE e_id=$e_id";
            $updateStatus = mysqli_query($conn, $updateLoginStatus);

            session_unset(); // Unset $_SESSION variable for this page
            session_destroy(); // Destroy session data in storage

            header("Location: ../../index.php"); // Redirect to the login page
            exit();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="main_Admin.css">
    <link rel="stylesheet" href="bootstrap.css">




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



<!-- Main container -->
<div class="main_container">


        <!-- SIDEBAR -->
    <div class="left_sidebar">

        <div class="company_title">
           
       
                <img src="../../assets/images/companyLogo.png" alt="SORRY" id="companyLogo">
                <!--     -->
                <p>Fresh Mart POS</p>
        

            <h3 class="moto"></h3>

        </div>

        <!-- MENU SEPATOR -->

        <div id="menuSeparator" style="backgroung:#fff;"></div>

    <!-- main menuBar title-------- -->

        <div class="mainMenuTitle" style="overflow: hidden;">
            <p id="mainMenu" style="color:white;font-size:20px;margin-left:10px;">MAIN MENU</p>
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



        <!--Reoders  -->
        <div class="Option">
                
            <img src="../../assets/images/again.png" alt="SORRY">
        
            <p>Re order products</p>
        
        
        
        
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
        
        


        <!--Profits  -->
        <div class="Option">
                
            <img src="../../assets/images/white_product.png" alt="SORRY">
        
            <p>Profits</p>
        
        
        
        
        </div>      
        



                <!--Logs  -->
                <div class="Option">
                
                <img src="../../assets/images/whiteList.png" alt="SORRY">
            
                <p>Logs</p>
            
            
            
            
            </div>   



        <!-- UserAccounts -->
        <div class="Option">
                
            <img src="../../assets/images/white_user136.png" alt="SORRY">
        
            <p><a href="userAccounts/usersFirst.php" style="color:white;text-decoration:none;">Accounts</a></p>

        
        
        
        
        </div>


        <!-- Logout -->
        <div class="Option">
                
            <img src="../../assets/images/whiteLogout.png" alt="SORRY">
        
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



                       // check id user ID is set to avoid pannel entrance without login
                       if (!isset($_SESSION['userId'])) {
                        header("Location:../../index.php");
                        exit();
                       }


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
        // Handle the loader 
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector('#loader').style.display = "flex"; // Enable the loader if the page isn't fully loaded
                // console.log("page isn't ready");
            } else {
                document.querySelector('#loader').style.display = "none"; // Disable the loader if the page is fully loaded
                // console.log("page is ready");
            }
        }
    </script>




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
ob_end_flush();
?>