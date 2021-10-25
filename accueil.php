<html>
<head>
    <meta charset ="utf-8">
<title>Accueil</title>

<!--Section dédiée au session+mettre un boolean pour si redacteur ou non-->
<?php 
include ("./co.php");
function detruire(){

session_start(); 
//Ajouter un message de confirmation
$_SESSION[]=array(); 
session_destroy();
header("location: accueil.php");  

}

?>

</head>
<body>
<h1>Accueil</h1>
<!---->
<!-- Bloc à mettre à haut gauche ou haut droite-->
<div>
<h4>Rédacteur</h4>
<input type ="button" value="Authentification"> <!--Vers page -->
<input type ="button" value="Deco" action="detruire()"> <!--Fonction: Insérer une confirmation + session detruite-->
<input type ="button" value="Création de compte"> <!--Vers page -->

<?php 
if($ok){ //Si redacteur alors:
   echo "<input type='button' value='Création du sujet'>"; //Vers page
}

?>
</div>


<!--Visualisation des pages de blogs, chargement depuis la bdd, puis ccs ->

<P>
    
</P>
</body>
</html>