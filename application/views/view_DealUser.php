<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url(); ?>css/styleK.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Page Title</title>
</head>
<body>
    <div>
    <table>
        <tr>
    <?php
        foreach ($lesUsersD as $uneInfoUserD) {
            ?>
            <td>
                <div onclick="AfficherInfoUserDeal(<?php echo $uneInfoUserD->idUser; ?>)">
                    <image width="50"src="<?php echo $uneInfoUserD->photoUser; ?>"><br>
                    <?php echo $uneInfoUserD->nomUser; ?>
                </div>
            </td>
            <?php
        }
    ?>
        </tr>
    </table>
    </div>
</body>
</html>