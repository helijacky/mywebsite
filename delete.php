<?php
include('productcrud.php');

  $obj= new productcrud();
  $success = $obj->deleteProduct($_GET['code']);
  header('Location:index.php');



?>