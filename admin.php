<?php
require '/Applications/AMPPS/www/infoForm/php/table.php';
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div id="tableValue" class="container mt-4" style="display: block;">
        <h4>Тут показаны все данныые которые записывались в таблицу</h4>
        <a href="index.php">выход</a>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Education</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Hobby</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <!-- код для вывода из таблицы данных forms/table.php -->
                <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Telephone']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Education']; ?></td>
                    <td><?php echo $row['Experience']; ?></td>
                    <td><?php echo $row['Skills']; ?></td>
                    <td><?php echo $row['Hobby']; ?></td>
                    <td><?php echo $row['Message']; ?></td>

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>