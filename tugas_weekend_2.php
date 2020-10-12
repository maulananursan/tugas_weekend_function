<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>
<?php
function panjangsisi($luas){
    return ($luas/6);
}
?>

<h2>Tugas 2</h2>

<p>2. Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750 cm<sup>2</sup>. Hitunglah panjang sisi kotak kayu tersebut?</p>

<p><b>Jadi Panjang sisi kotak kayu tersebut adalah akar dari <?php echo panjangsisi(3750);?> cm yaitu <?php echo sqrt(panjangsisi(3750));?></b></p>


</body>
</html>