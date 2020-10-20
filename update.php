<?php
include('productcrud.php');
if(isset($_POST['update'])){
  $obj= new productcrud();
  $success = $obj->updateProduct($_POST['code'],$_POST['name'],$_POST['price'],
                                  $_POST['image'],$_POST['details'],$_POST['link']);
  header('Location:index.php');

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update product</h2>
  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <div class="form-group">
      <label for="Code">ID</label>
      <input type="text" class="form-control" id="code" placeholder="" name="code">
    </div>
    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Price</label>
      <input type="text" class="form-control" id="price" placeholder="" name="price">
    </div>
    <div class="form-group">
      <label for="pwd">Image</label>
      <input type="text" class="form-control" id="image" placeholder="" name="image">
    </div>
    <div class="form-group">
      <label for="pwd">Product Details</label>
      <input type="text" class="form-control" id="details" placeholder="" name="details">
    </div>
    <div class="form-group">
      <label for="pwd">Product Link</label>
      <input type="text" class="form-control" id="link" placeholder="" name="link">
    </div>
    
    <button type="submit" class="btn btn-primary" name="update">Update</button>
  </form>
</div>

</body>
</html>
