<?php
//Funkcija za povrsinu kruznog bazena
function PovrsinaKruga ($b) {
$sqr=pow(2*$b,2);
$pk= pi()*$sqr/4;
return $pk;
}
echo PovrsinaKruga(5). " je povrsina ovog kruga <br>";


//Funkcija za povrsinu pravougaonika

function PovrsinaPravougaonika ($b,$a) {
   $pp=$b*$a;
    return $pp;

}
echo PovrsinaPravougaonika(6,8). " je povrsina ovog pravougaonika <br>";

// Funkcija za povrsinu bazena sa polukrugom

function PovrsinaBazena ($b,$a,) {
$pb= PovrsinaPravougaonika($b,$a) + PovrsinaKruga($b)/2;
return $pb;
  
}

echo PovrsinaBazena(4,7). " je povrsina ovog bazena <br>";

// Funkcija za povrsinu svih bazena (ako su sva tri razlicitih mera)
function PovrsinaSvihBazena ($b1,$a1,$b2,$a2,$r1) {
    $psb= PovrsinaPravougaonika($a1,$b1) + PovrsinaKruga($r1) + PovrsinaBazena($a2,$b2) ;
        return $psb;
    
}
echo PovrsinaSvihBazena (6,8,4,7,5). " je povrsina svih bazena zajedno";



//Funkcija za povrsinu svih bazena (ako  im je ista stranica $b) 
function PovrsinaIstihBazena ($b,$a) {
    $pib= PovrsinaPravougaonika($b,$a) + PovrsinaKruga($b) + PovrsinaBazena($b,$a);
}


echo PovrsinaIstihBazena(6,8). " je povrsina svih bazena ako im je jednaka stranica b odnosno precnik."
 

?>