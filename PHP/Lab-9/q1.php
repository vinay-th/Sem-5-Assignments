<!-- 1. Basic Pattern Matching Validation:
Defintion: Checks if "php" exists in the text (i makes it case-insensitive) -->

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $text = $_POST['text'];
        if(preg_match("/php/i", $text)){
            echo "'php' found in the text.";
        } else{
            echo "'php' not found in the text.";
        }
    }
?>