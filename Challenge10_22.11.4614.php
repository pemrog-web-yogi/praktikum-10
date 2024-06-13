<!DOCTYPE html>
<html>
<head>
    <title>Form Penjumlahan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2>Form Penjumlahan PHP</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br><br>
        Angka 1: <input type="number" name="angka1"><br><br>
        Angka 2: <input type="number" name="angka2"><br><br>
        <input type="submit" name="submit" value="Jumlahkan">
    </form>
    <br>
    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $nama = $_POST['nama'];

        // Validasi jika kedua nilai adalah angka
        if (is_numeric($angka1) && is_numeric($angka2)) {
            // Hitung jumlahnya
            $jumlah = $angka1 + $angka2;
            $kurang = $angka1 - $angka2 ;
            $perkalian = $angka1 * $angka2 ;
            $pembagian = $angka1 / $angka2 ;
            $modulus = $angka1 % $angka2 ;
            // Tampilkan hasilnya
            echo "<h2>Halo, $nama. </h2>";
            echo "Hasil penjumlahan dari $angka1 + $angka2 adalah $jumlah. <br>";
            echo "Hasil penjumlahan dari $angka1 - $angka2 adalah $kurang.<br>";
            echo "Hasil penjumlahan dari $angka1 * $angka2 adalah $perkalian.<br>";
            echo "Hasil penjumlahan dari $angka1 / $angka2 adalah $pembagian.<br>";
            echo "Hasil penjumlahan dari $angka1 % $angka2 adalah $modulus.";
        } else {
            // Jika salah satu atau kedua nilai bukan angka
            echo "Mohon masukkan dua angka yang valid.";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>