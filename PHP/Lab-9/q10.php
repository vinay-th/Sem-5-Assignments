<!-- Remove Extra Spaces: Input is : P H P is awes ome!
Output: PHP is awesome! -->
<?php
    $input = "P H P is awes ome!";
    $output = preg_replace('/\s+/', ' ', $input);
    $output = trim($output);
    echo "Input: $input<br/>";
    echo "Output: $output";
?>