<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q2</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid black;
            padding: 6px;
            text-align: center;
            background-color: #d3d3d3; /* Light dark color for the table cells */
        }
    </style>
</head>
<body>

<?php
echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
      </tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>{$student['name']}</td>";
    echo "<td>{$student['program']}</td>";
    echo "<td>{$student['age']}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
