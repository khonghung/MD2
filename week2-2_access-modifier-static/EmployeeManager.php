<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>STT</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Address</td>
        <td>Role</td>
        <td></td>
    </tr>
    <?php foreach ($employees as $key => $employee): ?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><?php echo $employee->firstName ?></td>
        <td><?php echo $employee->lastName ?></td>
        <td><?php echo $employee->address ?></td>
        <td><?php echo $employee->role ?></td>
        <td><a href="views/edit.php?index=<?php echo $key ?>">Edit</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>