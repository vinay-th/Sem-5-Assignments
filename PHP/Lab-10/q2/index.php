<!-- 2. Session Counter
• Create a program that counts how many times a user has refreshed a page using session
variables.
• Display the count value each time the page loads. -->
<?php
    session_start();
    
    if(isset($_SESSION["count"])){
        $_SESSION["count"] += 1;
    }else{
        $_SESSION["count"] = 1;
    }

    if(isset($_GET['kill'])){
        session_destroy();
        header("Location: .."); 
        exit();
    }

    echo "<h1>Your page has been refreshed " . $_SESSION["count"] . " times</h1>";
?>

<html>
    <body>
        <form method="GET">
            <button type="submit" name="kill">Kill Session</button>
        </form>
    </body>
</html>