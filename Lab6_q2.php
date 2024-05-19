<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q2</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
// Associative array of students
$students = array(
    "S1001" => array("name" => "Alice", "email" => "alice@example.com"),
    "S1002" => array("name" => "Bob", "email" => "bob@example.com"),
    "S1003" => array("name" => "Charlie", "email" => "charlie@example.com")
);

// Display the content of the array in an HTML table
echo "<table>";
echo "<tr><th>Matric Number</th><th>Name</th><th>Email</th></tr>";

foreach ($students as $matricNumber => $details) {
    echo "<tr>";
    echo "<td>$matricNumber</td>";
    echo "<td>" . $details['name'] . "</td>";
    echo "<td>" . $details['email'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
