<!DOCTYPE html>
<html>
    <head>
<title>1915051102_Putu Sintya Pradnya Paramitha</title></head>
<body>
<h3>Aplikasi Baris Aritmatika</h3>
<form action="" method="post">
Masukan Barisan Aritmatika: <br><input type="text" name="baris"><br><br>
Suku Pertama:<br><input type="text" name="suku1"><br><br>
Beda: <br><input type="text" name="suku2"><br><br>
Suku Ke- : <input type="text" name="SukuKeN"><br><br>
<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php 
if (isset($_POST['submit'])){
    $baris = $_POST['baris'];
    $suku1 = $_POST['suku1'];
    $suku2 = $_POST['suku2'];
    $SukuKeN = $_POST['SukuKeN'];  

   $hasil1 = $SukuKeN - 1;
   $hasil2 = $hasil1 * $suku2;
   $hasil = $suku1 + $hasil2;
   echo '<br>';
   echo "Suku Ke- ".$_POST['SukuKeN'] ;
   echo " dari Baris Aritmatika  " .$_POST["baris"] ;
   echo "  adalah  ";
   echo $hasil;
    
}
?>
