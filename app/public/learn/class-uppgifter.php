<?php

declare(strict_types=1);

use car as GlobalCar;

?>


<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class uppgift</title>
    <style>
        body {
            font-family: monospace
        }
    </style>
</head>

<body>

    <h1>Klasser uppgifter</h1>

    <?php

    // 1.
    class Person
    {
        private string $name;
        private int $age;
        private string $gender;

        public function __construct(string $name, int $age, string $gender)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function introduce()
        {
            echo "Hello! $this->name is my name. I'm $this->age years old and i am a $this->gender.";
        }
    }

    class Student extends Person
    {
        private string $gradeLevel;

        public function __construct(string $name, int $age, string $gender, string $gradeLevel)
        {
            parent::__construct($name, $age, $gender);
            $this->gradeLevel = $gradeLevel;
        }

        public function introduce()
        {
            parent::introduce();
            echo " My grade is $this->gradeLevel";
        }
    }

    class Teacher extends Person
    {
        private float $yearsOfExperience;
        private array $subjects;

        public function __construct(string $name, int $age, string $gender, float $yearsOfExperience, array $subjects)
        {
            parent::__construct($name, $age, $gender);
            $this->yearsOfExperience = $yearsOfExperience;
            $this->subjects = $subjects;
        }

        public function introduce()
        {
            parent::introduce();

            // foreach ($this->subjects as $value) {
            //     echo $value . '<br>';
            // }
    
            echo " My years of experience is $this->yearsOfExperience and i teach " . implode(", ", $this->subjects);
        }
    }

    $jonas = new Person("Jonas", 21, "male");
    $jonas->introduce();
    echo "<br>";
    $aStudent = new Student("Elliot", 22, "male", "A");
    $aStudent->introduce();
    echo "<br>";
    $aTeacher = new Teacher("Henry", 30, "male", 4, ["Programming", "Stand-up"]);
    $aTeacher->introduce();
    echo "<hr>";


    // -----------------------------------------------------------------------------------------------------
    // 2.
    interface Animal
    {
        public function eat();
        public function move();
    }

    class dog implements Animal
    {

        private string $name;


        public function __construct($name)
        {
            $this->name = $name;
        }


        public function eat()
        {
            echo "$this->name is eating";
        }
        public function move()
        {
            echo "dog is moving";
        }
        public function bark()
        {
            echo "dog is barking";
        }
        public function fetch()
        {
            echo "dog is fetching";
        }
    }
    class bird implements Animal
    {
        public function eat()
        {
            echo "bird is eating";
        }
        public function move()
        {
            echo "bird is moving";
        }
        public function fly()
        {
            echo "bird is flying";
        }
        public function chirp()
        {
            echo "bird is chirping";
        }
    }

    $leia = new dog("leia");

    $leia->eat();
    echo "<br>";
    $leia->move();
    echo "<br>";
    $leia->bark();
    echo "<br>";
    $leia->fetch();



    // -----------------------------------------------------------------------------------------------------
    // 3.
    
    interface Vehicle
    {
        public function start();
        public function stop();
    }

    class Car implements Vehicle
    {
        public function start()
        {
            echo "working";
        }
        public function stop()
        {
        }
        public function drive()
        {
        }
        public function park()
        {
        }
    }



















    ?>

</body>

</html>