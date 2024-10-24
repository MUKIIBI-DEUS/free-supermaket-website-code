<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="date_profits.css">
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
            <input type="text" placeholder="Search Profit by month">
            <button>Search</button>
        </div>
       



    </div>

   <!-- BOOTSTRAP TABLE -->
    <table class="table table-striped">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Product</th>
      <th scope="col">Profits</th>
      <!-- <th scope="col">Product_id</th>
      <th scope="col">Product Name</th>
      
      <th scope="col">Total</th>
      <th scope="col">Profit</th>
      <th scope="col">DOS(YYYY-MM-DD)</th>
      <th scope="col">Time</th> -->
      
      <!-- <th scope="col" class="actionTitle">Actions</th>
      <th scope="col" ></th> -->

    </tr>
  </thead>
  <tbody>
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
    
        $sql = "SELECT 
    MONTHNAME(date_of_sale) AS months,
    DATE_FORMAT(date_of_sale, '%Y') AS years,
    product_Name,
    SUM(profit) AS totalProfit
FROM 
    sales
GROUP BY 
    product_Name, DATE_FORMAT(date_of_sale, '%Y-%m')
ORDER BY 
    MONTHNAME(date_of_sale) desc;";//fetch all  total date profits from the  sales table
        $results = mysqli_query($conn, $sql); // $conn from the database file in the include()
    
        if ($results) { // Check if the query was successful and returned a mysqli_result object
            if (mysqli_num_rows($results) > 0) { // Check if there are any rows in the products table
                // Loop through each row and display each value in the table
                while ($row = mysqli_fetch_assoc($results)) {
                    echo "
                            <tr class='tbRow'>
                            <th scope='row' class='tbData'>{$row['months']}</th>
                            <th scope='row' class='tbData'>{$row['years']}</th>                            
                            <td class='tbData'>{$row['product_Name']}</td>
                            <td class='tbData'>{$row['totalProfit']}</td>
         
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




<!-- EDITBAR -->
<!-- editBar to appear on any edit click -->
    <form class="editSalesBar">
        <div class="mb-3">

       
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">sales_id</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"  readonly disabled >
          
        </div>




        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Employee_id</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" disabled>

        </div>


        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Product_id</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>


       
        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Product_name</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>

   


        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Qty</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>




        
        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Unit_cost</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>








        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Total</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>





        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Date of Sale</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>




        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Time</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"   >

        </div>





        <!-- <button type="submit" class="btn btn-lg btn-success">Add supplier</button> -->
        <div class="btns">
            <button class="btn updateSales">Update</button>
            <button class="btn deleteSales">Delete</button>
            <button class="btn" id="cancelUpdate">Cancel</button>
        </div>



    </form>


      
     





   

    <!-- </div> -->



    <script>
            //Handle the loader 
document.onreadystatechange=function(){
    if(document.readyState !=="complete"){
        document.querySelector('#loader').style.display="flex";//enable the loader if the page isnt fully loaded
        console.log("page isnt ready");
    }else{
        document.querySelector('#loader').style.display="none";//disable the loader if the page is fully loaded
        console.log("page is ready");
    }
}
        </script>





    <script src="all_sales.js"></script>
</body>
</html>

