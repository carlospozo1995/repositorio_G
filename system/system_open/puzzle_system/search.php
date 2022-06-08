<form action="search_result.php" method="GET" id="">
    <input type="search" name="buscar" id="search_product" value="<?php if(!empty($_GET['buscar'])) {echo $_GET['buscar'];}else{echo "";} ?>">
    <button type="submit">Buscar</button>
</form>