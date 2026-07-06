<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
    <title>Edit Product</title>
</head>
<body>
    <header>Edit Product</header>
      <form action="../controllers/DeleteProduct.php" method="post">
     <label for="name">Please Enter New Product Name:</label><br>
     <input type="text" name="name" id="name" maxlength="20"><br><br>
     <label for="price">Please Enter New Product Price:</label><br>
     <input type="number" name="price" id="price"><br><br>
     <label for="description">Please New Enter Description</label><br>
     <textarea name="description" id="description" rows="5"></textarea><br><br>
     <button name ="edit">Edit Product</button>
    </form>
    <h2>
</body>
</html>