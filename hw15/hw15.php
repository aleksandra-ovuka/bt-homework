<?php
$hwArray =  ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira",]; 
if (!in_array('Aleksandra',$hwArray))array_push($hwArray,"Aleksandra");
if (!in_array('Dejan',$hwArray))array_splice( $hwArray, 3, 0, 'Dejan' );
$k=count($hwArray);
if (!in_array('Jovan',$hwArray))array_unshift($hwArray, 'Jovan');
array_splice( $hwArray, 6, 1);
$newArray=array_unique($hwArray); 
$newArray2=array_values($newArray);
print_r($hwArray);
echo "<br>";
print_r($newArray2);

$data = array();

$data ['profile1']=[
	'name' => 'Pera',
	'last_name'=> 'Peric',
	'age' => 28,
	'gender' => 'male',
	'avg_rating' => 7.5,
	'married' => false,
	'courses' => ['laravel', 'react', 'jQuery']
];
$data ['profile2']=[
	'name' => 'Jelena',
	'last_name'=> 'Jovanovic',
	'age' => 45,
	'gender' => 'female',
	'avg_rating' => 6.5,
	'married' => true,
	'courses' => ['laravel', 'php', 'jQuery']
];
$data ['profile3']=[
	'name' => 'Ivan',
	'last_name'=> 'Ivanovic',
	'age' => 32,
	'gender' => 'male',
	'avg_rating' => 5.5,
	'married' => true,
	'courses' => ['laravel', 'wordpress', 'jQuery']
];

$data ['profile4']=[
	'name' => 'Novak ',
	'last_name'=> 'Djokovic',
	'age' => 36,
	'gender' => 'male',
	'avg_rating' => 10,
	'married' => true,
	'courses' => ['laravel', 'react', 'php']
];
$data ['profile5']=[
	'name' => 'Ana',
	'last_name'=> 'Ivanovic',
	'age' => 26,
	'gender' => 'female',
	'avg_rating' => 6.5,
	'married' => false,
	'courses' => ['laravel', 'react', 'wordpress']
];
//Pera Peric ima 28 godina i nije ozenjen. Ima prosecnu ocenu 7.5, a kurseve koje trenutno slusa su: Laravel, PHP, jQuery.
foreach ($data as $profile) {
foreach ($profile as $category=>$info)  {
  if($profile['married']==false && $profile['gender']=='male')
  $married="nije ozenjen";
  if($profile['married']==false && $profile['gender']=='female')
  $married="nije udata";
  if($profile['married']==true && $profile['gender']=='male')
  $married="ozenjen je ";
  if($profile['married']==true && $profile['gender']=='female')
  $married="udata je";
 

} 
$courses = implode(" ",$profile['courses']);
echo $profile['name']. " ". $profile['last_name']. " ima ".$profile['age']. " godina i ". $married. ".Ima prosecnu ocenu ". $profile['avg_rating']. " a kursevi koje slusa su ".$courses. ".<br>";

}




?>