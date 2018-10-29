<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styleL.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="<?php echo base_url();?>index.php/ctrl_Accueil/afficherModDemande/" class="modal">
    <h3>Modifier la demande</h3><br/>
            <?php
                foreach($IdModDemande as $unIdModDemande)
                {
            ?>
            <label>Numéro de la demande</label><br/>
            <input type="text" id="<?php echo $unIdModDemande->idDemandeMod?>" disabled>
            <?php
                }
            ?>
            <label>Date de la demande</label><br/>
            <input type="date" id="dateDemande" placeholder="JJ/MM/AAAA"><br/><br/>
            <label>Description de la demande</label><br/>
            <input type="text" id="txtDescriptionDemande" placeholder="Description"><br/><br/>
            <label>Nom du service</label>
            <select name="idServDemandes">
        <?php
            foreach ($lesServices as $unService) {
        ?>
        <option value="<?php echo $unService->idService; ?>"><?php echo $unService->nomService; ?></option>
        <?php
        }
        ?>
        </select>
            <input type="button" id="btnValiderMod" placeholder="Valider la modification" class="btnValiderMod">
    </form>
</body>
</html>