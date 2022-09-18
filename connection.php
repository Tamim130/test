<?php

$con=mysqli_connect("localhost","root","","poripoint");
if(mysqli_connect_error()){
    echo"<script>alert('Can not connect to the database');</script>";
    exit();
}

?>