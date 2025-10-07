<form action="" method="post">
    <h1>
        Register Here!
    </h1>
    <h4>Fill in your name and email address, then click on <b>Submit</b> to register.</h4>
    <table>
        <tr>
            <td>
                <label for="name">Name: </label>
            </td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="name">Email: </label>
            </td>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];

        if(!isset($_COOKIE["data"])){
            $_COOKIE["data"] = array($name => $email);
            setcookie("data", json_encode($_COOKIE["data"]), time() + (86400 * 30), "/");
        } else {
            $data = json_decode($_COOKIE["data"], true);
            $data[$name] = $email;
            $_COOKIE["data"] = $data;
            setcookie("data", json_encode($_COOKIE["data"]), time() + (86400 * 30), "/");
        }

        echo "<h3>Registered Users:</h3>";
        echo "<table border='1' style='width:50%; text-align:center;'>";
        echo "<tr><th>Name</th><th>Email</th></tr>";
        foreach($_COOKIE["data"] as $n => $e){
            echo "<tr>";
            echo "<td>".$n."</td>";
            echo "<td>".$e."</td>";
            echo "</tr>";
        }
    }
?>