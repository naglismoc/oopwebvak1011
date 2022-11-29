<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OOP</h1>

    <?php 
    include "./Student.php";
    include "./Math.php";
    include "./Bardakas.php";

        $studentas = new Student("Jonas","Vaisgantas");
        print_r($studentas);
        $studentas1 = new Student("Algis","Greitas");
        print_r($studentas1);
        $studentas2 = new Student(null,null,16, null);
        print_r($studentas2);
        $studentas3 = new Student();
        print_r($studentas3);
        $studentas4 = new Student("Jurgis","Ališauskas", 43, false);
        print_r($studentas4);

        $students = [$studentas, $studentas1, $studentas2, $studentas3, $studentas4];
        echo "<hr>";
        echo $studentas4->age;
        echo "<br>";

        foreach ($students as $student) {
            // echo $student->name . ", ";
            echo $student->getName() . ", ";
        }
        echo "<br>";

        print_r($studentas);
        // $studentas->name = "Juozas";
        $studentas->setName("Juozas");
        $studentas->age = 160;
        $studentas->gender = false;


        echo "<br>";
        print_r($studentas);
        echo "<br>";
        echo "<br>";

        echo Math::square(400);
    

        $studentas4->introduction();
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $nonsence = new Bardakas();
        print_r($nonsence);
        echo "<br>";
        $nonsence->namuDarbai = "Perskaityti dievu miska";
        $nonsence->draugoGimtadienis = "Kazkada vasara, paklausti jo zmonos.";
        print_r($nonsence);

    ?>
</body>
</html>