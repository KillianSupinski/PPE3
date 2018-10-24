<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<form id="offre-form" class="modal">
<?php

foreach ($IdMaxOffres as $unIdOffre)
{
    ?>
<label>Numéro de l'offre</label><br>
<input type="text" value="<?php echo $unIdOffre->idOffreCrea ?> " disabled><br>
    <?php

}

?>
<label>Description de l'offre</label><br>
<input type="text" value=""><br>
<label>Date de l'offre</label><br>
<input type="date" value=""><br>
<label>Nom du service</label><br>
<select id="jecpa">
<?php
foreach ($lesServices as $unService)
{
    ?>
    <option><?php echo $unService->nomService ?></option>
    <?php
}
?>
</select><br><br>
<input type="submit" value="validez">
</form>

<form id="deal-form" class="modal">
<label>Numéro du deal</label><br>
<input type="text" value=""><br>
<label>Description du deal</label><br>
<input type="text" value=""><br>
<label>Date du deal</label><br>
<input type="date" value="le numéro ici fdp"><br>
<label>Nom du service</label><br>
<select id="fdp">
<option>Fils</option>
    <option>De</option>
    <option>Pute</option>
</select><br><br>
<input type="submit" value="validez">
</form>

<form id="demande-form" class="modal">
<label>Numéro de la demande</label><br>
<input type="text" value="le numéro ici fdp"><br>
<label>Description de la demande</label><br>
<input type="text" value="la description ici fdp"><br>
<label>Date de la demande</label><br>
<input type="date" value="le numéro ici fdp"><br>
<label>Nom du service</label><br>
<select id="fdp">
<option>Fils</option>
    <option>De</option>
    <option>Pute</option>
</select><br><br>
<input type="submit" value="validez">
</form>


</body>
</html>