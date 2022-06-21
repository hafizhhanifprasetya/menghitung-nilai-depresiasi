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
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
        }
    ?>
    <div class="rows">
        <form action="sum_of_the_year.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" class="kotak" value="<?php echo $perolehan; ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="kotak" value="<?php echo $residu; ?>"  required>
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
            $hasil = "Hasil depresiasi dengan metode Sum of The Year pada tahun ke - " . $umur . " adalah " .number_format($hasil,0,',',);
            echo "<h1>$hasil</h1>" ;
        }
        ?>
    </div>
</div>
</body>
</html>