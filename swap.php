<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Two Numbers</title>
</head>
<body>
    <h1>Swap Two Numbers</h1>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" name="submit" value="Swap">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        function swap(&$a, &$b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

        swap($num1, $num2);

        echo "<h2>Swapped Numbers</h2>";
        echo "<p>Number 1: $num1</p>";
        echo "<p>Number 2: $num2</p>";
    }
    ?>
</body>
</html>
