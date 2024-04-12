<?php 
require_once('../templates/header.php');
?>
<body>
    <main>
        <div class="register-container">
            <h1>Enter CatConnect</h1>
            <?php if (isset($_GET['error'])): ?>
            <p style="color: red;"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>
            <form action="login_process.php" method="POST">
                <div class="register-form">
                    <span>Email</span><input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="register-form">
                    <span>Password</span><input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="login"><span>Login</span></button>
            </form>
            <div class="login-link">
                <span>Doesn't have an account? <a href="register.php">Register Here</a></span>
            </div>
        </div>
    </main>
<?php
require_once('../templates/footer.php');
?>
