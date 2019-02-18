<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<form action="updateProcess.php" method="post">
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 2/13/19
     * Time: 9:42 AM
     */
    extract($_GET);
    $conn = mysqli_connect("localhost","root","","leokesho");
    $fetch = mysqli_query($conn,"SELECT * FROM gallery WHERE id=$Y");
    if (!$fetch){
        echo "Fetching Failed";
    }else{
     ($row = mysqli_fetch_assoc($fetch));
    extract($row);
    }


    ?>
    <input type="hidden" name="id" value="<?php echo $id;?>"><br>
    <input type="text" name="Item" value="<?php echo $Item;?>"><br>
    <input type="email" name="Quantity" value="<?php echo $Quantity;?>"><br>
    <input type="password" name="Price" value="<?php echo $Price;?>">
    <input type="submit" name=" btnsubmit" value="update">
</form>
</body>
</html>