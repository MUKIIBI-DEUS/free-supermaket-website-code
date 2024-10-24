<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="all_sales.css">
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        #loader{
            position:fixed;
            width: 100%;
            top:0;
            left:0;
            bottom:0;
            background:gray;
            color:white;
            z-index:9999;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            border-radius:9px;

           
        }
        #boxSized{
            margin-left:20px;
        }
        </style>    

</head>

<body>

<!-- LOADER -->

<div id="loader">

<div class="spinner-border text-light" role="status">
    <span class="visually-hidden">Loading--------</span>            
</div>

<span id="boxSized"></span>

<h1>Fresh Mart</h1>





</div>

<!-- LOADER  END-->



    <div class="searchSaless">
        <div class="search">
            <input type="text" placeholder="Search Sales by all attributes" id="searchPdt">
            <button>Search</button>
        </div>
       


    </div>



    <!-- STICKY TABLE HEADING -->

   <!-- BOOTSTRAP TABLE -->


   <form action="update_sales_form.php" method="post">
   <input type="text" name="sid" id="sid" style="visibility:hidden;height:3px;">
            <table class="table table-striped">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">timestamp</th>
            <th scope="col">user_id_for_logs</th>
            <th scope="col">action_type</th>
            <th scope="col">described</th>
            <th scope="col">new_values</th>
            <th scope="col">ip_address</th>
            <th scope="col">affected_table</th>
            <th scope="col">affected_record_id</th>
            
          
            <th scope="col" ></th>

            </tr>
        </thead>
        <tbody id="tbBody">
            <!-- <tr class="tbRow">
            <th scope="row" class="tbData">1</th>
            <td class="tbData">1</td>
            <td class="tbData">2</td>
            <td class="tbData">Apples</td>
            <td class="tbData">4</td>
            <td class="tbData">4000</td>
            <td class="tbData">12/12/2023</td>
            <td class="tbData">4:00pm</td>
            
            <td class="actions editBtn openSalesEditBar tbData">Edit</td>
            <td class="actions deleteBtn"></td>
            </tr> -->






            <?php
            
            try {
                include("../../../../assets/database_connect/database.php");
            
                $sql = "SELECT * FROM logs order by id desc";//pick rowa from the sales table
                $results = mysqli_query($conn, $sql); // $conn from the database file in the include()
            
                if ($results) { // Check if the query was successful and returned a mysqli_result object
                    if (mysqli_num_rows($results) > 0) { // Check if there are any rows in the products table
                        // Loop through each row and display each value in the table
                        while ($row = mysqli_fetch_assoc($results)) {
                            echo "
                                    <tr class='tbRow'>
                                    <th scope='row' class='tbData'>{$row['id']}</th>
                                    <td class='tbData'>{$row['timestamp']}</td>
                                    <td class='tbData'>{$row['user_id_for_logs']}</td>
                                    <td class='tbData'>{$row['action_type']}</td>
                                    <td class='tbData'>{$row['described']}</td>
                                    <td class='tbData'>{$row['new_values']}</td>
                                    <td class='tbData'>{$row['ip_address']}</td>
                                    <td class='tbData'>{$row['affected_table']}</td>
                                    <td class='tbData'>{$row['affected_record_id']}</td>
                                    
                                    </tr>";
                        }
                    }
                }
            } catch (Exception $e) {
                // Handle any exceptions that might occur
                echo "An error occurred: " . $e->getMessage();
            }
        
        
        
        
        ?>


        


        </tbody>
        </table>
        
            </table>
 </form>





      
     





   

    <!-- </div> -->
    <script>

        </script>




    <script>


    </script>



    <script src="all_sales.js"></script>
</body>
</html>
