<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div>
    <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $hasil=0;
            $hasil = ($perolehan-$residu)/$umur;  
        }
    ?>
    <div class="rows">
        <form action="straight_line.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <div class="input-container">
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
            <table>
                <tr>
                    <td>
                        <button type="button" class="bn30" onclick="location.href='index.php'">Kembali</button>
                    </td>
                    <td>
                        <button type="submit" class="bn30">Hitung</button>
                    </td>
                </tr>
            </table>
           
        </form>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi untuk ". $umur . " tahun menggunakan metode Straight Line adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
    </div>
</div>
</body>
</html>