<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="all_suppliers.css">
    <link rel="stylesheet" href="bootstrap.css">

</head>

<body>

    <div class="searchSuppliers">
        <div class="search">
            <input type="text" placeholder="Search supplier">
            <button>Search</button>
        </div>
       

        <select name="" id="">

            <option value="">Supplier.ID</option>
            <option value="">F_name</option>
            <option value="">L_name</option>
            <option value="">S_contact</option>
            <option value="">Location</option>
            <option value="">Product</option>
            <option value=""></option>
        </select>

    </div>

   <!-- BOOTSTRAP TABLE -->
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
  <tbody>



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
                    
                      
                            <td class='actions editBtn openSupplierEditBar tbData'>Edit</td>
                            <td class='actions deleteBtn'></td>
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




<!-- EDITBAR -->
<!-- editBar to appear on any edit click -->
    <!-- <div class="editSupplierBar"> -->
   
    <form class="editSupplierBar" action="all_users_db_logic.php" method="post">
        <div class="mb-3">

       
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Supplier_id</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"  readonly  name="supplier_id">
          
        </div>




        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">First name</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="firstName">

        </div>


        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Last Name</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="lastName"   >

        </div>


       
        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Contact</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="contact"   >

        </div>

   


        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Location</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off"
            name="location"   >

        </div>








        <div class="mb-3">

                
            <label for="exampleInputEmail1" class="form-label" style="margin-top:10px;">Product_id</label>
            <input type="text" class="form-control inpt_values" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="product_id"   >

        </div>





       





        <!-- <button type="submit" class="btn btn-lg btn-success">Add supplier</button> -->
        <div class="btns">
            <button class="btn updateSales" name="updateSupplier">Update</button>
            <button class="btn deleteSales" name="deleteBtn">Delete</button>
            <button class="btn" id="cancelUpdate"><a href="all_suppliers.php" style='text-decoration: none; color: #ffffff;'>Cancel</a></button>
        </div>



    </form>









    <script src="all_suppliers.js"></script>
</body>
</html>

