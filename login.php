<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Aviation Cybersecurity</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <style>
        body {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            background-color: #f7f7f7;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #e60606;
            text-align: center;
        }
        button {
            background-color: #e60606;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>« Login »<br>
        Aviation Cybersecurity Training</h2>
        <form action="login_process.php" method="POST">
            <label>
                Username:
                <input type="text" name="username" placeholder="Enter your username" required>
            </label>
            <label>
                Password:
                <input type="password" name="password" placeholder="Enter your password" required>
            </label>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
