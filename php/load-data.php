<?php 

include "config.php";

if(isset($_GET["page"])){
    $page=$_GET["page"];
}else{
    $page =1;
}

$limit=3;
$offset=($page - 1) * $limit;

$sql="SELECT * FROM student ORDER BY id DESC LIMIT $offset , $limit";
$run_sql=mysqli_query($conn,$sql);
$output="";
if(mysqli_num_rows($run_sql) > 0){
    $output .=" <div class='table-responsive'>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Student Age</th>
                <th>Student Country</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>";
        while($row=mysqli_fetch_assoc($run_sql)){
        $output .="<tbody>
            <tr>
                <td>{$row["id"]}</td>
                <td>{$row["std_name"]}</td>
                <td>{$row["std_age"]}</td>
                <td>{$row["std_country"]}</td>
                <td><button data-id='{$row["id"]}' data-toggle='modal' data-target='#editStudent' id='edit' class='btn btn-success'>Edit</button></td>
                <td><button id='delete' data-id='{$row["id"]}' class='btn btn-danger'>Delete</button></td>
            </tr>
        </tbody>";
        }
    $output .="</table>
</div>";
        $sql1="SELECT * FROM student ";
        $run_sql1=mysqli_query($conn,$sql1);
        $record=mysqli_num_rows($run_sql1);
        $total_page=ceil($record/$limit);

        $output .="<div class='container my-1'>
                        <div class='pagination'>";
        for($i=1;$i<=$total_page;$i++){
            if($page == $i){
                $active="active";
            }else{
                $active="";
            }
            $output .="  <a href='' data-id='{$i}' class='btn {$active} btn-default border'>{$i}</a>";
        }
        $output .="</div>
        </div>";
   echo $output;
}else{
    echo "<h3 class='text-center my-4'>Record Not Found</h3>";
}