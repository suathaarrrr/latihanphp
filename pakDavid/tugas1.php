<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form method="post" action="">
        <label for="a">Masukkan angka pertama : </label>
        <input type="number" id="a" name="a" required>
        <br>
        <label for="b">Masukkan angka kedua : </label>
        <input type="number" id="b" name="b" required>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $c = $a + $b;
        echo "$a + $b = $c";
        echo "<hr>";

        $c = $a - $b;
        echo "$a - $b = $c";
        echo "<hr>";

        $c = $a * $b;
        echo "$a * $b = $c";
        echo "<hr>";

        $c = $a / $b;
        echo "$a / $b = $c";
        echo "<hr>";

        $c = $a % $b;
        echo "$a % $b = $c";
        echo "<hr>";

        $c = $a ** $b;
        echo "$a ** $b = $c";
        echo "<hr>";
    }
    ?>
</body>
</html>