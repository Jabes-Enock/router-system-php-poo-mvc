<?php

echo '<h1>UserController::create</h1></br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $data['name'] ?></td>
                <td><?= $data['surname'] ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>