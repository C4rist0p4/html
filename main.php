<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page Title</title>
        <meta content="IE=edge" http-equiv="X-UA-Compatible" />
        <meta name="viewport" content="width=device-width,initial-scale=1"  />
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400" rel="stylesheet">
        <link 
            rel="stylesheet" 
            href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
            integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
            crossorigin="anonymous" />
    </head>
    <body>
        <?php require(__DIR__ . "/inc/header.php"); ?>
        <?php require(__DIR__ . "/inc/service.php"); ?>
        <?php require(__DIR__ . "/inc/feature.php"); ?>
        <?php require(__DIR__ . "/inc/clients.php"); ?>
        <?php require(__DIR__ . "/inc/logos.php"); ?>
        <?php require(__DIR__ . "/inc/team.php"); ?>
        <?php require(__DIR__ . "/inc/message.php"); ?>
        <?php require(__DIR__ . "/inc/footer.php"); ?>
        
        <script type="text/javascript" src="./vendor/jquery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="./vendor/jpanelmenu/jquery.jpanelmenu.js"></script>
        <script type="text/javascript" src="./vendor/modernizr/modernizr-custom.js"></script>

        <script type="text/javascript">  
        
            jQuery(document).ready(function($) { 
                
                var jPM = $.jPanelMenu({
                    menu: '.side-menu',
                    trigger: '#side-menu-trigger',
                    direction: 'right'
                });
                
                jPM.on();
                $(".side-menu a").click(function() {
                    jPM.close();
                });
            });
        </script>
    </body>
</html>