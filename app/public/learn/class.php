<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasser</title>
</head>
<body>
    
<h1>Player class</h1>

<?php

class Player{

    private string $name;

    private int $strengthLevel;


    public function __construct ($name, $strengthLevel){
        $this->name = $name;
        $this->strengthLevel = $strengthLevel;
    }

    public function punch(){
        echo "POAAW! $this->name is punching with $this-> strenghtLevel!";
    }
}

?>

</body>
</html>