<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo (ACTIVE === 'index') ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (ACTIVE === 'about') ? 'active' : ''; ?>" href="about.php">Link</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (ACTIVE === 'single') ? 'active' : ''; ?>" href="single.php">muziek</a>

                </li>
            </ul>
            <form class="d-flex" role="search" action="/search.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchquery">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>