<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="POST" action = "<?php echo base_url(); ?>index.php/ctrlInscription/getInscription/">
            
                <h2>Inscription</h2>
             <br> <br><br> <br>
            <div id="DivInscription" >
                <input id="idLogin" type="text" name="txtLogin" placeholder="Login" class="placeholder"> <br/><br/>
                <input id="idNom" type="text" name="txtNom" placeholder="Nom" class="placeholder">
                <input id="idMdp"type="password" name="txtMdp" placeholder="Mot de passe" class="placeholder">
                <input id="idMdp2"type="password" name="txtMdp2" placeholder="Confirmer Mot de passe" class="placeholder"><br/> <br/>
                <input type="submit" name="btn" >
            </div>

        </form>
</body>
</html>