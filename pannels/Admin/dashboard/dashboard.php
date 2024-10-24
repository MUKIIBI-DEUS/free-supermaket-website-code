<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>




    </style>
</head>
<body>
    <!-- main status bar -->
    <div class="mainStatusBar">
            <!-- CUSTOMERS============================== -->
        <div class="statusBox box1">
            <!-- Start of upper status -->
            <div class="upperStatus">
                <div class="design"></div>
                <div class="info">
                    <p>Employees</p>
                    

                        <!-- acode to pick up number of employees in the system -->
                        <?php
                             include("../../../assets/database_connect/database.php");
                            
                            if($conn){
                                $sql="select count(e_id) as num_rows from employee";
                                $results=mysqli_query($conn,$sql);//
                                if($results){
                                    //if the num of rows>0
                                    if(mysqli_num_rows($results)>0){
                                            $row=$results->fetch_assoc();//fteching the associate rows
                                            $num_rows = $row['num_rows'];//picking the value in as num_rows

                                            echo "<h1>$num_rows</h1>";
                                            
                                         
                                }
                                }

                            }

                        
                        ?>
                    
                </div>
                <div class="status_image">
                    <img src="../../../assets/images/employees12.png" alt="sorry">
                </div>

            </div>

            <!--            END OF UPPERSTATUS---------------------- -->
            <div class="lowerStatus">
                <!-- <p>+65% Since lastweek</p> -->

            </div>
        </div>




         <!-- REVENUE STATUS============================== -->
         <div class="statusBox" id="revenue">
            <!-- Start of upper status -->
            <div class="upperStatus">
                <div class="design"></div>
                <div class="info">
                    <p>Suppliers</p>
                    <!-- fetch the number of suppliers in the system -->
                    <?php
                            // $conn=mysqli_connect("localhost","jblabsug_dmukiibi","JBLABSUG@2024","jblabsug_sales");
                            
                            if($conn){
                                $sql="select count(supplier_id) as num_rows from supplier";
                                $results=mysqli_query($conn,$sql);//
                                if($results){
                                    //if the num of rows>0
                                    if(mysqli_num_rows($results)>0){
                                            $row=$results->fetch_assoc();//fteching the associate rows
                                            $num_rows = $row['num_rows'];//picking the value in as num_rows

                                            echo "<h1>$num_rows</h1>";
                                            
                                          
                                }
                                }

                            }

                        
                        ?>
                    
                </div>
                <div class="status_image">
                    <img src="../../../assets/images/suppliers.png" alt="sorry">
                </div>

            </div>

            <!--            END OF UPPERSTATUS---------------------- -->
            <div class="lowerStatus">
                <!-- <p>+65% Since lastweek</p> -->

            </div>

        </div>



          <!-- EMPLOYEES STAUS============================== -->
          <div class="statusBox" id="employee">
            <!-- Start of upper status -->
            <div class="upperStatus">
                <div class="design"></div>
                <div class="info">
                    <p>Stock</p>
                    <?php
                            // $conn=mysqli_connect("localhost","jblabsug_dmukiibi","JBLABSUG@2024","jblabsug_sales");
                            
                            if($conn){
                                $sql="select sum(inventory_no) as num_rows from inventory";//a query that adds all stock or inventory number
                                $results=mysqli_query($conn,$sql);//
                                if($results){
                                    //if the num of rows>0
                                    if(mysqli_num_rows($results)>0){
                                            $row=$results->fetch_assoc();//fteching the associate rows
                                            $num_rows = $row['num_rows'];//picking the value in as num_rows

                                            echo "<h1>$num_rows</h1>";
                                            
                                           
                                }
                                }

                            }

                        
                        ?>
                    
                </div>
                <div class="status_image">
                    <img src="../../../assets/images/inventory2.png" alt="sorry">
                </div>

            </div>

                     <!--            END OF UPPERSTATUS---------------------- -->
            <div class="lowerStatus">
                <!-- <p>+65% Since lastweek</p> -->

            </div>

        </div>




        
          <!-- PROFITS STAUS============================== -->
          <div class="statusBox" id="profits">
            <!-- Start of upper status -->
            <div class="upperStatus">
                <div class="design"></div>
                <div class="info">
                    <p>All Products</p>
                    <?php
                            // $conn=mysqli_connect("localhost","jblabsug_dmukiibi","JBLABSUG@2024","jblabsug_sales");
                            
                            if($conn){
                                $sql="select count(DISTINCT product_id) as num_rows from products";//a query that get a number of products
                                $results=mysqli_query($conn,$sql);//
                                if($results){
                                    //if the num of rows>0
                                    if(mysqli_num_rows($results)>0){
                                            $row=$results->fetch_assoc();//fteching the associate rows
                                            $num_rows = $row['num_rows'];//picking the value in as num_rows

                                            echo "<h1>$num_rows</h1>";
                                            
                                           
                                }
                                }

                            }

                        
                        ?>
                    
                </div>
                <div class="status_image">
                    <img src="../../../assets/images/product.png" alt="sorry">
                </div>

            </div>

                     <!--            END OF UPPERSTATUS---------------------- -->
            <div class="lowerStatus">
                <!-- <p>+65% Since lastweek</p> -->

            </div>

        </div>




    </div>




    <!-- END OF MAINSTAUS BAR -->


    <!-- RECENT TRANSACTIONS -->
    <div class="recentTransactions">

        <div class="topOrderBar">
            <h5 style="color:#fff;">Recent Sales</h5>

            <!-- <select name="" id="">
                <option value="">Date</option>
                <option value="">Status</option>
                <option value="">Price</option>
                <option value="">CustomerName</option>
                <option value="">Order_no</option>
            </select> -->
        </div>



        <div class="table_attributes">
            <div class="no"><p>No</p></div>
            <div class="Emp"><p>Emp.id</p></div>
            <!-- <div class="custid"><p>Cus.id</p></div> -->
            <!-- <div class="custN"><p>CustomerName</p></div> -->
            <div class="pdt"><p>Product</p></div>
            <!-- <div class="qty"><p>Qty</p></div> -->
            <!-- <div class="prc"><p>price</p></div> -->
            <!-- <div class="tt"><p>Total</p></div> -->
            <!-- <div class="st"><p>Status</p></div> -->
            <!-- <div class="Dt"><p>Date</p></div> -->

        </div>









        <?php
                            // $conn=mysqli_connect("localhost","jblabsug_dmukiibi","JBLABSUG@2024","jblabsug_sales");
                            
                            if($conn){
                                $sql="select * from sales order by sales_id desc  limit 6";//a query that get a number of products
                                $results=mysqli_query($conn,$sql);//
                                if($results){
                                    //if the num of rows>0
                                    if(mysqli_num_rows($results)>0){
                                            while($row=mysqli_fetch_assoc($results)){//fteching the associate rows


                                            echo "
        <div class='orderRow'>
            <div class='no'><p>{$row['sales_id']}</p></div>
            <div class='Emp'><p>{$row['employee_id']}</p></div>
            

            <div class='custN'>
               

                <p>{$row['product_Name']}</p>
            
            </div>



            
    

        </div>";


                                            }
                                            
                                            // $conn->close();
                                }
                                }

                            }

                        
                        ?>
        
       



        <!-- ORDER ROW -->
<!-- 
        <div class="orderRow">
            <div class="no"><p>12</p></div>
            <div class="Emp"><p>E0001</p></div>
            <div class="custid"><p>C002</p></div>

            <div class="custN">
                <img src="../../../assets/images/user32.png" alt="">

                <p>Mukiibi Deus</p>
            
            </div>

            <div class="pdt">
                <img src="../../../assets/images/cola.jpg" alt="" id="pdtimage">
                    <p>Soya</p>
            </div>

            <div class="qty"><p>6</p></div>
            <div class="prc"><p>$123</p></div>
            <div class="tt"><p>Total</p></div> -->
            <!-- <div class="st"><p>Paid</p></div>
            <div class="Dt"><p>4/13/2024</p></div>

        </div> --> 




       
    </div>












</body>
</html>

<?php



?>