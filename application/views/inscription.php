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
    <link href="<?php echo base_url(); ?>css/styleL.css" rel="stylesheet">
</head>
<body>
<div id="affInsc" >
<form method="POST" action = "<?php echo base_url();?>index.php/ctrlInscription/getInscription/">
    <div class="titrePage">Inscription</div><br/>
    <input id="idLogin" type="text" name="txtLogin" placeholder="Login" class="champsForm"><br/><br/>
    <input id="idNom" type="text" name="txtNom" placeholder="Nom" class="champsForm"><br/><br/>
    <input id="idMdp"type="password" name="txtMdp" placeholder="Mot de passe" class="champsForm"><br/><br/>
    <input id="idMdp2"type="password" name="txtMdp2" placeholder="Confirmer le mot de passe" class="champsForm"><br/><br/>
    <input type="submit" id="btnInsc2" name="btn" ><br/><br/>
</form>
</div>
</body>
</html>