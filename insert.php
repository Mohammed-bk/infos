<?php
include "recrute.php" ;
if (isset($_GET["Nom"]) && isset($_GET["Entreprise"]) && isset($_GET["Travaille"]) && isset($_GET["Message"]) )
 {
  $Nom = $_GET["Nom"] ;
  $Entreprise = $_GET["Entreprise"] ;
  $Travaille = $_GET["Travaille"] ;
  $Message = $_GET["Message"] ;

 $req=mysqli_query($link,"insert into work (Nom,Entreprise,Travaille,Message) values ('$Nom','$Entreprise','$Travaille','$Message')");

 if ($req) {
 include ("recrute.html") ;
 echo "Bien Envoyé";


}





 else {
	echo "Erroor de insertion";
}



}

?>
