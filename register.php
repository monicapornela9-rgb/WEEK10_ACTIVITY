<?php
$firstName = "";
$lastName = "";
$username = "";
$email = "";
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = trim($_POST["firstName"] ?? "");
    $lastName = trim($_POST["lastName"] ?? "");
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirmPassword"] ?? "";

    // Regular expression patterns
    $namePattern = "/^[A-Za-z ]{2,30}$/";
    $usernamePattern = "/^[A-Za-z0-9_]{3,20}$/";
    $emailPattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/";
    $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,20}$/";

    // Validate first name
    if ($firstName === "") {
        $errors[] = "First name is required.";
    } elseif (!preg_match($namePattern, $firstName)) {
        $errors[] = "First name must contain 2-30 letters.";
    }

    // Validate last name
    if ($lastName === "") {
        $errors[] = "Last name is required.";
    } elseif (!preg_match($namePattern, $lastName)) {
        $errors[] = "Last name must contain 2-30 letters.";
    }

    // Validate username
    if ($username === "") {
        $errors[] = "Username is required.";
    } elseif (!preg_match($usernamePattern, $username)) {
        $errors[] = "Username must be 3-20 characters using letters, numbers, or underscores.";
    }

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
        $errors[] = "Password must be 8-20 characters with uppercase, lowercase, and a number.";
    }

    // Confirm password
    if ($confirmPassword === "") {
        $errors[] = "Please confirm your password.";
    } elseif ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // Successful validation
    if (empty($errors)) {
        $success = "Registration form validation successful!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Eras Portal - Register</title>

    <style>
        body {
            background-image: url("images/taylor.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #b8cde0;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 15px;
        }

        .register-section {
            width: 90%;
            max-width: 450px;
            padding: 20px;
            text-align: center;
        }

        .site-title {
            color: white;
            font-size: 34px;
            font-weight: bold;
            margin-bottom: 6px;
            text-shadow: 2px 2px 4px #263b4f;
        }

        .site-subtitle {
            color: white;
            font-size: 14px;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px #263b4f;
        }

        nav {
            margin-bottom: 20px;
        }

        nav a {
            display: inline-block;
            color: white;
            background-color: rgba(38, 59, 79, 0.75);
            border: 2px solid #d9a6a6;
            border-radius: 15px;
            padding: 7px 15px;
            margin: 0 5px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #d9a6a6;
            color: #263b4f;
        }

        h2 {
            color: white;
            font-size: 27px;
            margin-bottom: 7px;
            text-shadow: 2px 2px 4px #263b4f;
        }

        .register-description {
            color: white;
            font-size: 13px;
            margin-bottom: 17px;
            text-shadow: 1px 1px 3px #263b4f;
        }

        label {
            display: block;
            width: 80%;
            margin: 0 auto 5px;
            color: white;
            font-size: 13px;
            font-weight: bold;
            text-align: left;
            text-shadow: 1px 1px 3px #263b4f;
        }

        input {
            display: block;
            box-sizing: border-box;
            width: 80%;
            margin: 0 auto 11px;
            padding: 10px;
            border: 3px solid #d9a6a6;
            background-color: rgba(255, 248, 235, 0.94);
            color: #263b4f;
            font-size: 14px;
            text-align: center;
            border-radius: 15px;
        }

        input:focus {
            border-color: #6f8fa9;
            outline: none;
        }

        button {
            display: block;
            width: 80%;
            margin: 15px auto;
            padding: 11px;
            background-color: #6f8fa9;
            color: white;
            border: 3px solid #d9a6a6;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 15px;
        }

        button:hover {
            background-color: #d9a6a6;
            color: #263b4f;
        }

        .error-box, .success-box {
            width: 80%;
            box-sizing: border-box;
            margin: 0 auto 15px;
            padding: 10px;
            border-radius: 10px;
            font-size: 13px;
            text-align: left;
        }

        .error-box {
            background-color: rgba(150, 30, 30, 0.92);
            color: white;
        }

        .success-box {
            background-color: rgba(40, 130, 70, 0.92);
            color: white;
            font-weight: bold;
        }

        .login-link {
            color: white;
            font-size: 13px;
            margin-top: 15px;
            text-shadow: 1px 1px 3px #263b4f;
        }

        .login-link a {
            color: #fff1d6;
            font-weight: bold;
        }

        .login-link a:hover {
            color: #d9a6a6;
        }
    </style>
</head>

<body>
<main>
    <section class="register-section">

        <h1 class="site-title">The Eras Portal</h1>
        <p class="site-subtitle">A little space for every era</p>

        <nav>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </nav>

        <h2>Join The Eras</h2>
        <p class="register-description">
            Create your account and begin your journey through the eras.
        </p>

        <?php if (!empty($errors)): ?>
            <div class="error-box">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($success !== ""): ?>
            <div class="success-box">
                <?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>

        <form action="register.php" method="post">

            <label for="firstName">First Name</label>
            <input
                   type="text"
                   id="firstName"
                   name="firstName"
                   placeholder="Enter your first name"
                   minlength="2"
                   maxlength="30"
                   value="<?= htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') ?>"
                   required
            >

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName"
                   placeholder="Enter your last name"
                   minlength="2" maxlength="30" required
                   value="<?= htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') ?>">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email"
                   placeholder="Enter your email"
                   maxlength="50"
                   value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"
                   required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username"
                   placeholder="Choose a username"
                   minlength="3" maxlength="20"
                   value="<?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>"
                   required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password"
                   placeholder="Create a password"
                   minlength="8" maxlength="20" required>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword"
                   name="confirmPassword"
                   placeholder="Confirm your password"
                   required>

            <button type="submit">Begin My Era</button>

            <p class="login-link">
                Already have an account?
                <a href="login.php">Login here</a>
            </p>

        </form>
    </section>
</main>
</body>
</html>
