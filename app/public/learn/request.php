<?php

declare(strict_types=1);

include "_includes/global-functions.php";

$title = "Request";

// kontrollera post request;

print_r2($_POST);
print_r2($_SERVER["REQUEST_METHOD"]);


// deklarera variabler som kan visa ett värde i olika formulärfält

$first_name = "Ellot";
$country = "";
$message = "";
$mail = "";
$condition = "";
// om en post request har gjorts ändra variablers värden


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // kolla first_name
    $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
    $first_name = trim($first_name);
    // kolla country
    $country = isset($_POST["country"]) ? $_POST["country"] : "";
    // kolla texarea
    $message = isset($_POST["message"]) ? $_POST["message"] : "";
    $message = htmlspecialchars($message);

    $mail = isset($_POST["email"]) ? $_POST["email"] : "";
    
    $condition = isset($_POST["condition"]) ? $_POST["condition"] : "";

}





?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        * {
            font-family: monospace;
        }
    </style>
</head>

<body>
    <?php
    include "_includes/header.php";
    ?>

    <h1><?= $title ?></h1>
    <a href="<?= $_SERVER["PHP_SELF"] ?>">Reload</a>


    <!-- ett förmulär med olika fält -->
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

        <p>
            Förnamn:
            <input type="text" name="first_name" value="<?= $first_name ?>">
        </p>

        <p>
            Ditt namn:
            <select name="country" id="">
                <option value="sweden" <?= $country === "sweden" ? "selected" : "" ?>>Sweden</option>
                <option value="norway" <?= $country === "norway" ? "selected" : "" ?>>Norway</option>
                <option value="denmark" <?= $country === "denmark" ? "selected" : "" ?>>Denmark</option>
            </select>
        </p>
        <p>
            Tankar om <b>universum:</b> <br>
            <textarea name="message" id="" cols="30" rows="10"><?= $message ?></textarea>
        </p>

        <!-- uppgift : skapa följande fält, email, condition -->

        <p>
            <input type="email" name="email" id="" value="<?= $mail ?>">
        </p>

        
        <p>
            <input type="checkbox" name="condition" id="" value="1"<?= $condition === "1" ? "checked" : "" ?> >Checka
        </p>


        <p>
            <input type="submit" value="Skicka">
        </p>


        <?php
        // phpinfo();
        ?>


    </form>






    <?php
    include "_includes/footer.php";
    ?>



</body>

</html>