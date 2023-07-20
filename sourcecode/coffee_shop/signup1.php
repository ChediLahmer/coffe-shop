<?php   
$is_invalid=false;
$password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT);
$mysqli=require('./database.php');

// Check for duplicate email
$duplicate_check_stmt = $mysqli->prepare("SELECT email FROM user WHERE email = ?");
$duplicate_check_stmt->bind_param("s", $_POST["email"]);
$duplicate_check_stmt->execute();
$duplicate_check_result = $duplicate_check_stmt->get_result();

if ($duplicate_check_result->num_rows > 0) {
    header("Location: sign up.php?error=duplicate_email");
    exit;
    
}

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: login.php");
    exit;
    
} else {
    session_start();
    $_SESSION['error'] = 'Error creating user';
    header("Location: sign up.php");
    exit;
}
?>
