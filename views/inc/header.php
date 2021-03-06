<header>
    <ul id="navList">
        <li class="normal">
            <img id="hamburger" src="/views/img/hamburger.png" width="40" alt="menu" tabindex="-1">
            <div id="menu" tabindex="-1">
                <nav>
                    <ul>
                        <li>
                            <a href="/" tabindex="-1">Home</a>
                        </li>
                        <li>
                            <a href="/register" tabindex="-1">Register</a>
                        </li>
                        <li>
                            <a href="/login" tabindex="-1">Login</a>
                        </li>
                        <li>
                            <a href="/privacy" tabindex="-1">About</a>
                        </li>
                        <li>
                            <a href="/about" tabindex="-1">Privacy</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="cancelMenu" tabindex="-1"></div>
        </li>
        <li class="logo">
            <img src="/views/img/logo.png" width="170" alt="flatnix">
        </li>
        <?php
        if(session()->get("user") != null){
        ?>
        <li class="username">
            <p style="font-family: arial; font-size: 1.3em; white-space: nowrap; margin-left: 20px">
                Welkom, <?= session()->get("user")->username ?>
            </p>   
        </li>
        <?php } ?>
        <li class="normal">
            <form id="search" method="POST" action="/filter">
                <img src="/views/img/search.png" width="32" alt="search" tabindex="-1">
                <div id="searchBox" tabindex="-1">
                    <input type="text" id="searchBar" placeholder="Search" name="search" tabindex="1">

                    <label for="genre" id="genreTitle">Filter genres</label>
                    <input style="display:none" id="genre">
                    <?php
                    $sql = "SELECT genre_name FROM Genre";
                    $stmt = conn()->prepare($sql);
                    $stmt->execute();
                    $genres = $stmt->fetchAll();
                    foreach($genres??[] as $genre) { ?>
                    <div class="searchBox-group">
                        <input id="<?= $genre->genre_name ?>" type="checkbox" name="<?= $genre->genre_name ?>" tabindex="1">
                        <label for="<?= $genre->genre_name ?>" class="searchBox-group-label"><?= $genre->genre_name ?></label>
                    </div>
                    <?php } ?>

                    <div class="searchBox-group">
                        <input type="checkbox" name="police" id="police" tabindex="1">
                        <label for="police" class="searchBox-group-label">Police</label>
                    </div>

                    <div class="searchBox-group">
                        <input type="checkbox" name="war" id="war" tabindex="1">
                        <label for="war" class="searchBox-group-label">War</label>
                    </div>

                    <div class="searchBox-group">
                        <input type="checkbox" name="zombie" id="zombie" tabindex="1">
                        <label for="zombie" class="searchBox-group-label">Zombie</label>
                    </div>

                </div>
                <input type="submit" style="display: none">
            </form>
        </li>
    </ul>
</header>