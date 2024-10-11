<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">

</head>
<body style="background-image: url(Media/login\ background.jpg);background-size:cover;background-position: center center;">
        <nav>
            <ul style="list-style: none;display: flex;justify-content: space-between;">
                <li><img src="Media/burger.png" width="40px"height="40px"></li>
                <li><a href="Home.php" style="font-size: 20px;text-decoration: none;color: #fff;">HOME</a></li>
                <li><a href="#" style="font-size: 20px;text-decoration: none;color: #fff;">MENU</a></li>
                <li><a href="#about-us" style="font-size: 20px;text-decoration: none;color: #fff;">ABOUT US</a></li>
                <li><a href="#" style="font-size: 20px;text-decoration: none;color: #fff;">CONTACTS</a></li>
                
            </ul>
        </nav>

    <p style="color: #f39c12;font-weight: bold;font-size: 40px;">Let's start your order</p><br><br><br>
    <div class="container">
        <div class="login-form">
            
            <h1 style="text-align: center;font-weight:900;">Login</h1>
        
            <form action ="includes/login.inc.php" method="post" ><div style="text-align: center;">
                <label for="email" style="font-size: 18px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Email"><br><br>
                <label for="password" style="font-size: 18px;text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</label>
                <input type="password" id="password" name="password" placeholder="Password">
                <p style="font-weight: bolder;font-size: 18px;">Forget Password?</p><center>
                <button>Continue as Guest</button>
                <button>Login with Google</button>
                <button name="submit" type="submit"class="button">LOGIN</button></center></div>
            </form>
        
            <p style="font-weight: bolder;">Don't have an account? &nbsp;<a href="SignUp.php" style="color:black;font-weight: bold;">Sign Up</a></p>
        </div>
    </div>

    
</body>
</html>