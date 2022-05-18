<?php
//1.Zadatak 
//Kreirati funkciju koja filtrira niz emailova i vraca samo emailove (za email smatrati da je ispravan ako sadrzi @).

function ValidateEmail($array) {
    $ValidEmail=[];
    for ($i=0;$i<count($array);$i++) {
        if (str_contains(($array[$i]),'@')) {
            array_push($ValidEmail,$array[$i]);
        } }
        return $ValidEmail;
    }
   

$mail=['novakdjokovic@gmail.com', "jjovanovic@gmai.com", "anaivanovichotmail.com", "peradetlichotmail.com"];   
$newmail= (ValidateEmail($mail));
print_r($newmail);

//2.Zadatak 
//Kreirati funkciju koja vrsi racunske operacije svih elemenata prosledjenog niza. Funkcija prima 2 parametra: niz (podrazumevati da je niz brojeva) nad kojim se vrse operacije i karakter za operaciju koji je po defaultu = “+”;

    function KalkulatorElemenata ($array,$znak=null) {  
        $sum=0;
        $mul=1;
        $div=$array[0];
        $sub=0;
        for ($i=0;$i<count($array);$i++) {
            $sum+= $array[$i];
            $mul*= $array[$i];
            $sub-= $array[$i];              
      }
         for($i=1;$i<count($array);$i++) {
         $div/= $array[$i]; 
      }
    if ($znak==null) return $sum;
    else if ($znak=='+') return $sum;
    else if ($znak==='-') return $sub;
    else if ($znak==='*') return $mul;
    else if ($znak==='/') return $div;
}
$array1=[100,2,2];
$rezultat= KalkulatorElemenata($array1,"/");
echo "Rezultat je ". $rezultat.".<br>";

   // 3.Zadatak 
//Kreirati funkciju koja proverava da li u datom asocijativnom nizu postoji odredjeni kljuc. != array_key_exists().

function FindKey($key,$array) {
    foreach ($array as $keys=>$value)
    if ($key===$keys) return true;
    else if ($key!==$keys) return false;
}
$keyarrey= ['name'=>"Novak", "lastname"=>'Djokivic', 'age'=>36];
var_dump(FindKey('name',$keyarrey));






?>