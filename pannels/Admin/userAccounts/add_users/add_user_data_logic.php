<?php




    $conn=mysqli_connect("localhost","root","","freshmart");

    if($conn){
        try{
            if(isset($_POST['addUser'])){
                
                //picking the user details
                $firstName=$_POST['firstName'];
                $lastName=$_POST['lastName'];
                // $photo=$_POST['photo'];
                $location=$_POST['location'];
                $contact=$_POST['contact'];
                $email=$_POST['email'];
                $userName=$_POST['userName'];
                $pswd=$_POST['pswd'];






                // Hash the password
        
                $role=$_POST['role'];
                
        
        
        
        
                // IMAGE CAPTURING
                //check if the image if captured and  has no error
                if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0){
                    //specifing the directory where the file will be stored
                    $target_dir="../../../../assets/images/uploads/";
        
                    //get the file name
                    $file_name=basename($_FILES["photo"]["name"]);//userImage from name="photo" so name is the name in the input and photo is the value of a name
              
        
        
        
                    //print out the file name for verification purposes
        
                    // echo "<script>alert('$file_name')</script>";
        
                    //specify the file path
                    $target_file=$target_dir.$file_name;//adding the target and file name showing final distination
        
        
        
                    //checking if the file exists in the target dir or directory
                    if(file_exists($target_file)){
                        echo "sorry ",$file_name," image already exists";//show the file name in the message
        
        
                    }else{
                         //move the uploaded file to the specified directory uploads
        
                         if(move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file)){
                                //file uploaded succesfully now its high time we sent the data to the database
        
                                        //finally we enjoy the data insertion
                            
        
                                $sql="insert into employee(fname,lname,e_photo,e_location,e_contact,e_email,userName,e_password,e_role) values (?,?,?,?,?,?,?,?,?)";//(?,?) parameters for variables we are to insert
        
                                $statement=$conn->prepare($sql);//prepare the sql statment for parameters ??
        
                                $statement->bind_param("sssssssss",$firstName,$lastName,$target_file,$location,$contact,$email,$userName,$pswd,$role);//add the parameters required which are 4(?,?,?,?)
        
                                $statement->execute();
        
        
                                
                                echo "<br>"."<div style='background:white;border:1px solid black';padding:50px;><h1 style='color:green;'>Data sent successfully !!!!!</h1></div>";
        
        
        
        
                            }else{
                                echo "something went wrong";
                            }
        
        
        
                    
        
        
        
        
        
                    }
        
                }else{
                    
                }
              
        
               
        
            }
        
        
        
        }catch(Exception $e){
            echo "Error Message ".$e->getMesage();
        }

    }else{
        echo "failed";
    }


    

   








?>