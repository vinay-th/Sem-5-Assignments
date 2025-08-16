<!-- 9 Create a form with username and id fields using the POST method.
On submission, show:
• "Welcome [username]" if the id is blank display appropriate message.
• "Invalid login" otherwise. -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["in1"];
        $id = $_POST["in2"];

        if (empty($id)) {
            echo "ID is required.";
        } else {
            echo "Welcome $username";
        }
    } else {
    echo "Invalid login";
    }
?>