<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Even or Odd</title>
</head>
<body>
    <h1>Check Even or Odd</h1>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];

        function isEven($num) {
            return $num % 2 == 0;
        }

        if (isEven($number)) {
            echo "<p>$number is an even number.</p>";
        } else {
            echo "<p>$number is an odd number.</p>";
        }
    }
    ?>
</body>
</html>
