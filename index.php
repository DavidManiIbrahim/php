
<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$gender = $_POST["gender"];
// $password = $_POST["password"];
$confirm = $_POST["confirm"];


echo"$firstname <br> $lastname <br>";
echo"$username <br> $email <br>";
echo"$phone <br> $age <br>";
echo" $confirm <br>";
echo$gender



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form</title>
</head>
<body>
    
<form action="./index.php" method="post">
    <label for="Firstname">FirstName:</label>
    <input type="text" name="firstname" ><br>
    <label for="Lastname">LastName:</label>
    <input type="text" name="lastname" ><br>
    <label for="username">UserName:</label>
    <input type="text" name="username" ><br>
    <label for="email">Email:</label>
    <input type="email" name="email" ><br>
    <label for="phone no">Phone No:</label>
    <input type="tel" name="phone" ><br>
    <label for="age">Age:</label>
    <input type="number" name="age" ><br>
    <!-- <label for="password">Password:</label> -->
    <!-- <input type="password" name="password" ><br> -->
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" name="confirm" ><br>
    Gender: <br>
    <input type="radio" name="gender" value="Male" >
    <label for="gender">Male</label> <br>
    <input type="radio" name="gender" value="Female">
    <label for="gender">Female</label><br>
    <input type="submit" name="submit" >
    
</form>
</body>
</html>