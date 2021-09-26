<?php 

include "config.php";
if(isset($_POST["id"]) || isset($_POST["name"]) || isset($_POST["age"]) || isset($_POST["country"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $country=$_POST["country"];

    $sql="UPDATE student SET std_name='{$name}' , std_age={$age}, std_country='{$country}' WHERE id='{$id}'";
    if(mysqli_query($conn,$sql)){
        echo 1;
    }else{
        echo 0;
    }
}


?>