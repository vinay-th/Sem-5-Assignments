<!-- 1. Employee Management (Class & Objects)
Create a class Employee with attributes name, id, salary.
• Create methods to set and get details.
• Create objects for 3 employees and display their details. -->
<?php
    class Employees{
        private $name;
        private $id;
        private $salary;

        public function setDetails($name, $id, $salary){
            $this->name = $name;
            $this->id = $id;
            $this->salary = $salary;
        }

        public function getDetails(){
            echo "Employee name: " . $this->name . "<br/>";
            echo "Employee id: " . $this->id . "<br/>";
            echo "Employee salary: " . $this->salary . "<br/>";

            echo "<br/>";
        }
    }

    $emp1 = new Employees();
    $emp2 = new Employees();
    $emp3 = new Employees();

    $emp1->setDetails("Babu", 101, 50000);
    $emp2->setDetails("Ramesh", 102, 60000);
    $emp3->setDetails("Pako", 103, 55000);

    echo "<h3>Employee Details:</h3>";
    $emp1->getDetails();
    $emp2->getDetails();
    $emp3->getDetails();
?>