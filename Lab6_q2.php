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
        array("name" => "John Doe", "program" => "Computer Science", "age" => 21),
        array("name" => "Jane Smith", "program" => "Information Technology", "age" => 22),
        array("name" => "Alice Johnson", "program" => "Software Engineering", "age" => 20),
        array("name" => "Bob Brown", "program" => "Data Science", "age" => 23)
    );
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student["name"]); ?></td>
                <td><?php echo htmlspecialchars($student["program"]); ?></td>
                <td><?php echo htmlspecialchars($student["age"]); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
