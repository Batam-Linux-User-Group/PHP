<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login With PHP</title>
    <style>
        body {
            background-color: #555555;
            color: white;
            font-family: sans-serif;
        }
        .login-box {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .login-box h1 {
            text-align: center;
        }
        .text {
            width: 100%;
            margin: 4px 0;
        }
        .text input {
            outline: none;
        }
        .btn {
            width: 100%;
            margin: 10px 0;
            border: 1px solid black;
            padding: 4px;
            font-size: 15px;
            background: rgba(255, 255, 255, .6);
            border-radius: 10px;
            color: black;
            font-weight: bold;
            transition: .3s;
        }
        .btn:hover {
            background: white;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
            <div class="text">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="text">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" value="Login" class="btn">
        </div>
    </form>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>