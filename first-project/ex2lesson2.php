<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Example</title>
</head>
<body>
    <h1>This is my first PHP</h1>
    <?php
        for ($count = 1; $count <= 10; ++$count) {
            echo "Lần $count: $count x 12 = " . ($count * 12) . "<br/>";
        }
    ?>
</body>
</html>
