<?php
define('PAGE_TITLE', 'De index pagina');
define('ACTIVE', 'index');
require('../views/header.php');
require_once('../source/database.php');

$query = 'SELECT * FROM muziek ORDER BY naam';
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>

<section class="gallerij">
    <header id="gallerij">
        <h2>single</h2>
    </header>
    <ul class="fotos">



        <?php

        while ($single = mysqli_fetch_assoc($result)) {
            require('../public/card.php');
            //( $single );
        }
        echo '</ul></section>';


        require('../views/footer.php');