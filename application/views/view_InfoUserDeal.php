<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
<<<<<<< HEAD
=======
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
>>>>>>> origin/master
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<<<<<<< HEAD
</head>
=======
>>>>>>> origin/master
<body>
    <div class="fright">
<?php
$i = 0;
$nom = $nomUsers[$i]->nomUser;
$idUser = $nomUsers[$i]->idUser;
?>
<h1 class="center"> Les offres de <?php  echo $nom; ?> </h1>
    <?php
    foreach ($OffreUserDeal as $uneOffre) {
        ?>
            <div class='services-inner neutreO2' onclick="clickDivOffreUser('<?php echo $uneOffre->idOffre; ?>')">
                <div class='our-services-img'>
                    <div class='d-flex justify-content-center h-100'>
                        <div class='image_outer_container'>
                            <div class='image_inner_container_offre '>
                                <image src="<?php echo $uneOffre->photoService; ?>"/> <br/>
                            </div>
                            <script>
                                $(".neutreO2").on("click", function() {
                                    $(".neutreO2").removeClass('selectO2')
                                $(this).addClass("selectO2");
                                }); 
                            </script>
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
<table>
<h1 class="center"> Les demandes de <?php echo $nom; ?></h1>
<?php
    foreach ($DemandeUserDeal as $uneDemande) {
        ?>
        <div class='services-inner neutreD2' onclick="clickDivDemandeUser('<?php echo $uneDemande->idDemande; ?>',' <?php echo $idUser; ?>')">
                <div class='our-services-img'>
                    <div class='d-flex justify-content-center h-100'>
                        <div class='image_outer_container'>
                            <div class='image_inner_container_demande'>
                                <image src="<?php echo $uneDemande->photoService; ?>"/> <br/>
                            </div>
                            <script>
                                $(".neutreD2").on("click", function() {
                                    $(".neutreD2").removeClass('selectD2')
                                $(this).addClass("selectD2");
                                }); 
                            </script>
                        </div>
                    </div>
                </div>
                    <div class='our-services-text'>
                    <h4><?php echo $uneDemande->nomService; ?></h4>
                     <?php echo $uneDemande->descriptionDemande.'<br/>'.$uneDemande->dateDemande; ?><br/>
                    </div>
            </div>
        </tr>
     <?php
    }
    ?>
</table>
    </div>
</body>
</html>