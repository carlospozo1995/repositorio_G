<header>

    <div class= "header_container">
        <section class="top_header">
            <div>
                <a href="new_products.php"><img src="img/icon_g/new-product.png" alt="" title="Nuevos productos"></a>
            </div>
            <div>
                <a href=""><img src="img/icon_g/location.png" alt="" title="Donde ubicarnos"></a>
            </div>
            <div>
                <img src="img/icon_g/client.png" alt="" title="Servivio al cliente">(04) 274-6215 - 099 437 2046
            </div>
        </section>

        <section class="nav_header">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo_text.png" alt="">
                </a>
            </div>
        
            <div class="search_container">
                <form action="result_search.php" method="GET" id="form_search" autocomplete="off">
                    <input type="search" name="buscar" id="inputSearch" placeholder="¿Qué producto necesita?" value="<?php if(!empty($_GET['buscar'])) {echo $_GET['buscar'];}else{echo "";} ?>">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <ul class="box_search" id="boxSearch">
                </ul>
            </div>
        </section>
    </div>
</header>

<div class="container_menu">
    <?php include "C:/laragon/www/carlos/G/dataBase/backend/bkMenu.php"; ?>
</div>

<section class="container_section" id="container_section">
    