<?php
session_start();
include('connection.php');
$eventno =$_POST['eventno'];
$id = $_SESSION['id'];
$sql = "SELECT `".$eventno."` FROM registered_events WHERE id=".$id."";
echo $sql;
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$val = $row[$eventno];
if($val == 0){
    $sql = "UPDATE registered_events SET `".$eventno."`='1' WHERE id=$id";
    echo $sql;
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo 'error';   
    }
}

else{
    echo "<h3>database error.Kindly contact Web Admin</h3>";
}
?>