<?php

function FunkcijaZaKrofne ( $UkupnoBrasno, $BrasnoPoKrofni,$OstatakFlag=NULL) {
    $BrojKrofni=0;
    for ($UkupnoBrasno;$UkupnoBrasno>=$BrasnoPoKrofni;$UkupnoBrasno-=$BrasnoPoKrofni,$BrojKrofni++) {}
    if (is_null($OstatakFlag)) $OstatakFlag==false;
    if ($OstatakFlag==false)  return $UkupnoBrasno; else return $BrojKrofni;
  
}

echo "Napravljeno je ukupno ". FunkcijaZaKrofne(456,10,true)." krofni. <br>"; 
echo "Preostalo je ". FunkcijaZaKrofne(456,10)." grama brasna. <br>"; 


?>