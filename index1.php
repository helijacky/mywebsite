<?php
include('productcrud.php');
$obj = new productcrud();
$list = $obj->readProducts();
if($list){
    /*foreach($list as $item){
        $content= "";
        foreach($item as $key => $value){
            $content = $content . $key . ":".$value."<br>";

        }
        echo $content."<br>";
    }
}*/
?>
<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
        <body>
         <div class="container">
            <table class="table table-dark">
            <h3><a href="insert.php">Add new product</a></h3>
            <h3><a href="index.php">To main page</a></h3>
             <tr> 
                <th> Product ID: </th>
                <th> Product Name: </th>
                <th> Product Price: </th>
                <th> Product Image: </th>
                <th> Product Details: </th>
                <th> Product Link: </th>
                <th> Actions </th>
             </tr>
                <?php foreach($list as $item) {?>
             <tr>
                <td><?php echo$item["code"] ?> </td> 
                <td><?php echo$item["name"] ?> </td> 
                <td><?php echo$item["price"] ?> </td> 
                <td><img src="img\<?=$item['image']?>"width="140" height="140"/></td> 
                <td><?php echo$item["details"] ?> </td>
                <td><?php echo$item["link"] ?> </td> 
                <td><a href="update.php"><button type="button" class="btn btn-success">Update</button></a>

                <a href="delete.php?code=<?=$item["code"]?>" onClick="return confirm('ARE YOU SURE');"> <button type="button" class="btn btn-danger">Delete</button></a> </td>
                
              </tr>
              <?php } ?>
              <?php } ?>
            </table>
          </div>
         </body>
    </html>