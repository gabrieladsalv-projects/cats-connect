<?php
require_once('../templates/header.php');
?>

<main>
    <header>
        <h2>CatConnect</h2>
        <nav>
            <input type="text"><img src="#" alt="Search">Share cat photos
            <ul>
                <li><a href="discover.php">Home</a></li>
                <li><a href="cat-categories.php">Cat Categories</a></li>
                <li><a href="#">Purrfectly Us</a></li>
                <li><a href="../auth/profile.php">My Cat Profile</a></li>
                <li><a href="#" class="share-discover">Share Meow</a></li>
            </ul>
        </nav>
    </header>
    <span>Explore Cat Breeds</span>

</main>

<?php
require_once('../templates/footer.php');
?>