<?php





    $userNamepuz=($_POST['userName']);//fetch username from input
    $userPasswordjkt=$_POST['userPassword'];//fetch userpassword;


    $conn=mysqli_connect("localhost","root","","freshmart");//create acconection to mysql database

         //check if all inputs are set including the button
    if(isset($_POST['submitForm']) && isset($_POST['userName']) && isset($_POST['userPassword']) ){
        session_start();
            


   

        if($conn){//check connection if is true/false
            $sql="select * from employee where userName=? and e_password=? and loginStatus='false'";

            $stmt = mysqli_prepare($conn, $sql);

            mysqli_stmt_bind_param($stmt, "ss", $userNamepuz, $userPasswordjkt);

            mysqli_stmt_execute($stmt);//execute the prepared sql statement

            $results= mysqli_stmt_get_result($stmt);

            //an array with the column info from the database
            $assocArray=mysqli_fetch_assoc($results);

            //fetch the number of rows obtained from the results query
            $numOfrows=mysqli_num_rows($results);
             
            
            //check the number of rows is greater than 0 to load check for row and benchmark the harshed password
            if($numOfrows>0){
                echo "num of rows :$numOfrows";
                //start session
                session_start();
                $_SESSION['LAST_ACTIVITY']=time();











                //check for the role

                $role=$assocArray['e_role'];//data from the column role
                $userId=$assocArray['e_id'];
                $empUname=$assocArray['userName'];

                $last_id="";//declaration last id to store last entered id in future





                //SETTING THE 
                $_SESSION['userName']=$empUname;//assign userName from assoc array

                $_SESSION['userPhoto']=$assocArray['e_photo'];//user databasephoto

                $_SESSION['userRole']=$role;

                $_SESSION['userId']=$userId;

                $_SESSION['loginStatus']=$assocArray['loginStatus'];

                echo "userRole :",$role;


                if($role=="Admin"){//if role is admin then load the adminPage


                    $loginStatus=$_SESSION['loginStatus'];//set the session variable of  loginStatus

                    echo "<script>alert($loginStatus)</script>";

                    //check if there is a session variable and the loginStatus is false
                    if(isset($_SESSION['userName'])  && $loginStatus==="false" ){
                        $_SESSION['last_activity'] = time();

                        //load the admin and set loginStatus to true
                        header('location:pannels/Admin/main_Admin.php');


                        // $userId=$_SESSION['userId'];


                        
                        //fill the  login details table with (user_id)
                        $sqlLoginLog="insert into userlogindetails(user_id) values($userId)";

                        $results2=mysqli_query($conn,$sqlLoginLog);//execute filling in user loginDetails
                        $last_id=mysqli_insert_id($conn);//fetching the last id in the userLoginDetails table

                        $_SESSION['lastId']=$last_id;//setting the last id session variable



                        $sqlLoginStatus="update employee set loginStatus='true' where e_id=$userId";

                        $affectedRows=mysqli_query($conn,$sqlLoginStatus);

                        if(mysqli_num_rows($affectedRows)>0){
                            echo "it works";
                        }
                        else{
                            echo "updating login status failed";
                        }

                    }else{
                        
                        // $loginStatusMessage="User already signed in you cannot login at the same time";
                        // $_SESSION['errorMessage']=$loginStatusMessage;//the loginStatusMeassage to user already signed in                        
                        // header('location:index.php');
 

                    }

                   


                }elseif($role=="Employee"){





                    $loginStatus=$_SESSION['loginStatus'];//set the session variable of  loginStatus

                    echo "<script>alert($loginStatus)</script>";

                    //check if there is a session variable and the loginStatus is false
                    if(isset($_SESSION['userName'])  && $loginStatus==="false" ){
                        $_SESSION['last_activity'] = time();

                        //load the admin and set loginStatus to true
                        header('location:pannels/Cashier/cash.php');


                        // $userId=$_SESSION['userId'];


                        
                        //fill the  login details table with (user_id)
                        $sqlLoginLog="insert into userlogindetails(user_id) values($userId)";

                        $results2=mysqli_query($conn,$sqlLoginLog);//execute filling in user loginDetails
                        $last_id=mysqli_insert_id($conn);//fetching the last id in the userLoginDetails table

                        $_SESSION['lastId']=$last_id;//setting the last id session variable



                        $sqlLoginStatus="update employee set loginStatus='true' where e_id=$userId";

                        $affectedRows=mysqli_query($conn,$sqlLoginStatus);

                        if(mysqli_num_rows($affectedRows)>0){
                            echo "it works";
                        }
                        else{
                            echo "updating login status failed";
                        }

                    }else{
                        
                        // $loginStatusMessage="User already signed in you cannot login at the same time";
                        // $_SESSION['errorMessage']=$loginStatusMessage;//the loginStatusMeassage to user already signed in                        
                        // header('location:index.php');
 

                    }



                }else{
                    
                // echo "something went wrong:$numOfrows";
                // $_SESSION['errorMessage']="Insert right Credentils please";//assign an error message to the session to alert the user of wrong credentials
                // header('location:index.php');


                }
            }else{
                echo "something went wrong:$numOfrows";
                $_SESSION['errorMessage']="Insert right Credentials  or you  signed in already";//assign an error message to the session to alert the user of wrong credentials
                header('location:index.php');

                

            }

        }




    }



   
?>