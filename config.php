<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "login_form";

$conn = mysqli_connect("$server_name","$username","$password","$database_name");

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}

if(isset($_POST['save'])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    // $password = $_POST["password"];
    $confirm = $_POST["confirm"];

    $sql = "INSERT INTO login (firstname,lastname,username,age,gender,email,confirm)
    VALUES ('$firstname','$lastname','$username','$email','$age','$phone','$gender','$confirm')";

    if(mysqli_query($conn, $sql)){
        echo"New Details Inserted Successfully!";
    }else{
        echo"Error " . mysqli_error($conn);
    }

    mysqli_close($conn);




}







?>