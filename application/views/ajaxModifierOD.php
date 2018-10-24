<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<form id="modOffre-form" class="modal">
<center><h3>Modifier l'offre</h3><br/>
<?php
foreach($IdMaxModOffre as $unIdMaxModOffre)
{
?>
<label>Numéro de l'offre</label><br/>
<input type="text" value="<?php echo base_url() $unIdMaxModOffre->idOffreMod ?>" disabled>
<?php
}
?>
<label>Date de l'offre</label><br/>
<input type="date" value="jj/mm/aa"><br/><br/>
<label>Description de l'offre</label><br/>
<input type="text" value="test"><br/><br/>
<input type="button" value="Valider la modification" class="btnValiderMod"></center>
</form>
<form id="modDemande-form" class="modal">
<center><h3>Modifier la demande</h3><br/>
<?php
foreach($IdMaxModDemande as $unIdMaxModDemande)
{
?>
<label>Numéro de la demande</label><br/>
<input type="text" value="<?php echo base_url() $unIdMaxModDemande->idDemandeMod ?>" disabled>
<?php
}
?>
<label>Date de la demande</label><br/>
<input type="date" value="" placeholder="jj/mm/aa"><br/><br/>
<label>Description de la demande</label><br/>
<input type="text" value="" placeholder="test"><br/><br/>
<input type="button" value="" placeholder="Valider la modification" class="btnValiderMod"></center>
</form>
<form id="modDeals-form" class="modal">
<center><h3>Modifier le deal</h3><br/>
<label>Date du deal</label><br/>
<input type="date" value="jj/mm/aa"><br/><br/>
<label>Description du deal</label><br/>
<input type="text" value="test"><br/><br/>
<input type="button" value="Valider la modification" class="btnValiderMod"></center>
</form>
</body>
</html> 