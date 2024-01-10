<?php

class Person {

    public $name;
    public $surname;
    public $age;

    public static $counter = 0;

    public function __construct($_name, $_surname, $_age) {
        $this -> name = $_name;
        $this -> surname = $_surname;
        $this -> age = $_age;

        self::$counter++;
    }

    public function sayHello() {
        echo "Ciao a tutti mi chiamo $this->name $this->surname ed ho $this->age ";
    }

};

// $personOne = new Person('Claudio', 'Rossi', 25);
// $personOne -> sayHello();

class Student extends Person {
    
    public $best;
    public $worse;

    public function __construct($_name, $_surname, $_age, $_best, $_worse) {
        parent::__construct($_name, $_surname, $_age);
        $this -> best = $_best;
        $this -> worse = $_worse;
    }

    public function sayHelloStudent() {
        echo "Sono lo studente $this->name $this->surname, ho $this->age, la mia materia preferità e $this->best mentre la peggiore è $this->worse";
    }

}

$studentOne = new Student('Matteo', 'Monaci', 28, 'Storia', 'Economia');
// $studentOne -> sayHelloStudent();

class Teacher extends Person {

    public $city;
    public $subject;

    public function __construct($_name, $_surname, $_age, $_city, $_subject) {
        parent::__construct($_name, $_surname, $_age);
        $this->city = $_city;
        $this->subject = $_subject;
    }

    public function sayHelloTeacher() {
        echo "Ciao a tutti, mi chiamo $this->name $this->surname, ho $this->age anni, vengo da $this->city ed insegno $this->subject";
    }

}

$teacherOne = new Teacher('Franco', 'Ghirri', 33, 'Milano', 'Storia');
// $teacherOne -> sayHelloTeacher();
echo "sono presenti " . Teacher::$counter . " tra insegnandi e studenti";