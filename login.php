<?php
$email = "";
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    // Regular expression patterns
    $emailPattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";
    $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,20}$/";

    // Validate email
    if ($email === "") {
        $errors[] = "Email is required.";
    } elseif (!preg_match($emailPattern, $email)) {
        $errors[] = "Please enter a valid email address.";
    }

    // Validate password
    if ($password === "") {
        $errors[] = "Password is required.";
    } elseif (!preg_match($passwordPattern, $password)) {
        $errors[] = "Password must be 8-20 characters and include at least one uppercase letter, one lowercase letter, and one number.";
    }

    // Display success message if all inputs are valid
    if (empty($errors)) {
        $success = "Login successful! Your email and password passed validation.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Eras Portal - Login</title>


<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-image: url("images/taylor.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: white;
        min-height: 100vh;
    }

    nav {
        background-color: rgba(10, 15, 35, 0.9);
        padding: 18px;
        text-align: center;
    }

    nav a {
        color: #ffb6d9;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    }

    nav a:hover {
        color: white;
    }

    /* Login container */
    .container {
        width: 90%;
        max-width: 420px;
        margin: 55px auto;
        padding: 25px 30px;
        background-color: rgba(10, 15, 35, 0.75);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        color: #ffb6d9;
        font-family: Arial, sans-serif;
        font-size: 28px;
        font-weight: bold;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .description {
        text-align: center;
        line-height: 1.5;
        margin-bottom: 22px;
        font-size: 14px;
    }

    label {
        display: block;
        margin-top: 15px;
        margin-bottom: 7px;
        font-size: 14px;
        font-weight: bold;
    }

    input {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: #fffafc;
        color: #292438;
        border: 1px solid #d8c5d0;
        border-radius: 7px;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    input::placeholder {
        color: #77717a;
    }

    input:focus {
        outline: none;
        border-color: #ffb6d9;
    }

    button {
        display: block;
        width: 100%;
        margin-top: 22px;
        padding: 12px;
        background-color: #ffb6d9;
        color: #17152b;
        border: none;
        border-radius: 7px;
        font-family: Arial, sans-serif;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        background-color: #ffa2ce;
    }

    /* Validation messages */
    .alert-error {
        background-color: rgba(130, 35, 55, 0.45);
        border: 1px solid #e8a0b0;
        color: #ffe1e8;
        padding: 12px;
        border-radius: 7px;
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1.5;
    }

    .alert-error ul {
        margin-bottom: 0;
        padding-left: 22px;
    }

    .alert-success {
        background-color: rgba(40, 130, 75, 0.45);
        border: 1px solid #8bcba0;
        color: #e0ffe8;
        padding: 12px;
        border-radius: 7px;
        margin-bottom: 15px;
        text-align: center;
        font-size: 14px;
        line-height: 1.5;
    }

    .register-link {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
    }

    .register-link a {
        color: #ffb6d9;
        text-decoration: none;
        font-weight: bold;
    }

    .register-link a:hover {
        color: white;
        text-decoration: underline;
    }

    /* Mobile layout */
    @media (max-width: 480px) {
        nav {
            padding: 15px 10px;
        }

        nav a {
            margin: 0 10px;
        }

        .container {
            width: 92%;
            margin: 35px auto;
            padding: 22px 20px;
        }

        h1 {
            font-size: 25px;
        }
    }
</style>

</head>

<body>
    <nav>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>

    <div class="container">
        <h1>Welcome Back, Swiftie</h1>

        <p class="description">
            Enter the portal and continue your journey through the eras.
        </p>

        <?php if (!empty($errors)): ?>
            <div class="alert-error">
                <strong>Please check the following:</strong>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="alert-success">
                <strong><?= htmlspecialchars($success, ENT_QUOTES, "UTF-8") ?></strong>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                value="<?= htmlspecialchars($email, ENT_QUOTES, "UTF-8") ?>"
                required
            >

            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >

            <button type="submit">Login</button>
        </form>

        <div class="register-link">
            Don't have an account?
            <a href="register.php">Register here</a>
        </div>
    </div>
</body>
</html>
