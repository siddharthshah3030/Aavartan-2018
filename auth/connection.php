<?php
$link = mysqli_connect("localhost", "aavartan_ram", "ram123", "aavartan_18");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>