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

    <ul>

        <?php foreach ($users as $user) : ?>
            <li><?=$user; ?></li>
        <?php endforeach; ?>

        <?php
//        foreach ($users as $user) {
////            echo '<li>' .  $user . " " . '</li>';
//            echo "<li>$user</li>";
//        }
        ?>
    </ul>


</header>
</body>
</html>