<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SignIn & SignUp</title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <!-- Login Form -->
            <form action="signin.php" method="post" class="sign-in-form">
                <h2 class="title">Log in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Email" name="email" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required />
                </div>
                <input type="submit" value="Login" class="btn solid" name="login" />
            </form>
            <!-- Signup Form -->
            <form action="signup.php" method="post" class="sign-up-form">
                <h2 class="title">Sign Up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Name" name="Name" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required />
                </div>
                <input type="submit" value="Sign Up" class="btn solid" name="signup" />
            </form>
        </div>
    </div>
    <div class="panels-container">
        <!-- Panels for switching between sign-in and sign-up forms -->
        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>Let's get you started with our community!</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>Welcome back! Log in to your account.</p>
                <button class="btn transparent" id="sign-in-btn">Log In</button>
            </div>
        </div>
    </div>
</div>
<script src="./app.js"></script>
</body>
</html>