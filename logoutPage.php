<?php
    session_start();

    if(!isset($_SESSION['userId'])){
        header('location:index.php');
    }

    //set loginStatus to false and redirect to the login Page
    include('assets/database_connect/database.php');//including the sql server connect logic

    if($conn){
        $e_id=$_SESSION['userId'];//from the loginLogic

        $sql="update employee set loginStatus='false' where e_id=$e_id"; //update it to show user signedout basing on his/her id

        $results=mysqli_query($conn,$sql);//execute the sql statement

        $lastId=$_SESSION['lastId'];
   


        //ENSURING THAT THE LOGS ARE FILLED IN WITH LOGOUT TIME
        if(isset($lastId)){
            // $_lastId=$_SESSION['lastId'];
            $sqlLogout="UPDATE userlogindetails set logoutTime=NOW() where id=$lastId";//set the logout time of a user basing on  primary key  from the userdetails table 
            $results=mysqli_query($conn,$sqlLogout);//execute the query

      




                //destroy the session and load loginPage
                session_unset();
                session_destroy();
                header('location:index.php');

        }
        
        
        
           

    }else{
        echo "connection failed";
    }




    exit;
?>