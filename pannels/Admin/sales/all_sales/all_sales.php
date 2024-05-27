<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="all_sales.css">
    <link rel="stylesheet" href="bootstrap.css">

</head>

<body>
    <div class="searchSaless">
        <div class="search">
            <input type="text" placeholder="Search Sales">
            <button>Search</button>
        </div>
       

        <select name="" id="">

            <option value="">Sales_id</option>
            <option value="">Employee_id</option>
            <option value="">Product_id</option>
            <option value="">Product_name</option>

            <option value="">Quantity</option>
            <option value="">Unit_cost</option>
            <option value="">Total</option>
            <option value="">Date of Sale</option>
            <option value="">time</option>
        </select>

    </div>

   <!-- BOOTSTRAP TABLE -->
    <table class="table table-striped">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sales_ID</th>
      <th scope="col">Employee_id</th>
      <th scope="col">Product_id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Qty</th>
      <th scope="col">Unit_cost</th>
      <th scope="col">Total</th>
      <th scope="col">Date_of_sale</th>
      <th scope="col">Time</th>
      
      <th scope="col" class="actionTitle">Actions</th>
      <th scope="col" ></th>

    </tr>
  </thead>
  <tbody>
    <tr class="tbRow">
      <th scope="row" class="tbData">1</th>
      <td class="tbData">1</td>
      <td class="tbData">2</td>
      <td class="tbData">Apples</td>
      <td class="tbData">4</td>
      <td class="tbData">1000</td>
      <td class="tbData">4000</td>
      <td class="tbData">12/12/2023</td>
      <td class="tbData">4:00pm</td>
     
      <td class="actions editBtn openSalesEditBar tbData">Edit</td>
      <td class="actions deleteBtn"></td>
    </tr>


   


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








    <script src="all_sales.js"></script>
</body>
</html>

