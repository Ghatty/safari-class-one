<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:50 AM
 */
if (isset($_POST['btnsubmit'])){
    $name = $_POST['X'];
    $email = $_POST['Y'];
    $password = $_POST['Z'];
    $encrPassword = md5($password);

    $conn = mysqli_connect("localhost","root","","safari");
    if (!$conn){
        echo "Failed to connect to the DB";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$encrPassword')");
        if (!$insert){
            echo "Failed to save";
        }else{
            echo "$name saved successfully";
            echo "<a href='userSave.php'>Add User</a>";
        }
    }

}






?>