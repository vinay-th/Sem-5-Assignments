<!-- Q:5 Make a Webpage with yellow background which displays hobbies of yours
using heredoc command. -->
<html>
<head>
    <title>Assignment 1 - Question 5</title>
    <style>
        body {
            background-color: yellow; /* Set background color to yellow */
        }
    </style>
</head>
<body>
    <?php
        $hobbies = <<<TEXT
        <h1>My Hobbies</h1>
        <ul>
            <li>Football</li>
            <li>Coding</li>
            <li>Gaming</li>
            <li>Reading</li>
            <li>Content Consuming</li>
        </ul>
        TEXT;

        echo $hobbies;
    ?>
</body>
</html>