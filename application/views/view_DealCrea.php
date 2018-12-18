<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script>
        $
        (
            function()
            {
                $("#btnD").click
                ( 
                    function()
                    {  
                        var nomDeal = ($("#txtTerme").val());
                    }  
                ) 
            }
        );
    </script>
</head>
<body>
    <?php
    $this->load->library('session');
    $infoUser = $this->session->userdata('infoLog');
    include 'nav.php';
    ?>
    <div class="main">
        <div class="container">
            <div class="fleft">
                    <input type="search" id="nomDeal" name="txtTerme">
                    <button id="btnD" onclick="RechercherDealCrea(($('#nomDeal').val()))">Valider</button>
               
                    <h1 class="center"> Mes demandes</h1>
                <table>
    <?php
    foreach ($lesDemandes as $uneDemande) {
        ?>
        <div>
            <div class='services-inner' id="idDemandeC" onclick="clickDivDemandeCrea('<?php echo $uneDemande->idDemande; ?>')">
                <div class='our-services-img'>
                    <div class='d-flex justify-content-center h-100'>
                        <div class='image_outer_container'>
                            <div class='image_inner_container_demande'>
                                <image src="<?php echo $uneDemande->photoService; ?>"/> <br/>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class='our-services-text'>
                    <h4><?php echo $uneDemande->nomService; ?></h4>
                     <?php echo $uneDemande->descriptionDemande.'<br/>'.$uneDemande->dateDemande; ?><br/>
                    </div>
            </div>
        </div>
     <?php
    }
    ?>
    </table>
    <h1 class="center"> Mes offres </h1>
    <?php
    foreach ($lesOffres as $uneOffre) {
        ?>
            <div id="divClickOffreCrea" class='services-inner' onclick="clickDivOffreCrea('<?php echo $uneOffre->idOffre; ?>')">
                <div class='our-services-img'>
                    <div class='d-flex justify-content-center h-100'>
                        <div class='image_outer_container'>
                            <div class='image_inner_container_offre '>
                                <image src="<?php echo $uneOffre->photoService; ?>"/> <br/>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class='our-services-text'>
                        <h4><?php echo $uneOffre->nomService; ?></h4>
                        <?php echo $uneOffre->descriptionOffre.'<br/>'.$uneOffre->dateOffre; ?><br/>
                    </div>
            </div>

    <?php
    }
    ?>
    </div>
    <div class="fright center"></div>
        <input type="submit" value="Creation d'un deal" class="sticky" onclick="clickBtnValiderCrea()">
        <div id="divUserD"></div>
        <div id="divInfoUserD"></div>
    </div>
    </div>
</div>
</body>
</html>