<?php 
include "config.php";

if(isset($_POST["name"]) || isset($_POST["age"]) || isset($_POST["country"])){

    $name=$_POST["name"];
    $age=$_POST["age"];
    $country=$_POST["country"];


    $sql="INSERT INTO student (std_name,std_age,std_country) VALUES ('{$name}',{$age},'{$country}')";

    if(mysqli_query($conn,$sql)){
        echo 1;
    }else{
        echo 0;
    }
}
