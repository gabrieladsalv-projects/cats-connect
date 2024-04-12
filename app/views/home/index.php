<?php 
    require_once('../templates/header.php');
?>
<body>
    <header>
        <nav>
            <ul>
                <li><h2>CATCONNECT</h2></li>
                <li><a href="../auth/register.php" class="btn-join"><span>Join Now</span></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-main">
          <div class="container-text">
            <h1>Discover cat breeds</h1>
            <p>Share photos and videos of your cat with other cat lovers</p>
            <a href="../auth/register.php" class="btn-join pink"><span>Join Now</span></a>
          </div>
          <div class="container-image">
            <img src="../../../public/img/cat-card.jpg" alt="Cat">
          </div>
        </div>
        <div class="container-review">
            <h2>What our users say</h2>
            <div class="scroll-container" onclick="showNextParagraph()">
                <div class="scroll-item">
                    <div class="paragraph1">
                        <p>"I love CatConnect! It's the best place to share photos of my cat and meet other cat lovers."</p>
                        <span>John Smith</span>
                    </div>
                    <div class="paragraph2"  style="display: none;">
                        <p>"I've learned so much about different cat breeds on CatConnect. It's a great community!"</p>
                        <span>Emily Johnson</span>
                    </div>
                    <div class="paragraph3"  style="display: none;">
                        <p>"CatConnect is my favorite app. I can't get enough of all the cute cat photos!"</p>
                        <span>Michael Williams</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
    let currentParagraph = 1;

    function showNextParagraph() {
    currentParagraph++;
    if (currentParagraph > 3) {
        currentParagraph = 1;
    }

    for (let i = 1; i <= 3; i++) {
        const paragraph = document.querySelector(`.paragraph${i}`);
        if (i === currentParagraph) {
        paragraph.style.display = 'block';
        } else {
        paragraph.style.display = 'none';
        }
        }
    }
</script>
<?php
    require_once('../templates/footer.php');
?>