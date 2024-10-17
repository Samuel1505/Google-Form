<?php
$conn = mysgli_connect("localhost","root","contactdb");
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
