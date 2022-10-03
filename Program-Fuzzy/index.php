<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika Fuzzy</title>
</head>
<body style="text-align: center">
    <h1>Logika Fuzzy</h1>
    <br>
    <br>
    <form method="post" action="">
        <label for="kejelasan">Kejelasan Petugas</label> <br>
        <input type="number" name="kejelasan" id="kejelasan" placeholder="Masukkan angka 1-100" required>
        <br><br>
        <label for="kesopanan">Kesopanan Petugas</label><br>
        <input type="number" name="kesopanan" id="kesopanan" placeholder="Masukkan angka 1-100" required>
        <br><br>
        <label for="kecepatan">Kecepatan Petugas</label><br>
        <input type="number" name="kecepatan" id="keceptan" placeholder="Masukkan angka 1-100" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <h3>Nilai Kepuasan Pelayanan</h3>
    <br>
    <?php
    if(isset($_POST['submit'])) {
        $kejelasan = $_POST['kejelasan'];
        $kesopanan = $_POST['kesopanan'];
        $kecepatan = $_POST['kecepatan'];
        $rata = ($kejelasan + $kesopanan + $kecepatan) / 3;
        echo "Rata-rata nilai yang dimasukkan adalah : <b>", ($rata), "</b><br>";

        if($rata >= 90 and $rata <= 100) {
            echo "Pelayanan Sangat Bagus";
        } elseif($rata >= 70 and $rata <= 89) {
            echo "Pelayanan Bagus";
        } elseif($rata >= 50 and $rata <= 69) {
            echo "Pelayanan Lumayan";
        } elseif($rata >= 30 and $rata <= 49) {
            echo "Pelayanan Buruk";
        } elseif($rata >= 0 and $rata <= 29) {
            echo "Pelayanan Sangat Buruk";
        } else {
            echo "Data Tidak Ditemukan";
        }
    }
    ?>
</body>
</html>