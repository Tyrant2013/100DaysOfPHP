<?php
    $title = 'Hello PHP';
?>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="content">
            <?php 
                echo $title; 
            ?>
        </div>
    </body>
</html>
