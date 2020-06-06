<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
Hello <?= $name ?? '' ?>
<div>
    Data from user:
    <table>
        <thead>
        <tr>
            <td>Name</td>
            <td>Last name</td>
        </tr>
        </thead>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['first_name'] ?></td>
                <td><?= $user['last_name'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>