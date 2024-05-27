<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_products.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
        <form action="databaseLogic.php" method="post" enctype="multipart/form-data">



        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" name="product_name" required>
          
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="selectedOption">

                <option selected>Select Product Category</option>
                <option value="Electronics">Electronics</option>
                <option value="Clothing and Fashion">Clothing and Fashion</option>
                <option value="Home and Kitchen">Home and Kitchen</option>
                <option value="Beauty and Personal Care">Beauty and Personal Care</option>
                <option value="Health and Fitnes">Health and Fitness</option>
                <option value="Automotive">Automotive</option>
                <option value="Books and Literature">Books and Literature</option>
                <option value="Sports and Outdoor">Sports and Outdoor</option>
                <option value="Furniture and Decoration">Furniture and Decoration</option>
                <option value="Toys and Games">Toys and Games</option>
                <option value="Food and Beverages">Food and Beverages</option>
                <option value="Pet Supplies">Pet Supplies</option>
                <option value="Office Supplies">Office Supplies</option>
                <option value="Baby and Maternity">Baby and Maternity</option>
                <option value="Tools and Home Improvement">Tools and Home Improvement</option>


                







            </select>

        </div>
   



<!-- Product UnitCOst -->
<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UnitCost (only numbers or digits)</label>

            <input type="number" class="form-control" name="unitcost" required autocomplete="off" min="100">

        </div>

<!-- Product starting Stock -->
        <!--  -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Initial Stock (Starting Stock)</label>

            <input type="number" class="form-control" name="initialStock" required autocomplete="off" >

        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">product Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="productImage" accept=".jpg,txt">
          
        </div>




   





        <input type="submit" class="btn btn-success btn-lg" name="addProduct" value="Add products" required>
        </form>













    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="add_products.js"></script>
</body>
</html>



<!-- ADD A PRODUCT INTO THE DATABASE -->

