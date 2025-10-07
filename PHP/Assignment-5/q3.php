<!DOCTYPE html>
<html>
<head>
    <title>The World of Fruit</title>
    <style>
        body {
            background-color: #fff8b3;
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            text-align: center;
            color: #000;
        }
        form {
            width: 400px;
            margin: auto;
            background-color: #fff89c;
            padding: 20px;
            border-radius: 10px;
        }
        table {
            margin: auto;
            text-align: left;
        }
        input[type="text"], select {
            width: 100%;
            padding: 5px;
        }
        .submit-btn {
            display: block;
            margin: 10px auto;
            padding: 8px 20px;
        }
        .records {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        .records th, .records td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>

<h1>The World of Fruit</h1>
<h2>Fruit Survey</h2>

<form method="post" action="">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" required></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td>How many pieces of fruit do you eat per day?</td>
            <td>
                <input type="radio" name="pieces" value="0" required> 0<br>
                <input type="radio" name="pieces" value="1"> 1<br>
                <input type="radio" name="pieces" value="2"> 2<br>
                <input type="radio" name="pieces" value="More than 2"> More than 2
            </td>
        </tr>
        <tr>
            <td>My favourite fruit:</td>
            <td>
                <select name="fruit" size="4">
                    <option value="Apple">Apple</option>
                    <option value="Banana">Banana</option>
                    <option value="Plum">Plum</option>
                    <option value="Pomegranate">Pomegranate</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Would you like a brochure?</td>
            <td><input type="checkbox" name="brochure" value="Yes"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
                <input type="submit" name="submit" value="Submit" class="submit-btn">
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pieces = $_POST['pieces'];
    $fruit = $_POST['fruit'];
    $brochure = isset($_POST['brochure']) ? 'Yes' : 'No';

    
    if (!isset($_COOKIE['survey_data'])) {
        $data = [];
    } else {
        $data = json_decode($_COOKIE['survey_data'], true);
    }

    $data[] = [
        'name' => $name,
        'address' => $address,
        'email' => $email,
        'pieces' => $pieces,
        'fruit' => $fruit,
        'brochure' => $brochure
    ];

    setcookie('survey_data', json_encode($data), time() + (86400 * 30), "/");

    
    echo "<h3 style='text-align:center;'>Saved Records</h3>";
    echo "<table class='records'>";
    echo "<tr><th>Name</th><th>Address</th><th>Email</th><th>Fruit/day</th><th>Favourite Fruit</th><th>Brochure</th></tr>";
    foreach ($data as $record) {
        echo "<tr>
                <td>{$record['name']}</td>
                <td>{$record['address']}</td>
                <td>{$record['email']}</td>
                <td>{$record['pieces']}</td>
                <td>{$record['fruit']}</td>
                <td>{$record['brochure']}</td>
              </tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
