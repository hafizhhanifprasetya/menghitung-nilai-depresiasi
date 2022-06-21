<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container bg-dark text-white">
    <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
    ?>
    <div class="rows">
        <form action="reducing_balance.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" class="kotak" value="<?php echo $perolehan; ?>" required>
            </div>
            <div class="form-group">
                <label>Umur Ekonomis (Tahun):</label>
                <input type="text" name="umur" class="kotak" value="<?php echo $umur; ?>"  required>
            </div>
            <button type="button" class="bn30" onclick="location.href='index.php'">Kembali</button>
            <button type="submit" class="bn30">Hitung</button>
        </form>
        <br>
        
        <?php
            if (isset($_GET['perolehan'])) {
                $perolehan=$_GET['perolehan'];
                $umur=$_GET['umur'];
                $hasil = ($perolehan / $umur) * 2;
                $hasila = "Hasil depresiasi dengan menggunakan metode Reducing Balance tahun pertama adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasila</h1>";
                for ($i=2; $i <= $umur; $i++) { 
                    $hasill = (($perolehan-$hasil) / $umur) * 2;
                    $hasilla = "Hasil depresiasi dengan menggunakan metode Reducing Balance pada tahun ke " .$i. " adalah " .number_format($hasill,0,',','.');
                    echo "<h1>$hasilla</h1>";
                    $perolehan = $perolehan - $hasill;
                    $hasill = ($perolehan/$umur)*2;
                }
            }
        ?>
    </div>
</div>
</body>
</html>