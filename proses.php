<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="proses.php">
        <input type="number" name="angka1"> <br>
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="number" name="angka2"> <br>
        <button type="submit">Hitung</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil;

        if ($operasi == "+") {
            $hasil = $angka1 + $angka2;
        } else if ($operasi == "-") {
            $hasil = $angka1 - $angka2;
        } else if ($operasi == "*") {
            $hasil = $angka1 * $angka2;
        } else if ($operasi == "/") {
            $hasil = $angka1 / $angka2;
        }

        echo "Hasil: " . $hasil;
    }
?>
</body>
</html>
