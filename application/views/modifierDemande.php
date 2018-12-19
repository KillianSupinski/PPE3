<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
<<<<<<< HEAD
=======
    <script src="<?php echo base_url(); ?>JQuery/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>JQuery/jquery-ui.min.js"></script>
>>>>>>> origin/Laura-Klinger
    <script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styleL.css" rel="stylesheet">
</head>
<body>
<form id="modDemande-form" class="modal">
    <div id="divModalDemande" class="modal:open">

    </div>
</form>
=======
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" rel="stylesheet"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>css/styleL.css" rel="stylesheet"/>
</head>
<body>
    <form method="GET" id="modDemande-form" action="<?php echo base_url(); ?>index.php/ctrl_Accueil/ModifierLaDemande/" class="modal form1">
        <h3>Modifier la demande</h3>
        <label>Liste des services disponibles</label>
        <select class="form-control" id="modLaDemande">
            <?php
                foreach ($lesServicesDemandes as $unService)
                {
            ?>
                    <option value="<?php echo $unService->idService ?>" ><?php echo $unService->nomService." - ".$unService->idService ; ?></option>
            <?php
                }
            ?>
        </select><br/>
        <label>Description de la demande</label><br/>
        <input type="textarea" class="form-control" id="descDemande" width="300px">
        <br/><label>Date de modification</label>
        <br/><input type="date" id="dateDemande"><br/>
        <br/><button type="button" name="btnmodDemande" onclick="modificationDemande(descDemande, idService, idDemande)">Valider la modification <i class="glyphicon glyphicon-ok"></i></button></div>
    </form>
>>>>>>> origin/Laura-Klinger
</body>
</html>