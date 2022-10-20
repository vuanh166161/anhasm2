
<?php include('includes/db.php'); ?>

<html>
    <head>
        <title>Inserting Product</title>
    </head>

    <body bgcolor="skyblue">

    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        
    <table align="center" width="795" border="2" bgcolor="#187eae">

        <tr align="center">
            <td colspan="7"><h2>Insert New Post Here</h2></td>
        </tr>
        
        <tr>
            <td align="right"><b>Product Name:</b></td>
            <td><input type="text" name="product_name" size="60" required/></td>
        </tr>

        <tr>
            <td align="right"><b>Product Type:</b></td>
            <td>
                <select name="product_cart">
                    <option>Select a Category</option>
                
                <?php
                $get_cats="select * from category";

                $run_cats=mysqli_query($con, $get_cats);
            
                while($row_cats=mysqli_fetch_array($run_cats)){
                    $categoryid = $row_cats['categoryid'];
            
                    $categoryname = $row_cats['categoryname'];
            
                    echo "<option value='$categoryid'>$categoryname</option>";
                }

?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right"><b>Product Image: </b></td>
            <td><input type="file" name="product_image"/></td>
        </tr>
        <tr>
            <td align="right"><b>Prime Cost: </b></td>
            <td><input type="text" name="product_primecost" required/></td>
        </tr>
        <tr>
            <td align="right"><b>Product Price: </b></td>
            <td><input type="text" name="product_price" required/></td>
        </tr>
        
        <tr>
            <td align="right"><b>Product Quantity: </b></td>
            <td><input type="text" name="product_quantity" required/></td>
        </tr>
        <tr>
            <td align="right"><b>Product Information:</b></td>
            <td><textarea name="product_information" cols="20" rows="10"></textarea></td>
        </tr>
        
        
        <tr>
            <td align="right"><b>Product Keywords: </b></td>
            <td><input type="text" name="product_keywords" required/></td>
        </tr>
        <tr align="center">
            <td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
        </tr>
    </table>

</form>

</body>
</html>

<?php
if(isset($_POST['insert_post'])){
    $product_name = $_POST['product_name'];
    $product_cat = $_POST['product_name'];
    $product_primecost = $_POST['product_primecost'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_information = trim(mysqli_real_escape_string($con, $_POST['product_information']));
    $product_keywords = $_POST['product_keywords'];


    //Getting the image from the field
    $product_image = $_FILES['product_image'] ['name'];
    $product_image_tmp = $_FILES['product_image'] ['tmp_name'];

    move_uploaded_file($product_image_tmp, "$product_image");

    $insert_product = "insert into product (product_cat, product_name, product_primecost, product_price, product_quantity, product_information, product_image,product_keywords)  values ('$product_cat', '$product_name','$product_primecost','$product_price','$product_quantity','$product_information','$product_image', '$product_keywords')";

    $insert_pro = mysqli_query($con, $insert_product);

    if($insert_pro){
        echo "<script>alter('Product Has Been inserted successfully!')</script>";
        
        echo "<script>window.open('index.php?insert_product','_self')</script>";
    }
}
?>