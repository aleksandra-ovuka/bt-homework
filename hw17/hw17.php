<?php




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
	'last_name'=> 'Jovanov',
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
	'name' => 'Novak',
	'last_name'=> 'Peroslav',
	'age' => 36,
	'gender' => 'male',
	'avg_rating' => 10,
	'married' => true,
	'courses' => ['laravel', 'react', 'php']
];
$data ['profile5']=[
	'name' => 'Ana',
	'last_name'=> 'Perov',
	'age' => 26,
	'gender' => 'female',
	'avg_rating' => 6.5,
	'married' => false,
	'courses' => ['laravel', 'react', 'wordpress']
];
function search_users($array,$searchContent="") {
    $filteredUsers=[];
foreach ($array as $users=>$category) {
    if (str_contains($category['name'],$searchContent) || str_contains($category['last_name'],$searchContent)) {
      array_push($filteredUsers,$category);}
         elseif ($searchContent==" ") return $array;} return $filteredUsers;
	}
  

$newdata=search_users($data,"Per");
print_r($newdata);
    






?>