<?php
$scon = mysqli_connect("localhost","root","","rohitpublicschool");
$conn = new mysqli("localhost","root","","rohitpublicschool");
if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
} else {
   // echo "Successfully Connected";
}