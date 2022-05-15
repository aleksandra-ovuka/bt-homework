<?php

function FunkcijaZaKrofne ( $UkupnoBrasno, $BrasnoPoKrofni,$OstatakFlag=NULL) {
    for ($BrojKrofni=1;$BrasnoPoKrofni<=$UkupnoBrasno-=$BrasnoPoKrofni;$BrojKrofni++) {}
    if (is_null($OstatakFlag)) $OstatakFlag==false;
    if ($OstatakFlag==false)  return $UkupnoBrasno; else return $BrojKrofni;
  
}

echo "Napravljeno je ukupno ". FunkcijaZaKrofne(230,12,true)." krofni. <br>"; 
echo "Preostalo je ". FunkcijaZaKrofne(230,12)." grama brasna. <br>"; 




?>