<?php 


    
    
    
    

 if (isset($_GET['submit'])) {
 $gender= $_GET['gender'];
$password=$_GET['password'];
$email=$_GET['email'];
$name=$_GET['name'];
$lastname=$_GET['last_name']; }

if (isset($_GET['submit']) ) {
    
  if (empty($_GET['name'])) 
    $error="Greska,niste uneli ime!"; 
     else  if (empty($_GET['last_name'])) 
     $error="Greska,niste uneli prezime!";
     else   if (empty($_GET['email']) ) 
     $error="Greska,niste uneli mejl!";
     else   if (empty($_GET['password'])) 
     $error="Greska,niste uneli sifru!";
     echo $error;  
     
     if ($gender=="muski")
        $message= "Postovani"; 
        else if ($gender=="zenski")
        $message= "Postovana" ;
        else if (!isset($gender))
        $message= "Niste uneli pol! <br>"; 
       
        echo "<br>".$message. " ".$name. " ".$lastname."<br>". 
        "Uspesno ste se registrovali na nas sajt!"."<br>".
        "Vas username je: ".$email."<br>".
        "Vasa lozinka je: ".$password."<br>".
        "Vasi odabrani kursevi su: ";
        if(!empty($_GET['course']))
        foreach($_GET['course'] as $courses) {
            echo $courses;} 
        
           }
 
        
        



    
 



?>
