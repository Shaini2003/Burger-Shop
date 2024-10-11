<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS/signUp.css">
</head>

<body style="background-image: url(Media/login\ background.jpg);background-size: cover;background-position: center center;">
    <div class="header">
        <nav>
            <ul style="list-style: none;display: flex;justify-content: space-between;">
                <li><img src="Media/burger.png" width="40px" height="40px"></li>
                <li><a href="Home.php" style="font-size: 20px;text-decoration: none;color: #fff;">HOME</a></li>
                <li><a href="#" style="font-size: 20px;text-decoration: none;color: #fff;">MENU</a></li>
                <li><a href="#about-us" style="font-size: 20px;text-decoration: none;color: #fff;">ABOUT US</a></li>
                <li><a href="#" style="font-size: 20px;text-decoration: none;color: #fff;">CONTACTS</a></li>

            </ul>
        </nav>
    </div>
    <p style="color:#f39c12;font-weight: bold;font-size: 40px;margin-top: 1px;text-align: center;">Become a member</p>
    <div class="container">
        <div class="login-form">

            <h1 style="text-align: center;font-weight:900;">Sign Up</h1>
            <form action ="includes/signup.inc.php" method="post">
                <label for="name" style="font-size: 18px;text-align: left;">Name:</label><select style="width: 10%;
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 10px;">
                    <option>Mr.</option>
                    <option>Ms.</option>
                    <option>Mrs.</option>
                </select>
                <input type="text" id="name" name="name" placeholder="Name">
                <label for="phone" style="font-size: 18px;text-align: left;">Phone Number:</label>
                <input type="tel" id="phone" name="phone" style="width: 90%;" placeholder="Phone Number">
                <label for="email" style="font-size: 18px;text-align: left;">Email:</label>
                <input type="email" id="email" name="email" style="width: 90%;" placeholder="Email">
                <label for="password" style="font-size: 18px;text-align: left;">Password:</label>
                <input type="password" id="password" name="password" style="width: 90%;" placeholder="Password">
                <label for="confirm-password" style="font-size: 18px;text-align: left;">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" style="width: 90%;" placeholder="Repeat Password">

                <center>
                <button name="submit" type="submit" style="color: white;" class="button">Register</a></button>
                <p style="font-weight: bolder;">Already have an account? &nbsp;<a href="Login.php" style="color:black;font-weight: bold; text-decoration: none;">Login</a></p>
                
            </center>



            </form>

            
        </div>
    </div>
</body>

</html>