<!-- Display a webpage which stores the following data and sort it:
HR(Girish,neha,puja)
Account(asha,rehan,tina)
Sales(Twisha, keyuri,rohit). -->
<?php
$departments = array(
    "HR" => array("Girish", "Neha", "Puja"),
    "Account" => array("Asha", "Rehan", "Tina"),
    "Sales" => array("Twisha", "Keyuri", "Rohit")
);

foreach($departments as $dept_name => $dept){
    sort($dept);
    echo "<h3>Department: $dept_name</h3>";
    foreach($dept as $emp){
        echo "$emp<br>";
    }
}
?>