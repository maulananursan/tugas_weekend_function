<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>

<?php
function luas_lingkaran($jari2){
    return ((22/7)*pow($jari2,2));
}
?>

<h2>Tugas 5</h2>

<p>5. Sebuah lingkaran memiliki jari-jari sebesar 14 cm. Tentukan luas lingkaran tersebut ?</p>

<p><b>Luasnya adalah <?php echo luas_lingkaran(14); ?> cm<sup>2</sup></b></p>

</body>
</html>