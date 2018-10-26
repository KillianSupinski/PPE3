<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JQuery/jquery-3.1.1.min.js"></script>
    <link href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>Bootstrap/css/boostrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styleL.css" rel="stylesheet">
</head>
<body>
<form method="POST" action="<?php echo base_url(); ?>index.php/ctrlLogin/seConnecter/">
<div id="affLogin">
    <div class="titrePage">Connexion</div><br/>
    <label>Identifiant</label><br/>
    <input type="text" id="idIdentifiant" name="nomIdentifiant" placeholder="Identifiant" class="champsForm"><br/><br/>
    <label>Mot de passe</label><br/>
    <input type="password" id="idPassword" name="nomPassword" placeholder="Mot de passe" class="champsForm"><br/><br/>
    <input type="submit" id="btnLog" value="Connexion" name="btnConnexion"> - 
    <a href="<?php echo base_url(); ?>index.php/ctrlInscription" style="text-decoration: none;"><input id="btnInsc1" type="button" value="S'inscrire"></a>
    <br/><br/>
</div>
</form>
</body>
</html>