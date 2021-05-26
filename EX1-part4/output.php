<?php


$arr = array("MUSICALS"=>array('Oklahoma','The Music Man','South Pacific'), 
"DRAMAS"=>array('Lawrence of Arabia','To Kill a Mockingbird','Casablanca'), 
"MYSTERIES"=>array('The Maltese Falcon','Rear Window','North by Northwest'));



echo '<hr>';
foreach ($arr as $key => $value) {
   echo $key;
echo '<br>';

   foreach ($value as $key => $value) {
echo '----> '.$key.' = '.$value;
echo '<br>';
   }
}


?>




