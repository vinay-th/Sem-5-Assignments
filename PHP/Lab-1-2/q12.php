<!-- 12 Create an HTML form that collects:
• Name
• Age
• Gender (radio buttons)
• Hobbies (checkboxes)
Use the POST method to display the submitted data in a formatted table using PHP -->

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>

    <label>Hobbies:</label>
    <input type="checkbox" id="hobby1" name="hobbies[]" value="reading">
    <label for="hobby1">Reading</label>
    <input type="checkbox" id="hobby2" name="hobbies[]" value="traveling">
    <label for="hobby2">Traveling</label>
    <input type="checkbox" id="hobby3" name="hobbies[]" value="cooking">
    <label for="hobby3">Cooking</label><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : [];

    echo "<h2>Submitted Data:</h2>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Hobbies</th>
            </tr>
            <tr>
                <td>$name</td>
                <td>$age</td>
                <td>$gender</td>
                <td>" . implode(", ", $hobbies) . "</td>
            </tr>
          </table>";
}
?>