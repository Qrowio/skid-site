<!-- CODED BY QROW#3914 - HTTPS://QROW.ME
CODED BY QROW#3914 - HTTPS://QROW.ME
CODED BY QROW#3914 - HTTPS://QROW.ME-->

<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> <?php echo $sitename?> </title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet"  type='text/css'>      
        <meta name="description" content="<?php echo $description?>">
        <meta name="theme-color" content="<?php echo $color?>">
        <meta property="og:site_name" content="<?php echo $sitename?>">
        <meta property="og:title" content="<?php echo $sitename?>">
        <meta property="og:description" content="<?php echo $description?>">
    </head>
    <body>
<script>
    
</script>
    
        <div class="video-container">
            <div class="color-overlay"></div>            
            <video autoplay loop>
                <source src="<?php echo $video?>" type="video/mp4">
            </video>
        </div>

        <div class="text">
            <h1><?php echo $name ?></h1>        
        <div class="links">
        <?php foreach ($Links as $r2): ?>
            <a href="<?php echo $r2["Link"] ?>"><i class="<?php echo $r2["Icon"] ?>"></i></a>
            <?php endforeach; ?>
        </div>
        </div>

    </body>
</html>

<!-- CODED BY QROW#3914 - HTTPS://QROW.ME
CODED BY QROW#3914 - HTTPS://QROW.ME
CODED BY QROW#3914 - HTTPS://QROW.ME-->
