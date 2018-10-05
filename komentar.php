<?php
<h1>Hitung Jumlah kata<h1>
<form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name='kata'><br/><br/>
   <input type="submit" name="hitungkata" id="hitungkata" value="hitung" />
</form>
<?php
   if(isset($_POST['hitungkata'])){
      $hasil=explode(" ", $_POST['kata']);
      echo "sekitar " . count($hasil) . " kata";
   }
?>
?>
