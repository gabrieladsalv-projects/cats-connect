<?php 
require_once('../templates/header.php');
?>
<body>
    <main>
        <div class="register-container">
            <h1>Join CatConnect</h1>
            <?php if (isset($_GET['error'])): ?>
            <p style="color: red;"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>
            <form action="../../controllers/register_process.php" method="POST">
                <div class="register-form">
                    <span>Name</span><input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="register-form">
                    <span>Username</span><input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="register-form">
                    <span>Email</span><input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="register-form">
                    <span>Password</span><input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="register-form">
                    <span>Confirm Password</span><input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
                <div class="register-form">
                    <span>Date of Birth</span><input type="date" name="birth" id="birth" required>
                </div>
                <button type="submit" name="register"><span>Join Now</span></button>
            </form>
            <div class="login-link">
                <span>Have an account? <a href="login.php">Login Here</a></span>
            </div>
        </div>
    </main>
<?php
require_once('../templates/footer.php');
?>
