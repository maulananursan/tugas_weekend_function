<!DOCTYPE html>
<head>
	<title></title>
</head>

<body>

<?php

function jarak_tempuh($jari2, $putaran){
   
    return (2*(22/7)*$jari2)*$putaran;
}

?>

<h2>Tugas 7</h2>

<p>7. Pak Andi memilik sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm. Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali. Berapakah jarak yang ditempuh mobil tersebut?</p>

<p><b>Jarak tempuhnya adalah <?php echo jarak_tempuh(21, 200)/100;?> meter</b></p>


</body>
</html>