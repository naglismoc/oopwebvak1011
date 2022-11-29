<?php

class Student /*extends Human*/{
private $name;
public $surname;
public $age;
public $gender;
/*
gyvenamasis adresas
telefono numeris
el. pastas
banko saskaita
masinos reg nr

*/

/*
classes
grades
attendance reports
bureliai
olimpiados
biuleteniai
finansavimas

*/

function __construct($name = null, $surname = null,$age = null, $gender = null){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->gender = $gender;
}

public function getName()
{
    return $this->name;
}

public function setName($name)
{
    $this->name = $name;
}

public function introduction()
{
    echo "Sveiki as esu ".$this->name . " " . $this->surname. ".";
}

}
?>