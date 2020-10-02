<!DOCTYPE html>
<html>
    <head>
<title>1915051102_Putu Sintya Pradnya Paramitha</title></head>
<body>
<h3>Aplikasi Deret Fibonacci</h3>
<form action="" method="post">
Angka Deret 1: <input type="text" name="deretpertama" ><br><br>
Angka Deret 2: <input type="text" name="deretkedua" ><br><br>
Jumlah Deret Yang Akan Ditampilkan: <input type="text" name="jumlahderet"><br><br>
<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php
if (isset($_POST['submit'])){
    $angkasatu = $_POST['deretpertama'];
    $angkadua = $_POST['deretkedua'];
    $n = $_POST['jumlahderet'];  

    echo " <br> ";
    echo " Suku Selanjutnya Deret Fibonacci yaitu  ";
    echo "$angkasatu $angkadua";
   
    for($i =0; $i < $n; $i++){
        $hasil = $angkasatu + $angkadua;
        echo " ";
        echo $hasil ;

        $angkasatu = $angkadua;
        $angkadua = $hasil;
    }
 }
?>
