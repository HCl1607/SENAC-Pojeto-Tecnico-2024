<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disease Chronicles| Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        <form name="form" action ="login-processa.php" method="POST" onsubmit="return isvalid()">   
            <h2>Sign in</h2>
            <div class="input-box">
                <input type="text" name ='user' required>
                <span>Username</span>
                <i></i>
            </div>

            <div class="input-box">
                <input type="password" name = 'pass' required>
                <span>Password</span>
                
            </div>


            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="#"> Sign Up</a>
            </div>
            <input type="submit" value="Login" id="btnLogin">

        </form>
    </div>

    <script src="login.js"></script>
</body>
</html>