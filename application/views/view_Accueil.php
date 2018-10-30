<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
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
include 'lesModals.php';
?>
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/ctrl_Accueil/index"><?php echo $infoUser['login']; ?> <image width="30"src="<?php echo $infoUser['photoUser']; ?>"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
            <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/index">Accueil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getOffre">Mes offres<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tag"></span></a></li>
                <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDemande">Mes demandes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li>
                <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDeal">Mes deals<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer"></span></a></li>
                <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/logout">Deconnexion<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>	
			</ul>
		</div>
	</div>
</nav>
<div class="main">
<div class="container">

<h3>Mes offres <a href="#offre-form" title="Ajouter une nouvelle offre" rel="modal:open" style="font-size:17px" class="glyphicon glyphicon-plus-sign"></a></h3>
<table>
    <td>
    <?php
          foreach ($lesOffres as $uneOffre) {
              echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>";
              echo "<div class='our-services-wrapper mb-60'>";
              echo "<div class='services-inner'>";
              echo" <div class='our-services-img'>";
              echo  "<div class='d-flex justify-content-center h-100'>";
              echo "<div class='image_outer_container'>";
              echo "<div class='image_inner_container_offre '>";
              echo "<image src='".$uneOffre->photoService."'> <br>";
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo "<div class='our-services-text'>";
              echo '<h4>'.$uneOffre->nomService.'</h4>';
              echo $uneOffre->descriptionOffre.'<br>'.$uneOffre->dateOffre.'<br>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
    ?>
    </td>
</table>
    <h3>Mes demandes <a href="#demande-form" title="Ajouter une nouvelle demande" rel="modal:open">+</a></h3></h3>
<table>
    <td>
    <?php
          foreach ($lesDemandes as $uneDemande) {
              echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>";
              echo "<div class='our-services-wrapper mb-60'>";
              echo "<div class='services-inner'>";
              echo" <div class='our-services-img'>";
              echo  "<div class='d-flex justify-content-center h-100'>";
              echo "<div class='image_outer_container'>";
              echo "<div class='image_inner_container_demande'>";
              echo "<image src='".$uneDemande->photoService."'> <br>";
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo "<div class='our-services-text'>";
              echo '<h4>'.$uneDemande->nomService.'</h4>';
              echo $uneDemande->descriptionDemande.'<br>'.$uneDemande->dateDemande.'<br>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
    ?>
    </td>
</table>
<h3>Mes deals</h3>  

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
<<<<<<< HEAD
        echo '<h4>'.$uneInfoDeal->nomUser.'</h4>';
        echo  $uneInfoDeal->dateDeal.'<br>'.$uneInfoDeal->noteUser1.' - '.$uneInfoDeal->noteUser2.'<br>';
=======
        echo  '<h4>'.$uneInfoDeal->nomUser.'</h4>';
        echo $nomDealService2[$i]->nomService;
        ++$i;
        echo '<br> VS <br>';
        echo $uneInfoDeal->nomService;
        echo '<br><br>';
        echo $uneInfoDeal->nomUser.'<br>'.$uneInfoDeal->dateDeal.'<br>'.$uneInfoDeal->noteUser1.' - '.$uneInfoDeal->noteUser2.'<br>';
>>>>>>> killianSupinski
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    ?>
</div>
</div>
</body>
</html>