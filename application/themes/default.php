<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title><?php echo $titre; ?></title>
        <meta name="viewport" content="width=device-width, 
              initial-scale=1.0, 
              maximum-scale=1.0, 
              user-scalable=no">

<!--<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />-->
            <?php foreach ($css as $url): ?>
        <!--<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />-->
            <?php endforeach; ?>
            <link rel="stylesheet" href="<?php echo base_url("assets/css/screen.css"); ?>" />
            <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
            <link rel="stylesheet" href="<?php echo base_url("assets/css/social-network2.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-theme.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
            <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.3.min.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/collapse.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-carousel.js"); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-transation.js"); ?>"></script>

    </head>

    <body>
        
        <div id="contenu">
            <?php echo $output; ?>
        </div>

        <?php foreach ($js as $url): ?>
            <script type="text/javascript" src="<?php echo $url; ?>"></script>
        <?php endforeach; ?>

    </body>
</html>

