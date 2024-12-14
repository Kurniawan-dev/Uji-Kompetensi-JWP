<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hitung Luas Segitiga</h2>
    <form action="processHitungLuas.php" method="POST">
        <label for="alas">Alas Segitiga:</label><br>
        <input type="number" id="alas" name="alas" required><br><br>

        <label for="tinggi">Tinggi Segitiga:</label><br>
        <input type="number" id="tinggi" name="tinggi" required><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>

</html>