<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Login Page Template - W3jar.Com</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Login_sign.css">
    <link rel="icon" href="image/logo.png">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container">
            <div class="form-body">
                <h2 class="title">Sign up</h2>
                
                <form action="http://localhost:3000/coffee-shop/signup1.php" class="the-form" method="post">
                    
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                  
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                  
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required >
                  
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                    <input type="submit" value="Sign Up">  
                  </form>
                  <div class="form-footer">
                    <div>
                        <span >Already have an account?</span> <a href="login.php">Log in</a><br>
                        <a href="index.php">continue without one</a><br>
                        <?php
session_start();
if(isset($_GET['error']) && $_GET['error'] === 'duplicate_email'): ?>
    <em style="color: red; font-weight: bold;">Email already exists</em>
<?php endif; ?>



                    </div>
                </div>
            
            </div>

            
        </div>
    </div>
    
</body>
<script src="js/sign_up.js"></script>

</html>