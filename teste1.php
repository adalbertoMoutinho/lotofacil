<?php
include "conectar.php";


$teste=$con->prepare("select * from lotofacil");
$teste->execute();


{
echo "\n";
while($linha=$teste->fetch(PDO::FETCH_ASSOC))   $bola1=$linha["bola1"];
   $bola2=$linha["bola2"];
   $bola3=$linha["bola3"];
   $bola4=$linha["bola4"];
	$bola5=$linha["bola5"];
	$bola6=$linha["bola6"];
	$bola7=$linha["bola7"];
	$bola8=$linha["bola8"];
	$bola9=$linha["bola9"];
	$bola10=$linha["bola10"];
	$bola11=$linha["bola11"];
	$bola12=$linha["bola12"];
	$bola13=$linha["bola13"];
	$bola14=$linha["bola14"];
	$bola15=$linha["bola15"];
	
	$soma = $bola1+$bola2+$bola3+$bola4+$bola5+$bola6+$bola7+$bola8+$bola9+$bola10+$bola11+$bola12+$bola13+$bola14+$bola15;
	
	echo "\n soma : $soma";
	
	$media = round($soma/15);
	echo " -- media $media ";
	
	
	


}
echo "\n";




?>