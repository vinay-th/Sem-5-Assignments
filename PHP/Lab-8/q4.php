<!-- 4. Student Grade System (Inheritance)
Create a class Student with attributes name, rollNo, and marks.
• Create a subclass Result that calculates grade (A, B, C, Fail) using marks.
• Display details and grade. -->
<?php
    class Student{
        protected $name;
        protected $roll_no;
        protected $marks;

        public function __construct($name, $roll_no, $marks){
            $this->name = $name;
            $this->roll_no = $roll_no;
            $this->marks = $marks;
        }

        public function showDetails(){
            echo "Name: " . $this->name . "<br/>";
            echo "Roll No: " . $this->roll_no . "<br/>";
            echo "Marks: " . $this->marks . "<br/>";
        }
    }

    class Result extends Student{
        public function calculateGrade(){
            if($this->marks >= 85){
                return "A";
            } elseif ($this->marks >= 70) {
                return "B";
            } elseif ($this->marks >= 50) {
                return "C";
            } else {
                return "Fail";
            }
        }
        public function showResult() {
            $this->showDetails();
            echo "Grade: " . $this->calculateGrade() . "<br/><br/>";
        }
    }   

    $s1 = new Result("Pakya", 101, 92);
    $s2 = new Result("Charan", 102, 76);
    $s3 = new Result("Muko", 103, 48);

    echo "<h3>--- Student Results ---</h3>";
    $s1->showResult();
    $s2->showResult();
    $s3->showResult();
?>