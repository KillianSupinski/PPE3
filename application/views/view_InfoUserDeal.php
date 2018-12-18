<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
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
            <div class='services-inner' onclick="clickDivOffreUser('<?php echo $uneOffre->idOffre; ?>')">
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
<table>
<h1 class="center"> Les demandes de <?php echo $nom; ?></h1>
<?php
    foreach ($DemandeUserDeal as $uneDemande) {
        ?>
        <div class='services-inner' onclick="clickDivDemandeUser('<?php echo $uneDemande->idDemande; ?>',' <?php echo $idUser; ?>')">
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
        </tr>
     <?php
    }
    ?>
</table>
    </div>
</body>
</html>