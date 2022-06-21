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
        $pemakaian = null;
        $kapasitas_max=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kapasitas_max'];
            $hasil=0;
                    $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
        }
    ?>
    <div class="rows">
        <form action="unit_of_activity.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" class="kotak" value="<?php echo $perolehan; ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="kotak" value="<?php echo $residu; ?>"  required>
            </div>
                <label>Pemakaian:</label>
                <input type="text" name="pemakaian" class="kotak" value="<?php echo $pemakaian; ?>"  required>
            </div>
            <div class="form-group">
                <label>Kapasitas Maksimal:</label>
                <input type="text" name="kapasitas_max" class="kotak" value="<?php echo $kapasitas_max; ?>"  required>
            </div>
            <button type="button" class="bn30" onclick="location.href='index.php'">Kembali</button>
            <button type="submit" class="bn30">Hitung</button>
        </form>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi dengan metode Unit of Activity adalah Rp. " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
    </div>
</div>
</body>
</html>