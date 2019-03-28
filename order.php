<?php
session_start();
$connect = mysqli_connect("localhost","root","","store");
echo $_SESSION['total'];
echo $_SESSION['pname'];
echo $_SESSION['pprice'];


?>