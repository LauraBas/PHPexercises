<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Key Value</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php

$users = [
        [
            'Name' => 'Paula',
            'Email' => 'paula@gmail.com',
            'City' => 'Barcelona',
        ],
        [
            'Name' => 'Pedro',
            'Email' => 'pedro@gmail.com',
            'City' => 'Madrid',
        ],
        [
            'Name' => 'Ana',
            'Email' => 'ana@gmail.com',
            'City' => 'Sevilla',
        ]
];
echo '<table class="table table-striped">';
foreach ( $users as $row ) {
        echo '<tr>';
        foreach ( $row as $cell ) {
                echo "<td>$cell</td>";
        }
        echo '</tr>';
}
echo '</table>';
 ?>
    
</body>
</html>
