<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonctionK.js"></script>
    <title>Page Title</title>
</head>
<body>
    <h1 class="center"><h1>
    <?php
        foreach ($lesUsersD as $uneInfoUserD) {
            ?>
            <image src="<?php echo $uneInfoUserD->photoUser; ?>">
            <?php echo $uneInfoUserD->nomUser; ?>
            
            <?php
        }
    ?>
</body>
</html>