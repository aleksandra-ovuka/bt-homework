<?php

function FunkcijaZaKrofne ( $UkupnoBrasno, $BrasnoPoKrofni,$OstatakFlag) {
    $BrojKrofni=0;
    for ($UkupnoBrasno;$UkupnoBrasno>=$BrasnoPoKrofni;$UkupnoBrasno-=$BrasnoPoKrofni,$BrojKrofni++) {}
    if ($OstatakFlag==true) return $UkupnoBrasno; else return $BrojKrofni;
}

echo "Napravljeno je ukupno ". FunkcijaZaKrofne(456.7,10,false)." krofni. <br>"; 
echo "Preostalo je ". FunkcijaZaKrofne(456.7,10,true)." grama brasna. <br>"; 


?>