<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
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
<form id="demande-form" class="modal">
<?php

foreach ($IdMaxDemandes as $unIdDemande)
{
    ?>
<label>Numéro de la demande</label><br>
<input type="text" value="<?php echo $unIdDemande->idDemandeCrea ?> " disabled><br>
    <?php

}

?>
<label>Description de la demande</label><br>
<input type="text" value=""><br>
<label>Date de la demande</label><br>
<input type="date" value=""><br>
<label>Nom du service</label><br>
<select id="jecpa2">
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
</body>
</html>