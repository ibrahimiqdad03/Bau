<?php
$servername='localhost';
$id = 'id';
$password = 'password';

$conn = new mysqli('localhost', 'root', '', 'test1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id = $_POST['id'];
    $password = $_POST['password'];

   
    $authenticated = true; 

    if ($authenticated) {
        
        header("Location:bau.html");
        exit(); 
    } else {
        
    }
}

?>