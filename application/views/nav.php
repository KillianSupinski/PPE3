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
<<<<<<< HEAD
                <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDeal">Mes deals<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer"></span></a></li>
=======
				<li class="dropdown">
					<a  class="dropdown-toggle" data-toggle="dropdown">Mes deals<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/getDeal">Mes Deals</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/afficherCreaDeal">Creer un Deal</a></li>
				</ul>	
				</li>
>>>>>>> origin/master
                <li ><a href="<?php echo base_url(); ?>index.php/ctrl_Accueil/logout">Deconnexion<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>	
			</ul>
		</div>
	</div>
</nav>