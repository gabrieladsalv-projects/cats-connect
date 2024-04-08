<?php 
require_once('templates/header.php');
?>
<body>
    <main>
        <div class="register-container">
            <h1>Join CatConnect</h1>
            <form action="auth.php" method="POST">
                name<input type="text" name="name" placeholder="name" required>
                username<input type="text" name="username" placeholder="username" required>
                email<input type="email" name="email" placeholder="e-mail" required>
                password<input type="password" name="password" placeholder="password" required>
                confirm password<input type="password" name="password" placeholder="confirm password" required>
                date of birth<input type="date" name="birth" id="birth" required>
                <button type="submit" name="register"><span>Join Now</span></button>
            </form>
            <div class="login-link">
                <span>Have an account? <a href="login.php">Login Here</a></span>
            </div>
        </div>
    </main>
<?php
require_once('templates/footer.php');
?>
