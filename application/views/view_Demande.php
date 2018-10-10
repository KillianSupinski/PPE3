<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mes demandes</title>
    
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>  
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet"></head>
<body>
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
			
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
               <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/index">Accueil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>				
				<li><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getOffre">Mes offres<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDemande">Mes demandes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDeal">Mes deals<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-retweet"></span></a></li>	
			</ul>
		</div>
	</div>
</nav>
<div class="main">
<div class="container">
<h3>Mes Demandes</h3>
    <?php
          foreach ($lesDemandes as $uneDemande) {
              echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>";
              echo "<div class='our-services-wrapper mb-60'>";
              echo "<div class='services-inner'>";
              echo "<div class='our-services-text'>";
              echo $uneDemande->descriptionDemande.'<br>'.$uneDemande->dateDemande.'<br>';
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