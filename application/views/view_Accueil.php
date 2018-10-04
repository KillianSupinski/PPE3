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
<div id="divOffre">
<h3>Mes offres</h3>
    <?php
          foreach($lesOffres as $uneOffre)
          {
              echo $uneOffre->descriptionOffre."<br>".$uneOffre->dateOffre."<br>";
          }
    ?>
</div>
<div id="divDemande">
<h3>Mes Demandes</h3>
    <?php
          foreach($lesDemandes as $uneDemande)
          {
              echo $uneDemande->descriptionDemande."<br>".$uneDemande->dateDemande."<br>";
          }
    ?>
</div>
<div id="divDemande">
<h3>Mes deals</h3>
    <?php
    foreach($lesInfoDeals as $uneInfoDeal)
    {
        echo "<image src='". $uneInfoDeal->photoUser."'> <br>";
        echo $uneInfoDeal->nomUser."<br>";             
        echo $uneInfoDeal->dateDeal."<br>".$uneInfoDeal->noteUser1." - ".$uneInfoDeal->noteUser2."<br>";     
    }   
    

     
    ?>
</div>
</body>
</html>