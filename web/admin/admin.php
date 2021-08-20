<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About view</title>
</head>
<body>
<style>
    th,td{
        padding: 10px;
    }
    th {
        background: #606060;
    }
    td {
        background: #b5b5b5;
    }
</style>

<h1>Admin view</h1>

<?php if($data) : ?>

    <table>
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Password</th>
    </tr>
        <?php foreach ($data as $admin){ ?>
        <tr>
            <td><?= $admin[0] ?></td>
            <td><?= $admin[1] ?></td>
            <td><?= $admin[2] ?></td>
            <td><?= $admin[3] ?></td>
        </tr>
        <?php } ?>
</table>

<?php endif; ?>

</body>
</html>
