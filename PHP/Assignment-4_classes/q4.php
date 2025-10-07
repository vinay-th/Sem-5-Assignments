<!-- 4. Inheritance
Create a class Person with attributes name and age, and a method display().
• Create a subclass Student that adds rollNo and overrides display() to include roll number.
• Create an object of Student and show details -->
<?php
    class Person{
        protected $name;
        protected $age;

        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        function display(){
            echo "Name: " . $this->name . "<br/>";
            echo "Age: " . $this->age . "<br/>";
        }
    }

    class Student extends Person{
        private $rollNo;

        function __construct($name, $age, $rollNo){
            parent::__construct($name, $age);
            $this->rollNo = $rollNo;
        }

        function display(){
            parent::display();

            echo "Roll No: " . $this->rollNo . "<br/>";
        }
    }

    $student = new Student("Vinay", 20, "111");
    $student->display();
?>