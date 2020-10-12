<!DOCTYPE html>
<head>
	<title></title></head>
<body>

<?php
function volumeTabung($jari2, $tinggi){
    return (3.14*pow($jari2,2)*$tinggi);
}
?>

<h2>Tugas 3</h2>

<p>3. Sebuah tabung memiliki jari-jari dan tinggi masing-masing 10 cm dan 30 cm, lalu tentukanlah berapa volume dari tabung terebut ?</p>

<p><b>Volume dari tabung tersebut adalah <?php echo volumeTabung(10,30);?> cm<sup>3</sup></b></p>

</body>
</html>