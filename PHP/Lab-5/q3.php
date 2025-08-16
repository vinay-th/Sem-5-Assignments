<h1>
    Student Exam Result
</h1>
<hr/>

<form action="" method="post">
    <label for="student_name">Student Name:</label>
    <input type="text" name="student_name" id="student_name" required>
    <br/>
    <label for="eng">English:</label>
    <select name="eng" id="eng">
        <option value="0">Select Marks</option>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <br/>
    <label for="Math">Mathematics:</label>
    <select name="Math" id="Math">
        <option value="0">Select Marks</option>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <br/>
    <label for="sci">Science:</label>
    <select name="sci" id="sci">
        <option value="0">Select Marks</option>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <br/>
    <label for="comp">Computer:</label>
    <select name="comp" id="comp">
        <option value="0">Select Marks</option>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <br/>
    <label for="sst">Social Studies:</label>
    <select name="sst" id="sst">
        <option value="0">Select Marks</option>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <br/>
    <input type="submit" name="submit_result" value="Submit Result">
</form>

<?php
    if (isset($_POST["submit_result"])) {
        $student_name = $_POST["student_name"];
        $eng = $_POST["eng"];
        $math = $_POST["Math"];
        $sci = $_POST["sci"];
        $comp = $_POST["comp"];
        $sst = $_POST["sst"];

        $total_marks = $eng + $math + $sci + $comp + $sst;
        $percentage = $total_marks / 5;

        echo "<h2>Result for: $student_name</h2>";
        echo "<table border=1>";
        echo "<tr><th>Subject</th><th>Marks</th></tr>";
        echo "<tr><td>English</td><td>$eng</td></tr>";
        echo "<tr><td>Mathematics</td><td>$math</td></tr>";
        echo "<tr><td>Science</td><td>$sci</td></tr>";
        echo "<tr><td>Computer</td><td>$comp</td></tr>";
        echo "<tr><td>Social Studies</td><td>$sst</td></tr>";
        echo "<b>";
        echo "<tr><td>Total</td><td>$total_marks</td></tr>";
        echo "<tr><td>Percentage</td><td>$percentage%</td></tr>";
        if ($percentage >= 40) {
            echo "<tr><td>Status</td><td>Passed</td></tr>";
        } else {
            echo "<tr><td>Status</td><td>Failed</td></tr>";
        }
        echo "</b>";
        echo "</table>";
    }
?>