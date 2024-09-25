<?php

$host = "localhost";
$user = "php_app";
$password = "1234";
$database = "sql_hr";

$conn = new mysqli($host, $user, $password, $database);

if($conn ->connect_error){
    die("Connection failed" . $conn->connection_error);
}
echo"Connection successful";

$sql = "SELECT e.employee_id, e.first_name, e.last_name, e.job_title, m.first_name AS manager_first_name 
FROM employees e JOIN employees m 
ON e.reports_to = m.employee_id;";



$result = $conn->query($sql);

// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
    <h1>Employees</h1>
    

    <?php
        if($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                // var_dump($row);
                //izvadit katru klientu ar li elementu
                echo "<li>Employee ID: " . $row["employee_id"] . " - Name: " . $row["first_name"] . " " . 
                $row["last_name"] . " - Job Title: " . $row["job_title"] . 
                " - Reports to: ". $row["manager_first_name"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo 'No ucstomers found ';
        }
    ?>

<form action="insert.php" method="post">
        <input type="text" name="Form">
</form>
</body>
</html>