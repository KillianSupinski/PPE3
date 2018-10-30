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
<form method="GET" id="offre-form" action = "<?php echo base_url(); ?>index.php/ctrl_Accueil/getNewOffre/" class="modal">

<label>Numéro de l'offre</label><br>
<?php
foreach ($IdMaxOffres as $unIdOffre) {
     ?>

<input type="text" id='idNum' name="idOffre" value="<?php echo $unIdOffre->idOffreCrea; ?> " readonly ><br>
    <?php
 }
?>
<label>Description de l'offre</label><br>
<input type="text" id="idDesc" name="descOffre"><br>
<label>Date de l'offre</label><br>
<input type="date" name="dateOffre"><br>
<label>Nom du service</label><br>
<select name="idServiceOffre">
<?php
foreach ($lesServicesOffres as $unService) {
    ?>
    <option value="<?php echo $unService->idService; ?>"><?php echo $unService->nomService; ?></option>

    <?php
}
?>
</select>
<br><br>
<input type="submit" name="btnOffre" value="validez">
</form>

<form method="GET" id="demande-form" action = "<?php echo base_url(); ?>index.php/ctrl_Accueil/getNewDemande/" class="modal">
<?php
foreach ($IdMaxDemandes as $unIdDemande) {
    ?>
<label>Numéro de la demande</label><br>
<input type="text" name="idDemande" value="<?php echo $unIdDemande->idDemandeCrea; ?> " readonly><br>
    <?php
}
?>
<label>Description de la demande</label><br>
<input type="text" name="descDemande"><br>
<label>Date de la demande</label><br>
<input type="date" name="dateDemande"><br>
<label>Nom du service</label><br>
<select name="idServiceDemande">
<?php
foreach ($lesServicesDemandes as $unService) {
    ?>
    <option value="<?php echo $unService->idService; ?>"><?php echo $unService->nomService; ?></option>
    <?php
}
?>
</select><br><br>
<input type="submit" name="btnDemande" value="validez">
</form>
</body>
</html>