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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styleL.css" rel="stylesheet">
    <?php
        include ('modifierDemande.php');
        include ('modifierOffre.php');
    ?>
</head>
<body>
    <?php
        $this->load->library('session');
        $infoUser = $this->session->userdata('infoLog');
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
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/ctrl_Accueil/index"><?php echo $infoUser['login']; ?></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/index">Accueil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>				
				<li><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getOffre">Mes offres<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDemande">Mes demandes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDeal">Mes deals<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-retweet"></span></a></li>	
                <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/logout">Deconnexion<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>	
			</ul>
		</div>
	</div>
</nav>
<div class="main">
<div class="container">

<h3>Mes offres <a href="#offre-form" title="Ajouter une nouvelle offre" rel="modal:open">+</a></h3>
    <?php
    foreach ($lesOffres as $uneOffre) 
    {
    ?>
    <a href='#modOffre-form' title='Modifier cette offre' rel='modal:open' onclick=afficherModOffre(<?php echo $uneOffre->idOffre;?>)'>
    <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>
        <div class='our-services-wrapper mb-60'>
            <div class='services-inner'>
                <div class='our-services-img'>
                    <div class='d-flex justify-content-center h-100'>
                        <div class='image_outer_container'>
                            <div class='image_inner_container'>
                                <image src="<?php echo $uneOffre->photoService ; ?>"/> <br/>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class='our-services-text'>
                        <?php echo $uneOffre->descriptionOffre."<br/>".$uneOffre->dateOffre ; ?><br/>
                    </div>
            </div>
        </div>
    </div>
    </a>
    <?php
    }
    ?>
<br><br><br><br><br><br><br><br>
<h3>Mes Demandes <a href="#demande-form" title="Ajouter une nouvelle demande" rel="modal:open">+</a></h3>
<?php
    foreach ($lesDemandes as $uneDemande)
    {
    ?>
    <a href='#modDemande-form' title='Modifier cette demande' rel='modal:open' onclick=afficherModDemande(<?php echo $uneDemande->idDemande;?>)'>
    <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>
        <div class='our-services-wrapper mb-60'>
            <div class='services-inner'>
                <div class='our-services-img'>
                    <div class='d-flex justify-content-center h-100'>
                        <div class='image_outer_container'>
                            <div class='image_inner_container'>
                                <image src="<?php echo $uneDemande->photoService ; ?>"/> <br/>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class='our-services-text'>
                        <?php echo $uneDemande->descriptionDemande."<br/>".$uneDemande->dateDemande ; ?><br/>
                    </div>
            </div>
        </div>
    </div>
    </a>
    <?php
    }
    ?>
<br><br><br><br><br><br><br><br>
<h3>Mes deals <a href="#deal-form" rel="modal:open">+</a></h3> 
<?php
    foreach ($lesInfoDeals as $uneInfoDeal)
    {
    ?>
    <a href='#modDeals-form' title='Modifier ce deal' rel='modal:open' onclick()'>
    <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>
        <div class='our-services-wrapper mb-60'>
            <div class='services-inner'>
                <div class='our-services-img'>
                    <div class='d-flex justify-content-center h-100'>
                        <div class='image_outer_container'>
                            <div class='image_inner_container'>
                                <image src="<?php echo $uneInfoDeal->photoUser ; ?>"/> <br/>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class='our-services-text'>
                        <?php echo $uneInfoDeal->nomUser.'<br>'.$uneInfoDeal->dateDeal.
                        '<br>'.$uneInfoDeal->noteUser1.' - '.$uneInfoDeal->noteUser2.'<br>' ; 
                        ?><br/>
                    </div>
            </div>
        </div>
    </div>
    </a>
    <?php
    }
    ?>
</div>
</div>

</body>
</html>