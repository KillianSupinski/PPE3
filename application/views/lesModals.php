<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<meta charset="utf-8" />
<script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
<script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
<script src="<?php echo base_url(); ?>JS/fonction.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>  
<form method="GET" id="offre-form" action = "<?php echo base_url(); ?>index.php/ctrl_Accueil/getNewOffre/" class="modal form1">
<h3 align="center">Création de votre offre</h3>
<fieldset>
<label>Numéro de l'offre</label><br>
<?php
foreach ($IdMaxOffres as $unIdOffre) {
    ?>

<input type="text" class="contact-text" id='idNum' name="idOffre" value="<?php echo $unIdOffre->idOffreCrea; ?> " readonly >
    <?php
}
?>
</fieldset>
<fieldset>
<label>Description de l'offre</label><br>
<input type="text" class="contact-text" id="idDesc" name="descOffre" placeholder="Description de votre offre" required>
</fieldset>
<fieldset>
<label>Date de l'offre</label><br>
<input type="date" class="contact-text" name="dateOffre" required>
</fieldset>
<fieldset>
<label>Nom du service</label><br>
<select class="contact-text" name="idServiceOffre">
<?php
foreach ($lesServicesOffres as $unService) {
    ?>
    <option value="<?php echo $unService->idService; ?>"><?php echo $unService->nomService; ?></option>

    <?php
}
?>
</select>
</fieldset><br>
<fieldset>
<button name="btnOffre" class="contact-submit" type="submit" value="validez">Valider</button>
</fieldset>
<fieldset>
<a rel="modal:close"><button type="button" class="contact-cancel" >Annuler<i class="glyphicon glyphicon-cross"></i></button></a>
</fieldset>
</form>

<form method="GET" id="demande-form" action = "<?php echo base_url(); ?>index.php/ctrl_Accueil/getNewDemande/" class="modal form1">
<?php
foreach ($IdMaxDemandes as $unIdDemande) {
    ?>
<h3 align="center">Création de votre demande</h3>
<fieldset>
<label>Numéro de la demande</label><br>
<input type="text" class="contact-text" name="idDemande" value="<?php echo $unIdDemande->idDemandeCrea; ?> " readonly>
    <?php
}
?>
</fieldset>
<fieldset>
<label>Description de la demande</label><br>
<input type="text" placeholder="Description de votre demande" class="contact-text" name="descDemande" required>
</fieldset>
<fieldset>
<label>Date de la demande</label><br>
<input type="date" class="contact-text" name="dateDemande" required>
</fieldset>
<fieldset>
<label>Nom du service</label><br>
<select class="contact-text" name="idServiceDemande">
<?php
foreach ($lesServicesDemandes as $unService) {
    ?>
    <option value="<?php echo $unService->idService; ?>"><?php echo $unService->nomService; ?></option>
    <?php
}
?>
</select>
</fieldset><br>
<fieldset>
<button name="btnOffre" class="contact-submit" type="submit" value="validez">Valider</button>
</fieldset>
<fieldset>
<a rel="modal:close"><button type="button" class="contact-cancel" >Annuler<i class="glyphicon glyphicon-cross"></i></button></a>
</fieldset>
</form>
