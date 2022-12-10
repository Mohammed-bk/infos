<?php
$user="root" ;
$mdp="";
$db="recrutement";
$server="localhost" ;

$link=mysqli_connect($server,$user,$mdp,$db);
if ($link) {
	
	//echo "connexion etablie";
}
else {
	die(mysqli_connect_error());
}







?>