<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="all_suppliers.css">
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

    <div class="searchSuppliers">
        <div class="search">
            <input type="text" placeholder="Search supplier by all attributes" id="searchPdt">
            <button>Search</button>
        </div>
       



    </div>

   <!-- BOOTSTRAP TABLE -->
   <form action="update_supplier_details_form.php" method="post">    

   <input type="text" name="supplier_id" id="sid" style="visibility:hidden;height:3px;">

    <table class="table table-striped">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Supplier_ID</th>
      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
      <th scope="col">S_contact</th>
      <th scope="col">Location</th>
      <th scope="col">Pdt1</th>
      <th scope="col" class="actionTitle">Actions</th>
      <th scope="col" ></th>

    </tr>
  </thead>
  <tbody id="tbBody">



    <!-- fetch data from supplier table(freshmart database ) to the table -->
    <?php
        try{
            include("../../../../assets/database_connect/database.php");

            if($conn){
                $sql="select * from supplier";

                $results=mysqli_query($conn,$sql);

                if($results){
                    if(mysqli_num_rows($results)>0){
                        while($row=mysqli_fetch_assoc($results)){
                            echo "    <tr class='tbRow'>
                            <th scope='row' class='tbData'>{$row['supplier_id']}</th>
                            <td class='tbData'>{$row['fname']}</td>
                            <td class='tbData'>{$row['lname']}</td>
                            <td class='tbData'>{$row['s_contact']}</td>
                            <td class='tbData'>{$row['s_location']}</td>
                            <td class='tbData'>{$row['product_id']}</td>
                    
                      
                            <td class='actions editBtn openSupplierEditBar tbData'><button class='btn btn-primary'  name='submitForm'>Edit</button></td>
                           
                          </tr>";
                        }
                    }
                }


            }else{
                
            }
        }catch(Exception $e){
            echo "<br>"."Error".$e->getMessage();
        }

    
    
    
    
    
    ?>




  </tbody>
</table>
 
    </table>

    </form>




<!-- EDITBAR -->
<!-- editBar to appear on any edit click -->
    <!-- <div class="editSupplierBar"> -->
   
    









   

    <script src="all_suppliers.js"></script>
</body>
</html>

