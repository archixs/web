<?php

$host = "localhost";
$user = "php_app";
$password = "1234";
$database = "sql_store";

$conn = new mysqli($host, $user, $password, $database);

if($conn ->connect_error){
    die("Connection failed" . $cibb-connection_error);
}
echo"COnnection successful";

$sql = "SELECT customer_id, first_name, last_name from customers";

$result = $conn->query($sql);

var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1>Customers</h1>
    

    <?php
        if($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                // var_dump($row);
                //izvadit katru klientu ar li elementu
                echo "<li>Customer ID: " . $row["customer_id"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo 'No ucstomers found ';
        }
    ?>
</body>
</html>