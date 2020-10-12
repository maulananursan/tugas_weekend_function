<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>

<?php

	function luas_lingkaran($diameter){
	    $jari2 = $diameter/2;
	    return ((22/7)*pow($jari2,2));
	}

	function keliling_lingkaran($diameter){
	    $jari2 = $diameter/2;
	    return (2*(22/7)*$jari2);
	}

?>

<h2>Tugas 6</h2>

<p>6. Sebuah roda sepeda berbentuk lingkaran memiliki diameter sebesar 14 cm. Maka luas dan keliling roda tersebut adalah ?</p>

<p><b>Luas Lingkaran adalah <?php echo luas_lingkaran(14); ?> cm<sup>2</sup></b></p>
<p><b>Keliling Lingkaran adalah <?php echo keliling_lingkaran(14); ?> cm</b></p>

</body>
</html>