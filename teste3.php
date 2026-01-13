<?php
include "conectar.php";


/* 
contar quais os nuemros  de média que  mais sairam . 

ubservando que o maior numero seria 

25 + 24 + 23 +22 +21 +   20 + 19 +18 +17 +16 +15 +14+13+12+11 = 270 / 15 = 18
 ()

*/
echo "\n";

for($i=25;$i>=8;$i=$i-1 )
{

 $teste=$con->prepare("select * from lotofacil where media=:media");
 $teste->bindValue(":media",$i);
 $teste->execute();
 $quantidade = $teste->rowCount();
 echo "\n media de $i = $quantidade"; 


}





echo "\n";

/*

com esse codigo o resutado deu
media de 25 = 0
 media de 24 = 0
 media de 23 = 0
 media de 22 = 0
 media de 21 = 0
 media de 20 = 0
 media de 19 = 0
 media de 18 = 0
 media de 17 = 2
 media de 16 = 58
 media de 15 = 334
 media de 14 = 854
 media de 13 = 1099
 media de 12 = 865
 media de 11 = 316
 media de 10 = 53
 media de 9 = 3
 media de 8 = 0


*/

?>