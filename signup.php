<?php
require 'lbms.php';

if ($_POST) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $success = register($username, $email, $password);
    if ($success) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Username already exist. Please choose another.";
    }
}
;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <style>
        body {
            background: linear-gradient(135deg, #f5f1ed 0%, #e8dfd5 100%);
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Subtle background pattern */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(212, 196, 176, 0.1) 35px, rgba(212, 196, 176, 0.1) 70px);
            pointer-events: none;
        }

        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        fieldset {
            background-color: #faf8f5;
            border: 2px solid #d4c4b0;
            padding: 40px 35px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(90, 74, 58, 0.15);
            position: relative;
            z-index: 1;
        }

        /* Decorative icon/element above heading */
        h1::before {
            content: "📚";
            display: block;
            font-size: 36px;
            margin-bottom: 10px;
        }

        h1 {
            color: #5a4a3a;
            text-align: center;
            margin-bottom: 10px;
            font-size: 28px;
            letter-spacing: 1px;
        }

        hr {
            border: 1px solid rgb(187, 174, 153);
            margin-bottom: 25px;
        }

        label {
            color: #5a4a3a;
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"] {
            background-color: #f5f1ed;
            border: 1px solid #d4c4b0;
            padding: 12px;
            width: 100%;
            box-sizing: border-box;
            color: #5a4a3a;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"] {
            background-color: #f5f1ed;
            border: 1px solid #d4c4b0;
            padding: 12px;
            width: 100%;
            box-sizing: border-box;
            color: #5a4a3a;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        /* Focus effect on inputs */
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #c9b89a;
            box-shadow: 0 0 0 3px rgba(201, 184, 154, 0.2);
            background-color: #fff;
        }

        input[type="button"] {
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            cursor: pointer;
            padding: 12px 30px;
            font-weight: bold;
            width: 48%;
        }

        input[type="button"]:first-of-type {
            background-color: #c9b89a;
            border: none;
            color: white;
            margin-right: 4%;
        }

        /* Hover effect on Login button */
        input[type="button"]:first-of-type:hover {
            background-color: #b5a788;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(201, 184, 154, 0.4);
        }

        input[type="button"]:last-of-type {
            background-color: #e6dcc8;
            border: 1px solid #c9b89a;
            color: #5a4a3a;
        }

        /* Hover effect on Sign Up button */
        input[type="button"]:last-of-type:hover {
            background-color: #d4c4b0;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(201, 184, 154, 0.3);
        }

        input[type="button"]:active {
            transform: translateY(0);
        }

        input[type="submit"] {
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            cursor: pointer;
            padding: 12px 30px;
            font-weight: bold;
            width: 48%;
        }

        input[type="submit"]:hover {
            background-color: #d4c4b0;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(201, 184, 154, 0.3);
        }

        input[type="submit"]:active {
            transform: translateY(0);
        }

        .error-message {
            color: #f10e0eff;
            background-color: #ffffffff;
            border: 0px solid #000000ff;
            padding: 10px 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: 0 2px 6px rgba(90, 74, 58, 0.1);
            animation: fadeIn 0.4s ease-in;
        }

        footer {
            background-color: white;
            padding: 55px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #666;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 10;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class=container>

        <fieldset>
            <h1>Sign up</h1>
            <hr style="border: 1px solid rgb(187, 174, 153);">
            <form method="POST">
                <label>Username</label><br>
                <input type="text" name="username" required placeholder="Enter your username"><br><br>
                <label>Email</label><br>
                <input type="email" name="email" required placeholder="Enter your email"><br><br>
                <label>Password</label><br>
                <?php if (!empty($error)): ?>
                    <div class="error-message"><?= $error ?></div>
                <?php endif; ?>
                <input type="password" name="password" required placeholder="Enter your password"><br><br>
                <input type="submit" value="Register">
            </form>
            <?php if (isset($message))
                echo "<p style='color:red;'>$message</p>"; ?>
        </fieldset>
    </div>
    <footer>
        <div>
            <p>&copy; <?php echo date('Y'); ?> Book Collection. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
