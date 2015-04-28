<?php
$hobi1 = "basket";
$hobi2 = "mancing";

switch ($hobi1) {
     case "renang":
		 echo "<h2>PHP_052128</h2>";
		 echo "Hobi Pertama Saya!<br>";
         echo "RENANG<br>";
		 echo "Merupakan olahraga air yang mengasikan!<br><br>";
         break;
     case "basket":
		 echo "<h2>PHP_052128</h2>";
         echo "Hobi Pertama Saya!<br>";
         echo "BASKET<br>";
		 echo "Merupakan olahraga dengan pemain 5 orang!<br><br>";
         break;
     case "game":
		 echo "<h2>PHP_052128</h2>";
         echo "Hobi Pertama Saya!<br>";
         echo "GAME<br>";
		 echo "Mungkin ini merupakan olahraga memeras otak!<br><br>";
         break;
	 default:
         echo "Pilihan hobi pertaman anda!";
}
switch ($hobi2) {
     case "badminton":
		 echo "Hobi Kedua Saya!<br>";
         echo "BADMINTON<br>";
		 echo "Salah satu olahraga populer di indonesia!<br><br>";
         break;
     case "foodsal":
         echo "Hobi Kedua Saya!<br>";
         echo "BASKET<br>";
		 echo "Olahraga dengan jumlah pemain 5 orang!<br><br>";
         break;
     case "mancing":
         echo "Hobi Kedua Saya!<br>";
         echo "MEMANCING<br>";
		 echo "Mungkin ini merupakan olahraga yang butuh kesabaran!<br><br>";
         break;
     default:
         echo "Pilihan hobi kedua anda!";
}
echo "<br><br><b>Contoh Penggunaan Switch</b>";
?>