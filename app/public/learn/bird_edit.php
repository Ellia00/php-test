<?php
declare(strict_types=1);
include "_includes/global-functions.php";
include "_includes/database-connection.php";
$title = "Edit birbs";
$row = null;

// förbered variabler som används i formuläret
$bird_name = "";


// hantera POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "post was sent";
    // global array $POST innehåller olika fält som finns i formuläret
    print_r2($_POST);

    $bird_name = trim($_POST['bird_name']);
    $id = isset($_POST['id']) ? $_POST['id'] : 0;

    // kontrollera att minst 2 tecken finns i fältet för bird_name

    if (strlen($bird_name) >= 2) {

        // spara till databasen

        $sql = "UPDATE `bird` SET `bird_name` = '$bird_name' WHERE `bird`.`id` = $id";
        print_r2($sql);

        // använd databaskopplingen för att spara till tabellen i databasen
        $result = $pdo->exec($sql);

        echo "<br>Birb was posted";

        // om POSTEN uppdaterats visa sidan bird.php
        if ($result) {
            header('Location: bird.php');
        }
    }

}

// $row = null;
// för att redigera en fågel andvänds en GET request där id framgår ex id=2

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $id = isset($_GET['id']) ? $_GET['id'] : 0;


    // visa eventuella fåglar som finns i tabellen
    $sql = "SELECT * FROM bird WHERE id=$id";

    // använd databaskopplingen för att hämta datan
    $result = $pdo->prepare($sql);
    $result->execute();



    // om det finns ett resultat från databasanropet sparas det i variablen $row
    $row = $result->fetch();

    // kontrollera att det finns en POST som gav resultat
    if ($row) {
        print_r2($row);

        $bird_name = $row['bird_name'];

    }
}



?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <?php include "_includes/header.php"; ?>

    <h1>
        <?= $title ?>
    </h1>

    <!-- visa formulär om det finns ett fågelnamn som ska redigeras -->
    <?php
    if ($row) {

        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

            <p>
                <label for="bird_name">Birb:</label>
                <input type="text" name="bird_name" id="bird_name" value="<?= $bird_name ?>" required minlength="2"
                    maxlength="25">
                <!-- skicka med fågelns id som finns sparad i databasen -  använd ett dolt inputfält -->
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
            </p>
            <p>
                <input type="submit" value="Edit birb">
            </p>
            <input type="reset" value="Kill birb">

        </form>


        <?php
    }
    ?>

    <?php include "_includes/footer.php"; ?>



</body>

</html>