<?php
session_start();

$users = [
    'user@example.com' => 'password123', // email => password
];

$error = '';

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Basic validation
    if (isset($users[$email]) && $users[$email] === $password) {
        // Successful login
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;

        // Redirect to dashboard or other protected page
        header("Location: welcome.blade.php");
        exit;
    } else {
        $error = 'Invalid email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kedai Omah Londo</title>
    <link rel="stylesheet" href="css/login.css">
    @vite('resources/css/app.css')
</head>
<body>
    <button type="back-btn" class="absolute top-2.5 left-2.5 inline-block text-[#623F19] bg-[#FFF7EA] hover:bg-[#FFF0D5] focus:ring-4 focus:outline-none focus:ring-[#FFDFAF] font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
        <svg class="w-4 h-4 transform rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
        <span class="sr-only">Icon description</span>
    </button>
    <div class="logo">
        <img src="img/logo.png" alt="Kedai Omah Londo Logo">
    </div>
    <div class="login-container">
        <form action="login.php" method="post" class="login-form">
            <h2>LOGIN</h2>
            <h4>Email </h4>
            <input type="email" name="email" placeholder="Email" required>
            <h4>Password</h4>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>
