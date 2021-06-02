<?php
require 'header.php';
?>

<head>
    <title>
        Add Menu Item | Foodshala
    </title>
    <link rel="stylesheet" href="styles/restaurant.css">
</head>

<div>
    <a href="manage-restaurant" class="back-btn"><i class="ion-android-arrow-back"></i></a>
    <h1 class="heading">
        Add Menu Item
    </h1>
    <div class="contain">
        <form action="includes/add-dish.inc" method="post" enctype="multipart/form-data">
            <br>
            <input type="text" name="menu-name" class="form-control input-box" placeholder="Enter Menu Name" required />
            <select value="" name="foodtype" class="form-control" required>
                <option value="" selected hidden disabled>Select Food Type</option>
                <option value="Veg">Veg</option>
                <option value="Non Veg">Non Veg</option>
            </select>
            <input type="text" name="price" class="form-control input-box" placeholder="Enter Price in Rs" required />
            <input type="text" name="description" class="form-control input-box" placeholder="Enter Menu Description" required />

            <input type="file" class="form-control" name="productImage" required>
            <input type="file" class="form-control" name="productImage2" required>
            <input type="file" class="form-control" name="productImage3" required>
            <input type="file" class="form-control" name="productImage4" required>
            <input type="file" class="form-control" name="productImage5" required>
            <button type="submit" name="add-dish" class="formButton">Add to Menu</button>
        </form>
    </div>

</div>


<?php
require 'footer.php';
?>