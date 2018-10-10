<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JQuery/jquery-3.1.1.min.js"></script>
    <link href="<?php echo base_url();?>Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Bootstrap/css/boostrap-theme.min.css" rel="stylesheet">
</head>
<body>
<form method="POST" action="<?php echo base_url(); ?>index.php/ctrlLogin/seConnecter/">
<div id="DivLogin">
    <h2>Connexion</h2><br/>
    <label>Identifiant</label><br/>
    <input type="text" id="idIdentifiant" name="nomIdentifiant" placeholder="Identifiant" class="placeholder" style="width:180px;"><br/><br/>
    <label>Mot de passe</label><br/>
    <input type="password" id="idPassword" name="nomPassword" placeholder="Mot de passe" class="placeholder" style="width:180px;"><br/><br/>
    <input type="submit" value="Connexion" name="btnConnexion"> - 
    <a href="index.php/ctrlInscription" style="text-decoration: none;"><input type="button" value="S'inscrire"></a>
</div>
</form>
</body>
</html>