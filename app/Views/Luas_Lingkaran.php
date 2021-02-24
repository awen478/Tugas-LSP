<fieldset>
<legend>Luas Lingkaran PHP</legend>
<form action="" method="post">
<table>
<tr><td>Jari-jari : <input type="text" name="jari"></td></tr>
<tr><td><input type="submit" name="proses" value="Save"></td></tr>
</table>
</form>
</fieldset>
<?php
$jari   =$_POST['jari'];
$phie   =22/7;
$luas_lingkaran = $phie*($jari*$jari);
echo "Hasil hitung luas lingkaran adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "Jari-jari lingkaran = $jari<br />";
echo "Phie = $phie<br />";
echo "Maka luas lingkaran sama dengan [ 22/7 x $jari x $jari ] = $luas_lingkaran<br />";
echo "Pembulatan hasil nilai luas = ";
echo round($luas_lingkaran, 2);
?>