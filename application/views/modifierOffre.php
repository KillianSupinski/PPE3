<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JQuery/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>JQuery/jquery-ui.min.js"></script>
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
    <form method="GET" id="modOffre-form" action = "<?php echo base_url(); ?>index.php/ctrl_Accueil/ModifierLOffre/" class="modal form1">
        <h3>Modifier l'offre</h3>
            <label>Liste des services disponibles</label>
            <select class="form-control" id="modLOffre">
                <?php
                    foreach ($lesServicesOffres as $unService) {
                        ?>
                        <option name="nomOffre" value="<?php echo $unService->idService; ?>" ><?php echo $unService->nomService.' - '.$unService->idService; ?></option>
                <?php
                    }
                ?>
            </select>
            <label>Description de l'offre</label>
            <input type="textarea" class="form-control" id="descOffre" width="300px">
            <br/>
            <button type="button" name="btnModOffre" onclick="modificationOffre()">Valider la modification <i class="glyphicon glyphicon-ok"></i></button></div>
        </div>
    </form>
</body>
</html>