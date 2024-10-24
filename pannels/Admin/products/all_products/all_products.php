

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="all_products.css">
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






    <div class="searchProducts">
        <div class="search">
            <input type="text" placeholder="Search Product" id="searchPdt">
            <button>Search</button>
        </div>
       


    </div>


   <!-- BOOTSTRAP TABLE -->
   <form action="edit_product_form.php" method="post" id="inventoryform"> 
   <input type="text" name="sid" id="sid" style="visibility:hidden;height:20px;">

    <table class="table table-striped">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product_ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">buying_price</th>
      <th scope="col">UnitCost</th>
      <th scope="col">ProductImage</th>
      <th scope="col" class="actionTitle">Actions</th>
      <th scope="col" ></th>

    </tr>
  </thead>
  <tbody id='tbBody'>
<!-- EXAMPLE ROW BEFORE PHP -->
<!--       
    <tr class="tbRow">
      <th scope="row" class="tbData">1</th>
      <td class="tbData">Milk</td>
      <td class="tbData">Home</td>
      <td class="tbData">Douglas</td>
   
      <td class="actions editBtn openProductEditBar tbData">Edit</td>
      <td class="actions deleteBtn"></td>
    </tr> -->
    <!-- Fetching the data from feshmart database feeding the all_products Tables -->
    <?php
    
      try {
          include("../../../../assets/database_connect/database.php");
      
          $sql = "SELECT * FROM products order by product_name asc";
          $results = mysqli_query($conn, $sql); // $conn from the database file in the include()
      
          if ($results) { // Check if the query was successful and returned a mysqli_result object
              if (mysqli_num_rows($results) > 0) { // Check if there are any rows in the products table
                  // Loop through each row and display each value in the table
                  while ($row = mysqli_fetch_assoc($results)) {
                      echo "
                      <tr class='tbRow'>
                          <th scope='row' class='tbData'>{$row['product_id']}</th>
                          <td class='tbData'>{$row['product_name']}</td>
                          <td class='tbData'>{$row['category']}</td>
                          <td class='tbData'>{$row['buying_price']}</td>
                          
                          <td class='tbData'>{$row['unitcost']}</td>

                          <td class='tbData'><img src='{$row['productImage']}' alt='sorry'style='height:70px;width:90px;border-radius:5px'></td>

                          <td class='actions editBtn openProductEditBar tbData'><button class='btn btn-primary editpdtBtn'>Edit</button></td>
                          <td class='actions deleteBtn'></td>
                      </tr>";
                  }
              }
          }
      } catch (Exception $e) {
          // Handle any exceptions that might occur
          echo "An error occurred: " . $e->getMessage();
      }
    
    
    
    
    ?>








    <!-- <tr class="tbRow">
      <th scope="row" class="tbData">2</th>
      <td class="tbData">Soda</td>
      <td class="tbData">Beverages</td>
      <td class="tbData">Olivia</td>
      <td class="tbData">2000</td>
      <td class="actions editBtn openProductEditBar tbData">Edit</td>
      <td class="actions"></td>
    </tr>


    <tr>
      <th scope="row">3</th>
      <td>Beer</td>
      <td>Beverages</td>
      <td>Deus</td>
      <td>3112000</td>
      <td class="actions">Edit</td>
      <td class="actions"></td>
    </tr>
 -->

  </tbody>
</table>
 
    </table>
    </form>











    <script>
         let sid=document.getElementById('sid');
         let editproductbtn = document.querySelectorAll('.editpdtBtn');

         editproductbtn.forEach(edtBtn => {
    edtBtn.addEventListener('click', () => {
        let record = edtBtn.closest('.tbRow'); // get the parent row
        let values = record.querySelectorAll('.tbData');
        console.log(values[0].innerHTML);
        sid.value = values[0].innerHTML.trim();


        //direct to the editStock form 
        confrirmAction("editStock_form.php", "Are you sure you want to edit this products stock ?");

    });
});





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
    <script src="allproducts.js"></script>
</body>
</html>


 