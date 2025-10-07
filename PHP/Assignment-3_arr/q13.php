<?php
$movies = array(
    array("Movie Title" => "Pink Panther", "Category" => "Comedy"),
    array("Movie Title" => "John English", "Category" => "Comedy"),
    array("Movie Title" => "Die Hard", "Category" => "Action"),
    array("Movie Title" => "Expendables", "Category" => "Action"),
    array("Movie Title" => "The Lord of the Rings", "Category" => "Epic"),
    array("Movie Title" => "Romeo and Juliet", "Category" => "Romance"),
    array("Movie Title" => "See no evil hear no evil", "Category" => "Comedy")
);

echo "<h3>Movie List</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Movie Title</th><th>Category</th></tr>";

foreach ($movies as $movie) {
    echo "<tr><td>" . $movie["Movie Title"] . "</td><td>" . $movie["Category"] . "</td></tr>";
}

echo "</table><br>";

$totalMovies = count($movies);
echo "<b>Total number of movies:</b> " . $totalMovies;
?>
