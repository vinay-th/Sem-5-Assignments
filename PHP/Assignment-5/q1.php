<body>
    <h2 style="text-align:center;">Customer Search</h2>
    <form action="" method="post">
        <center>
            <label for="keyword">Keyword: </label>
            <input type="text" name="keyword">
            <button name="search">Search</button>
        </center>
    </form>
</body>
<?php
    const data = array(
    array("CustomerID" => "C001", "Name" => "Vinay Thakor", "Email" => "vinay@example.com", "Budget" => 100000, "Used" => 20000),
    array("CustomerID" => "C002", "Name" => "Amit Patel", "Email" => "amit@example.com", "Budget" => 150000, "Used" => 50000),
    array("CustomerID" => "C003", "Name" => "Sneha Shah", "Email" => "sneha@example.com", "Budget" => 200000, "Used" => 100000),
    array("CustomerID" => "C004", "Name" => "Riya Mehta", "Email" => "riya@example.com", "Budget" => 120000, "Used" => 30000),
    array("CustomerID" => "C005", "Name" => "Jay Parmar", "Email" => "jay@example.com", "Budget" => 180000, "Used" => 60000),
    array("CustomerID" => "C006", "Name" => "Dhruv Desai", "Email" => "dhruv@example.com", "Budget" => 250000, "Used" => 80000),
    array("CustomerID" => "C007", "Name" => "Neha Joshi", "Email" => "neha@example.com", "Budget" => 130000, "Used" => 45000),
    array("CustomerID" => "C008", "Name" => "Karan Shah", "Email" => "karan@example.com", "Budget" => 220000, "Used" => 70000),
    array("CustomerID" => "C009", "Name" => "Mansi Patel", "Email" => "mansi@example.com", "Budget" => 90000, "Used" => 30000),
    array("CustomerID" => "C010", "Name" => "Harshil Rana", "Email" => "harshil@example.com", "Budget" => 175000, "Used" => 90000),
    array("CustomerID" => "C011", "Name" => "Pooja Trivedi", "Email" => "pooja@example.com", "Budget" => 110000, "Used" => 25000),
    array("CustomerID" => "C012", "Name" => "Yash Sharma", "Email" => "yash@example.com", "Budget" => 160000, "Used" => 60000),
    array("CustomerID" => "C013", "Name" => "Kruti Patel", "Email" => "kruti@example.com", "Budget" => 210000, "Used" => 100000),
    array("CustomerID" => "C014", "Name" => "Rohan Joshi", "Email" => "rohan@example.com", "Budget" => 140000, "Used" => 40000),
    array("CustomerID" => "C015", "Name" => "Anjali Desai", "Email" => "anjali@example.com", "Budget" => 190000, "Used" => 85000)
);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["search"])){
            $key = $_POST["keyword"];
            $result = array();
            foreach(data as $customer){
                if(stripos($customer["Name"], $key) !== false || stripos($customer["Email"], $key) !== false || stripos($customer["CustomerID"], $key) !== false){
                    $result[] = $customer;
                }
            }
            if(count($result) > 0){
                echo "<table border='1' style='width:80%; margin:auto; text-align:center;'>";
                echo "<tr><th>CustomerID</th><th>Name</th><th>Email</th><th>Budget</th><th>Used</th></tr>";
                foreach($result as $res){
                    echo "<tr>";
                    echo "<td>".$res["CustomerID"]."</td>";
                    echo "<td>".$res["Name"]."</td>";
                    echo "<td>".$res["Email"]."</td>";
                    echo "<td>".$res["Budget"]."</td>";
                    echo "<td>".$res["Used"]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<h3 style='text-align:center; color:red;'>No matching records found.</h3>";
            }
        }
    }
?>