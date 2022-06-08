<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("puzzle/links-scripts/links.php"); ?>
    <?php require_once("puzzle/links-scripts/scripts.php"); ?>
</head>
<body>
    <?php  require_once("puzzle/navigation.php")?>

    <?php 
        $option_id = $_GET['option'];
        echo '<input type="hidden" value= "'.$option_id.'" id="option_id">';
    ?>

    <div id="loader"><img src="img/loading.gif"></div>
    <div class="container_category">
        <!-- EL CONTENIDO LOS PINTAMOS EN AJAXCATEGORY.JS -->
    </div>
    
    <?php require_once("puzzle/footer.php");?>
    <div>cambios div</div>
</body>
</html>