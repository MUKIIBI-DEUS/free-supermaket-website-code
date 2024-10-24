<?php

        ob_start();
        session_start();
        $userId=intval($_SESSION['userId']);//fetch user id from the session
        $ipAddress = $_SERVER['REMOTE_ADDR'];//fetch client ip address
  
        $unitCost=$_POST['unitcost'];
        $buyingPrice=intval($_POST['buyingPrice']);
        $expiry_date=$_POST['expiry_date'];
       
        
        include("../../../../assets/database_connect/database.php");//the database connection file and logic


    if(isset($_POST['addProduct'])){
        $productName=$_POST['product_name'];//picking the productName value from its input so to others below
        $category=$_POST['selectedOption'];
        $unitCost=intval($_POST['unitcost']);//convert it to integer as required by the unitcost column datatype in database
        $initialStock=intval($_POST['initialStock']);
        




        // IMAGE CAPTURING
        //check if the image if captured and  has no error
        if(isset($_FILES["productImage"]) && $_FILES["productImage"]["error"]==0){
            //specifing the directory where the file will be stored
            $target_dir="../../../../assets/images/uploads/";

            //get the file name
            $file_name=basename($_FILES["productImage"]["name"]);//productImage from name="productImage" so name is the name in the input and productImage is the value of a name
      



            //print out the file name for verification purposes

            // echo "<script>alert('$file_name')</script>";

            //specify the file path
            $target_file=$target_dir.$file_name;//adding the target and file name showing final distination



            //checking if the file exists in the target dir or directory
            if(file_exists($target_file)){
                echo "sorry ",$file_name," image already exists";//show the file name in the message


            }else{
                 //move the uploaded file to the specified directory uploads

                 if(move_uploaded_file($_FILES["productImage"]["tmp_name"],$target_file)){
                        //file uploaded succesfully now its high time we sent the data to the database

                                //finally we enjoy the data insertion


                        $sql="insert into products(product_name,category,buying_price,unitcost,productImage,expiry_date) values (?,?,?,?,?,?)";//(?,?) parameters for variables we are to insert

                        $statement=$conn->prepare($sql);//prepare the sql statment for parameters ??

                        $statement->bind_param("ssssss",$productName,$category,$buyingPrice,$unitCost,$target_file,$expiry_date);//add the parameters required which are 4(?,?,?,?)

                        if($statement->execute()){// if the product has been added to the database

                            $last_id_sql_log="SELECT MAX(product_id) AS last_id from products";//to obtain the last id inserted into products table

                            $last_id_results=$conn->query($last_id_sql_log);
                            $last_id_row_info=mysqli_fetch_assoc($last_id_results);
                            $last_id_value=intval($last_id_row_info['last_id']);

                            //final log sql for supplier registration
                            $sql_for_logs="INSERT INTO logs(user_id_for_logs,action_type,described,new_values,ip_address,affected_table,affected_record_id) VALUES($userId,'add new product','empty','product_name	=>$productName::category=>$category::buyingPrice=>$buyingPrice::unitcost=>$unitCost::productImage=>$target_file','$ipAddress','products',$last_id_value)";


                            $log_add_new_product=$conn->query($sql_for_logs);//insert log
                        }


                        //CREATING A NEW CONECTION TO ADD pdtName and inventoryNo to the inventory table which is related to products with a primary key from products to inventory

                        $connection2=$conn;

                        if($connection2){
                            $sql2="insert into inventory(product_name,inventory_no) values(?,?)";

                            $statement2=$connection2->prepare($sql2);
                            $statement2->bind_param("ss",$productName,$initialStock);
                            if($statement2->execute()){//if the product intials stock has been added to the database then log the info to logs table



                            //fetch the last supplier id inserted in supplier for logs

                                    $last_id_sql_log="SELECT MAX(product_id) AS last_id from inventory";

                                    $last_id_results=$conn->query($last_id_sql_log);
                                    $last_id_row_info=mysqli_fetch_assoc($last_id_results);
                                    $last_id_value=intval($last_id_row_info['last_id']);

                                    //final log sql for supplier registration
                                    $sql_for_logs="INSERT INTO logs(user_id_for_logs,action_type,described,new_values,ip_address,affected_table,affected_record_id) VALUES($userId,'add initial product stock','empty','product_name=>$productName::initialStock=>$initialStock','$ipAddress','inventory',$last_id_value)";


                                    $log_add_product_intial_stock=$conn->query($sql_for_logs);//insert log


                            }

                            



                        }else{
                            echo "<br>"."connection2 failed";
                        }    
                        echo "<div style='background-color: #C6F7D0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                        <i style='font-size: 48px; color: #34c759;' class='fas fa-check-circle'></i>
                        <h2 style='font-weight: bold; margin-top: 10px;'>Product has been added successfully!</h2>
                        <p style='margin-bottom: 20px;'>Product has been added successfully.</p>
                        <button style='background-color: #337ab7; color: #ffffff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;'><a href='../all_products/all_products.php' style='text-decoration: none; color: #ffffff;'>View All products</a></button>
                        </div>"; 




                    }else{
                        echo "something went wrong";
                    }



            





            }

        }else{
            echo "<br>"."<h1 style='background:red;color:white;'>ERROR: missing Image press on the Add product tab to refill <h1>";
        }
      

       

    }







?>