<?php
// include once funkar också

// require ger fel för mig idk why
// require_once "../_includes/database-connection.php";
session_start();
$servername = "mysql";
$database = "db_learn";
$username = "db_user";
$password = "db_password";

$dsn = "mysql:host=$servername;dbname=$database";

try {
    $pdo = new PDO($dsn, $username, $password);

    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// // ?>



<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>

    <form action="" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">

        <button type="submit">Register</button>

    </form>

    <?php

    // Todo when form is submitted we want to send sql query
    // to register user (Insert into user table)
    


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get user data from form
        $form_username = $_POST['username'];
        $form_password = $_POST['password'];


        echo $form_username;
        echo $form_password;

        // send to database
        $sql_statement = "INSERT INTO `$database`.`User` (`username`, `password`) VALUES ('$form_username','$form_password')";
        echo $sql_statement;



        //  wrapa i en try{} catch{}
        // try{
    
        $result = $pdo->query($sql_statement);

        // if ok redirect to login page
        header("location : login.php");
        // }
    
        // catch{
        // echo "something went wrong";
        // }
    }

    // echo $_SERVER["REQUEST_METHOD"];
    // var_dump($_POST)
    


    ?>





</body>

</html>