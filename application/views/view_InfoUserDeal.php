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
<h1 class="center"> Mes demandes</h1>
<table>
    
<?php
    foreach ($DemandeUserDeal as $uneDemande) {
        ?>

        <div class='services-inner'>
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
    <h1 class="center"> Mes offres </h1>
    <?php
    foreach ($OffreUserDeal as $uneOffre) {
        ?>
            <div class='services-inner'>
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
</body>
</html>