<?php 

include "config.php";

if(isset($_POST["id"])){
    $id=$_POST["id"];

    $sql="SELECT * FROM student WHERE id='{$id}'";
    $run_sql=mysqli_query($conn,$sql);
    $output="";
    if(mysqli_num_rows($run_sql) > 0){
        $output .="<div class='modal-body'>";
        while($row=mysqli_fetch_assoc($run_sql)){
      $output .="<div class='form-group'>
            <label for=''>Enter Username</label>
            <input type='text' value='{$row["std_name"]}' name='edit_username' id='edit_username' class='form-control form-control-lg'>
            <input type='hidden' value='{$row["id"]}' name='edit_id' id='edit_id' class='form-control form-control-lg'>
        </div>
        <div class='form-group'>
            <label for=''>Enter Age</label>
            <input type='number' value='{$row["std_age"]}' name='edit_age' id='edit_age' class='form-control form-control-lg'>
        </div>
        <div class='form-group'>
            <label for=''>Enter City</label>
            <input type='text' value='{$row["std_country"]}' name='edit_country' id='edit_country' class='form-control form-control-lg'>
        </div>";
        }
  $output .="</div>";
  echo $output;
    }
}

?>