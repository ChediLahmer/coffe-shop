<?php
// Connect to the database
$host="localhost";
$dbname="login_db";
$username = "root";
$password = "";
$mysqli = new mysqli($host,$username,$password,$dbname);
if($mysqli->connect_errno){
    die("connection error" .$mysqli->connect_errno );
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email address";
    } elseif (strlen($new_password) < 8) {
        $error_message = "Password must be at least 8 characters";
    } elseif ($new_password !== $confirm_password) {
        $error_message = "Passwords do not match";
    } else {
        // Check if email exists in database
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = $mysqli->query($sql);

        if ($result->num_rows == 0) {
            $error_message = "Email not found";
        } else {
            // Generate new password hash
            $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

            // Update password hash in database
            $sql = "UPDATE user SET password_hash='$password_hash' WHERE email='$email'";
            $result = $mysqli->query($sql);

            if ($result) {
                $success_message = "Password updated successfully";
            } else {
                $error_message = "Failed to update password";
            }
        }
    }
}
?>
<style>


input[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>
<!-- HTML form -->
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
                <h2 class="title">reset password</h2>
                <form    method="post" class="the-form">
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required><br>
                    <label for="new_password">New password:</label>
					<input type="password" name="new_password" id="new_password" required placeholder="enter your password"><br>
					<label for="confirm_password">Confirm new password:</label>
					<input type="password" name="confirm_password" id="confirm_password" required placeholder="re-write your password"><br>

                    <input type="submit" value="Reset password">

                </form>
                <div class="form-footer">
                    <?php if (isset($success_message)) { ?>
                        <em style="color: green; font-weight: bold;"><?php echo $success_message ?></em>
                        <?php } elseif (isset($error_message)) { ?>
                        <em style="color: red; font-weight: bold;"><?php echo $error_message ?></em>
                            <?php } ?>
                    <div>
                        <a href="login.php">back to login</a>

                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
<script src="js/login.js"></script>

</html>



