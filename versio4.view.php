<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>

    <h2><?= $person['name'] ;?></h2>

    <ul>
        <li>Ciutat: <?= $person['city'] ;?></li>
        <li>Sexe: <?= $person['gender'] ;?></li>
    </ul>


</header>
</body>
</html>