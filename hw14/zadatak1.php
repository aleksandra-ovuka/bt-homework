<?php
//Pocetna validacija

if(!isset($_GET)) die;
if(!isset($_GET['submit'])) die; 

//Funkcija za proveru prestupne godine

function prestupnagodina($year){
    if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)))
    return true; else false;}

//Funckija za proveru da li je string integer (sa stackoverflow-a)

function my_is_int($s) {
    return (is_numeric($s) ? intval($s) == $s : false); //(Istrazila sam i nasla da je ovo ternarni operator umesto if else, funkcija pretvara u int i proverava is numeric )
}






//Niz sa mesecima koji imaju 31 dan 

$vermonth= array ('1','3','5','7','8','10','12');

//Provera za svaku putanju da li je prazna i nije nula;

if(empty($_GET['month'])) die ("Morate uneti mesec!");
if(empty($_GET['year'])) die ("Morate uneti godinu!");
if(empty($_GET['day'])) die ("Morate uneti dan!");

$month=$_GET['month']; 
$year=$_GET['year']; 
$day=$_GET['day'];    

//Provera za svaku varijablu da li je ceo broj
if(!my_is_int($_GET['month'])) die ("Mesec mora biti ceo broj!");
if(!my_is_int($_GET['year'])) die ("Godina mora biti ceo broj!");
if(!my_is_int($_GET['day'])) die ("Dan mora biti ceo broj!");

//Provera da li nema viska cifri
if(strlen($month)>=3) die ('Unesite mesec u jednoj do dve cifre.');
if(strlen($day)>=3) die ('Unesite dan u jednoj do dve cifre.');;
if(strlen($year)>=5) die ('Unesite godinu u 4 cifre');
  
     

// Provere za broj dana u zavisnosti od meseca i godine 

    if (!in_array($month,$vermonth) && $month!=2 && $day>30 )  die ("Dani u ovom mesecu nemaju vise od 30 dana."); 
    if (in_array($month,$vermonth) && $month!=2 && $day>31 )  die ("Dani u ovom mesecu nemaju vise od 31 dana."); 
       
// Provera za februar 
     if ($month==2 && !prestupnagodina($year) && $day>28) 
       die ("Dani u prostoj godini u ovom mesecu nemaju vise od 28 dana.");
     if ($month==2 && prestupnagodina($year)&& $day>29) 
     die ("Dani u ovom mesecu u prestupnoj godini nemaju vise od 29 dana. ");

// Provera da li su godina i mesec u dozvoljenom opsegu vrednosti 
    if ($year<1969)   die ("Godina mora biti broj izmedju 1970te i 2300te. ");
    else if ($year>2300) die ("Godina mora biti broj izmedju 1970te i 2300te. ");
    if ($month>12) die ("Mesec mora da bude broj izmedju 1 i 12.");
      
echo "Dan je $day. <br> Mesec je $month. <br> Godina je $year. <br>
Ovaj datum je ispravan!";



?>


