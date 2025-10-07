<!-- Q:7 Statement 1: Sunset is the time of day when our sky meets the outer space solar winds.
Statement 2: There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. I love looking at the clouds.
Do the following operations for String Function in single file:
1. Reverse the statement 1.
2. Convert the first character of each statement to uppercase.
3. Display the total occurrences of clouds in statement 2.
4. Replace the color pink with red.
5. Display the total number of words in Statement 2.
6. Fetch the portion of the string “I love looking at the clouds.” and store it in an array.
7. Sort an array of above string.
8. Display the word day in reverse order.
9. Store the string “purple swirls, spinning and twisting” and display only spinning.
10. Add the string “I love rainy days” to statement 2.
11. Remove the word blender from statement 2. -->
<?php
    $state_1 = "Sunset is the time of day when our sky meets the outer space solar winds.";

    $state_2 = "There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. I love looking at the clouds.";

    echo "<h1>Statement 1: </h1>";
    echo "<h2>$state_1</h2>";
    echo "<h1>Statement 2: </h1>";
    echo "<h2>$state_2</h2>";

    $rev_st_1 = strrev($state_1);

    echo "Reversed statement 1: ";
    echo $rev_st_1 . "<br/>";

    $first_st_1 = ucfirst($state_1);
    $first_st_2 = ucfirst($state_2);

    echo "All first char caps statement 1: ";
    echo $first_st_1 . "<br/>";

    echo "All first char caps statement 2: ";
    echo $first_st_2 . "<br/>";

    $cloud_occ = substr_count(strtolower($state_2), "cloud");

    echo "Total occurrences of clouds in statement 2: ";
    echo $cloud_occ . "<br/>";

    $state_2 = str_replace("pink", "red", $state_2);

    echo "Replaced pink with red in statement 2: ";
    echo $state_2 . "<br/>";

    $word_count_2 = str_word_count($state_2);

    echo "Total number of words in statement 2: ";
    echo $word_count_2 . "<br/>";

    preg_match("/I love looking at the clouds./", $state_2, $matches);
    print_r($matches);
    echo "<br/>";

    sort($matches);
    echo "Sorted array of above string: ";
    print_r($matches);
    echo "<br/>";

    $rev_day = strrev("day");
    echo "Word day in reverse order: ";
    echo $rev_day . "<br/>";

    $string_to_store = "purple swirls, spinning and twisting";
    preg_match("/spinning/", $string_to_store, $match_spin);
    echo "Displaying only spinning: ";
    print_r($match_spin);
    echo "<br/>";

    $state_2 .= " I love rainy days.";
    echo "Added string 'I love rainy days' to statement 2: ";
    echo $state_2 . "<br/>";

    $state_2 = str_replace("blender", "", $state_2);
    echo "Removed the word blender from statement 2: ";
    echo $state_2 . "<br/>";
?>