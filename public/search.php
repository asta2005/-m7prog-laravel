<?php
define('PAGE_TITLE', 'De zoek pagina');
define('ACTIVE', 'search');

require_once('../source/database.php');


$zoekterm = '';
if (isset($_GET['searchquery'])) {
    $zoekterm = $_GET['searchquery'];
}

include('../views/header.php');
?>
<main class="container my-5">
    <h2>Je zocht op: `<?= $zoekterm ?>`</h2>
    <div class="row">
        <?php

        $query = 'SELECT muziek.*, artist.artist artist_title, genre.genre as genre_title
        FROM muziek
        LEFT JOIN artist ON muziek.artist_id = artist.id
        LEFT JOIN genre ON muziek.genre_id = genre.id
        WHERE muziek.naam LIKE ?';


       
        $stmt = $connection->prepare($query);

        $parameter = '%' . $zoekterm . '%';
        $stmt->bind_param('s', $parameter);

        /* execute query */
        $stmt->execute();

        /* bind result varbles */
        $result = $stmt->get_result();

        /* define an array with the result as long as there is a result */
        while ($single = mysqli_fetch_assoc($result)) {
            include('../public/card.php');
        }
        ?>
    </div>
</main>

<?php
include('../views/footer.php');