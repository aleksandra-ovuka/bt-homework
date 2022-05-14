<?php

function FunkcijaZaKrofne ( $UkupnoBrasno, $BrasnoPoKrofni,$OstatakFlag=NULL) {
    for ($BrojKrofni=0;$UkupnoBrasno>=$BrasnoPoKrofni;$UkupnoBrasno-=$BrasnoPoKrofni,$BrojKrofni++) {}
    if (is_null($OstatakFlag)) $OstatakFlag==false;
    if ($OstatakFlag==false)  return $UkupnoBrasno; else return $BrojKrofni;
  
}

echo "Napravljeno je ukupno ". FunkcijaZaKrofne(455,10,true)." krofni. <br>"; 
echo "Preostalo je ". FunkcijaZaKrofne(455,10)." grama brasna. <br>"; 


?>