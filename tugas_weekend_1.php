  
<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>
<?php
function luaskubus($rusuk){
    return "<b>Luas dengan panjang rusuk $rusuk cm : ".(6*pow($rusuk,2))." cm<sup>2</sup><b>";
}
?>

<p>1. Hitunglah luas permukaan kubus dengan panjang setiap rusuknya sebagai berikut :</p>
<ol type="a">
<li>4 cm</li>
<li>7 cm</li>
<li>10 cm</li>
<li>12 cm</li>
</ol>

<p>Jawaban :</p>
<ol  type="a">
<li><?php echo luaskubus(4);?></li>
<li><?php echo luaskubus(7);?></li>
<li><?php echo luaskubus(10);?></li>
<li><?php echo luaskubus(12);?></li>
</ol>

</body>
</html>