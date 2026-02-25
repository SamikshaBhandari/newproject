<?php
// Define a dummy username and password for testing
$correct_username = "admin";
$correct_password = "password123";

$message = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = $_POST['username'];
    $pass_input = $_POST['password'];

    // Basic Validation
    if ($user_input == $correct_username && $pass_input == $correct_password) {
        $message = "<b style='color:green;'>Login Successful! Welcome, Admin.</b>";
    } else {
        $message = "<b style='color:red;'>Invalid Username or Password!</b>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple PHP Login</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; margin-top: 50px; }
        .login-box { border: 1px solid #ccc; padding: 20px; border-radius: 8px; box-shadow: 2px 2px 10px #aaa; }
        input { display: block; margin: 10px 0; padding: 8px; width: 200px; }
        button { background: #28a745; color: white; border: none; padding: 10px; cursor: pointer; width: 100%; }
    </style>
</head>
<body>

<div class="login-box">
    <h3>Login Page</h3>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required>
        
        <label>Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
    
    <p><?php echo $message; ?></p>
</div>

</body>
</html>