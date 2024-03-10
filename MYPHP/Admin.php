<?php 
$data = file_exists('data/databasefile.json') ? json_decode(file_get_contents('data/databasefile.json'), true) : array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #ffff;
            text-align: center;
            margin: 50px;
            background-image: url(Background.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;

        }
        

        h2 {
            color: #fff;
            font-size: 50px;   
            text-shadow: 0 0 20px #ff006f, 0 0 30px #ff006f, 0 0 40px #ff006f;
        }

        table {
            width: 100%;
           
            border-radius: 40px;
            padding: 12px 20px;
            box-sizing: border-box;

        }

        th, td {
            border: 2px solid #fff ;
            border-radius: 40px;
            padding: 12px 20px;
            box-sizing: border-box;
        }

        th {
            background: 
            linear-gradient(45deg, #00ccff, #ff006f, #9900cc);
            border: none;
            cursor: pointer;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #fff;
            background: 
            linear-gradient(45deg, #00ccff, #ff006f, #9900cc);
            border: none;
            cursor: pointer;
            font-size: x-large;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Managment</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>delete</th>
        </tr>

        <?php foreach ($data as $index => $entry) : ?>
            <tr>
                <td><?= $entry['name'] ?></td>
                <td><?= $entry['email'] ?></td>
                <td><?= $entry['password'] ?></td>
                <td><a href='delete.php?index=<?= $index ?>'>Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>