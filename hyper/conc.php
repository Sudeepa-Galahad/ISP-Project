<?php
include 'config.php';

$connection = OpenCon();

echo"Connected Successfully";

CloseCon($connection);

?>