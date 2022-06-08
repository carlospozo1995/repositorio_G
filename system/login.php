<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="css_system/general_style.css">
    <link rel="stylesheet" href="../libs/css/fontawesome/css-all-fonta/all.css">
    <title>Créditos GUAMAN - Login</title>
</head>
<body>
    <?php include "backend_system/bk_login.php"; ?>
    <section class="login_container">
        <!-- <img src="" alt=""> -->
        <form action="" method="POST" autocomplete="off">
            <!-- <img src="" alt=""> -->
            <h2>Sign In</h2>
            <!-- <img src="img_system/login_user.png" alt=""> -->

            <input type="text" name="user" placeholder="Usuario" value="<?php if(!empty($_POST)){ echo $user;}else{echo "";}?>">
            <input type="password" name="password" placeholder="Contraseña">
            <div class="msm_alert"><?php echo $alert; ?></div>
            <input type="submit" value ="LOGIN">
            
        </form>
        
        
    </section>
</body>
</html>