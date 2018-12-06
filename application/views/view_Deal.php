<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mes deals</title>
    
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php
$this->load->library('session');
$infoUser = $this->session->userdata('infoLog');
include 'nav.php';
?>
<div class="main">
<div class="container">
    <h3>Mes deals <a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/afficherCreaDeal/" title="Ajouter un nouveau deal"  style="font-size:17px" class="glyphicon glyphicon-plus-sign"></a></h3>
    <?php
    $i = 0;
    foreach ($lesInfoDeals as $uneInfoDeal) {
        echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>";
        echo "<div class='our-services-wrapper mb-60'>";
        echo "<div class='services-inner'>";
        echo" <div class='our-services-img'>";
        echo  "<div class='d-flex justify-content-center h-100'>";
        echo "<div class='image_outer_container'>";
        echo "<div class='image_inner_container_deal'>";
        echo "<image src='".$uneInfoDeal->photoUser."'> <br>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo "<div class='our-services-text'>";
        echo  '<h4>'.$uneInfoDeal->nomUser.'</h4>';
        echo $nomDealService2[$i]->nomService;
        ++$i;
        echo '<br> VS <br>';
        echo $uneInfoDeal->nomService;
        echo '<br><br>';
        echo $uneInfoDeal->nomUser.'<br>'.$uneInfoDeal->dateDeal.'<br>'.$uneInfoDeal->noteUser1.' - '.$uneInfoDeal->noteUser2.'<br>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>
</div>
</div>
</body>
</html>