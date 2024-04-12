<?php
require_once('../templates/header.php');
?>
<main>
    <div class="container-discover">
        <header>
            <h2>CatConnect : Me</h2>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href=".categories-discover-container">Cat Categories</a></li>
                    <li><a href="#">Purrfectly Us</a></li>
                    <li><a href="./auth/edit-profile.php">My Cat Profile</a></li>
                    <li><a href="#" class="share-discover">Share Meow</a></li>
                </ul>
            </nav>
        </header>
        <div class="card-discover">
            <h1>Your purrfect cat community.
                Share. Connect. Explore. Meow!
            </h1>

            <input type="text" placeholder="Search cat breed or owner">
            <a href="search.php">Find</a>
        </div>
        <div class="cat-categories-discover">
            <h2>Cat Categories</h2>
            <div class="categories-discover-container">
                <a href="#"><img src="../../../public/img/icon-paw.png" alt="">Cat Breeds</a>
                <a href="#"><img src="../../../public/img/icon-cat.svg" alt="">Cat Toys</a>
                <a href="#"><img src="../../../public/img/icon-baseball-bat-ball.svg" alt="">Cat Events</a>
                <a href="#"><img src="../../../public/img/icon-cat.svg" alt="">Cat Health</a>
                <a href="#"><img src="../../../public/img/icon-cat.svg" alt="">Cat Nutrition</a>
                <a href="#"><img src="../../../public/img/icon-cat.svg" alt="">Cat Grooming</a>
                <a href="#"><img src="../../../public/img/icon-cat.svg" alt="">Cat Behavior</a>
                <a href="#"><img src="../../../public/img/icon-cat.svg" alt="">Cat Care</a>
            </div>
        </div>
        <div class="recent-cat-photos-discover">
            <h2>Recent Cat Photos</h2>
            <?php
            // Consulta ao banco de dados para buscar postagens de outros usuários
            $query = "SELECT * FROM posts ORDER BY post_date DESC LIMIT 8"; // Ajuste conforme necessário
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $postagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Verificar se existem postagens para exibir
            if ($posts) {
                // Loop pelas postagens e exibir cada uma dentro de um bloco
                foreach ($posts as $post) {
                    ?>
                    <div class="post">
                        <img src="<?php echo $post['url_img']; ?>" alt="Cat Photo">
                        <h3><?php echo $post['title']; ?></h3>
                        <><?php echo $post['author']?></p>
                        <p><?php echo $post['description']; ?></p>
                        
                    </div>
                    <?php
                }
            } else {
                ?>
                <p>Nenhuma postagem encontrada.</p>
                <?php
            }
            ?>
        </div>
            <p>Discover more breeds</p>
        </div>
</main>

<?php
require_once('../templates/footer.php');
?>

<script>
    document.getElementById("submitButton").addEventListener("click", function() {
        document.getElementById("formId").submit();
    });
</script>

