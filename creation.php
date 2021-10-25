<html>
<head>
   <meta charset ="utf-8">
    <title > Authentification</title>

    <!--Gérer sessions-->


    <!--Requete : preparedstatement-->

    <!-- Controle de la saisie ou autre page à voir-->
</head>
<body>

    <h1>Création de compte</h1>
    <FORM>
    <label>Nom  :</label>
    <input type="text"  name="nom" required><br> <!--Trim + controle des caractères-->

    <label>Prenom :</label>
    <input type="text" name="prenom" required><br> <!-- Trim + controle des caractères-->

    <label>Adresse mail :<label>
    <input type="text" name="mail" required><br><!--Vérification dans la base-->

    <label>Pseudo :<label>
    <input type="text" name="pseudo" required><br> <!--Verification dans la base-->

    <label>Mot de passe :</label>
    <input type="password" required> <br> <!--Rajouter un champ 'Confirmer le mot de passe pour plus de sécurité?'-->

    <input type="button" value="Confirmer">
</body>

</html>