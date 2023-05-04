<?php

declare(strict_types=1);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasser</title>
</head>

<body>

    <!-- <h1>Player class</h1> -->

    <?php


    // class Player{
    
    //     private string $name;
    
    //     private int $strengthLevel;
    

    //     public function __construct ($name, $strengthLevel){
    //         $this->name = $name;
    //         $this->strengthLevel = $strengthLevel;
    //     }
    
    //     public function punch(){
    //         echo "POAAW! $this->name is punching with $this-> strenghtLevel!";
    //     }
    // }
    
    // echo "<h2>Plant klass</h2>";
    
    // class Plant
    // {
    //     private string $color;
    //     private float $lenght;
    //     private float $mass;
    //     private string $scent;
    //     private float $sugarLevel;
    

    //     public function __construct(string $color, float $lenght, float $mass, string $scent)
    //     {
    //         $this->color = $color;
    //         $this->lenght = $lenght;
    //         $this->mass = $mass;
    //         $this->scent = $scent;
    //         $this->sugarLevel = 0.0;
    //         echo "A plant has been born! <br>";
    //     }
    
    //     public function photosynthesis(float $sunlight)
    //     {
    //         // omvanldar solljus till energi
    //         echo "Converting sunlight to energy!<br>";
    //         $this->sugarLevel += $sunlight * 0.01;
    //         echo "Sugarlevel is $this->sugarLevel <br>";
    //     }
    
    //     public function respirate(float $oxygen)
    //     {
    //         echo "Respiration started, current lenght is $this->lenght and current mass is $this->mass <br>";
    //         $this->lenght += $oxygen * 0.05;
    //         $this->mass += $oxygen * 0.05;
    //         echo "Respiration finished, current lenght is $this->lenght and current mass is $this->mass<br>";
    //     }
    

    // }
    // $kaktus = new Plant("green", 120.12, 3.0, "cactai");
    

    // $kaktus->photosynthesis(200);
    
    // $kaktus->respirate(50);
    
    // var_dump($kaktus);
    

    echo "<h2>Vehicle</h2>";


    class Vehicle
    {
        private int $amountOfWheels;
        private int $amountOfPassangers;
        private string $brand;
        private string $color;
        private float $topSpeed;
        private float $horsePower;


        public function __construct(int $amountOfWheels, int $amountOfPassangers, string $brand, string $color, float $topSpeed, float $horsePower)
        {
            $this->amountOfWheels = $amountOfWheels;
            $this->amountOfPassangers = $amountOfPassangers;
            $this->brand = $brand;
            $this->color = $color;
            $this->topSpeed = $topSpeed;
            $this->horsePower = $horsePower;
            echo "A new vechicle was made <br>";
        }

        public function print()
        {
            foreach ($this as $key => $value) {

                // måste vara utanför, nu skapas typ 20 olika tables
                echo "<table>
                <tr>
                    <th>
                    $key
                    </th>
                </tr>
                <tr>
                    <td>
                    $value
                    </td>
                </tr>
                </table>";

                // echo "The " . $key . " is " . $value . "<br>";
            }
        }
    }



    $car = new Vehicle(4, 5, "Volvo", "black", 210, 300);

    $car->print();
    echo "<br>";

    $bike = new Vehicle(2, 1, "Crecent", "white", 30, 50);

    $bike->print();



    echo "<h2>Arv</h2>";


    // uppgift
    class shape
    {

    }

    class rectangle extends shape
    {

    }
    class triangle extends shape
    {

    }
    class circle extends shape{
        
    }


    ?>

</body>

</html>