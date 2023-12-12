<?php
$conn = mysqli_connect('localhost','root','');
$link = mysqli_select_db($conn,"web_qr_databases") or die(mysqli_error());
?>