<!-- 8. College Management (Final Keyword)
Create a base class Department with method displayDept().
• Use final keyword on method to prevent overriding.
• Create subclass CSEDepartment and attempt overriding (should show restriction).
• Demonstrate usage. -->
<?php
    class Department {
        public final function displayDept() {
            echo "This is the Department of Studies.<br/>";
        }
    }

    class CSEDepartment extends Department {
        // Error: Cannot override final method
        // public function displayDept() {
        //     echo "This is the Computer Science and Engineering Department.<br/>";
        // }
    }

    $dept = new Department();
    $dept->displayDept();

    $cseDept = new CSEDepartment();
    $cseDept->displayDept(); 
?>