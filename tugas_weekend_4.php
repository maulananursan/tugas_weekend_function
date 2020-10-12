<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>

<?php
function luas_per_tabung($jari2, $tinggi){
    return (2*3.14*(pow($jari2,2)))+(2*3.14*$jari2*$tinggi);
	}
?>

<h2>Tugas 4</h2>

<p>4. Sebuah tabung memiliki jari-jari 14 cm dan tingginya 10 cm, maka tentukanlah luasnya?</p>

<p><b>Jadi Luas permukaan tabung tersebut adalah <?php echo luas_per_tabung(14,10);?> cm<sup>2</sup></b></p>

</body>
</html>