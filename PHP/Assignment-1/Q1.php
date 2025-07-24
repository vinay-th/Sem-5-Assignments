<!-- Q:1 Take 3 constant value: 1 integer and 2 strings, use it in a paragraph. -->
<html>
<head>
    <title>Assignment 1 - Question 1</title>
</head>
<body>
    <?php
        // Define normal variables 
        // $a = 42; // Integer variables
        // $b = "Hello"; // String variables
        // $c = "World"; // Another string variables

        // Define constants with the 'const' keyword
        const val = 69; // Integer constant
        const STR1 = "Hello"; // String constant 1
        const STR2 = "World! "; // String constant 2
    ?>
    <h1><?php echo STR1 . " " . STR2 . " " . val; ?></h1>
</body>
</html>