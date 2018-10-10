<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="JS/fonction.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
</head>
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
				<li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="#">Accueil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>				
				<li><a href="#">Mes offres<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="#">Mes demandes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li ><a href="#">Mes deals<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>	
			</ul>
		</div>
	</div>
</nav>
<div class="container">
<div class="main">
<div id="divOffre">
<h3>Mes offres</h3>
    <?php
          foreach ($lesOffres as $uneOffre) {
              echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>";
              echo "<div class='our-services-wrapper mb-60'>";
              echo "<div class='services-inner'>";
              echo "<div class='our-services-text'>";
              echo $uneOffre->descriptionOffre.'<br>'.$uneOffre->dateOffre.'<br>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
    ?>
</div>
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
<h3>Mes deals</h3>
    <?php
    foreach ($lesInfoDeals as $uneInfoDeal) {
        echo "<div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>";
        echo "<div class='our-services-wrapper mb-60'>";
        echo "<div class='services-inner'>";
        echo "<div class='our-services-text'>";
        echo "<image src='".$uneInfoDeal->photoUser."'> <br>";

        echo $uneInfoDeal->nomUser.'<br>';
        echo $uneInfoDeal->dateDeal.'<br>'.$uneInfoDeal->noteUser1.' - '.$uneInfoDeal->noteUser2.'<br>';
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