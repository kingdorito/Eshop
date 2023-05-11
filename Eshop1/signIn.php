<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signIn.css">
    <title>Nexus Market: Sign In</title>
</head>
<body>
	<div class="users">
        <label for="">Nexus Market </label>
        <a href="signUp.php">
            <button class="sign-up-button">Sign Up</button>
        </a>
        <a href="index.html">
            <button class="sign-in-button">Home</button>
        </a>
        <a href="userpanel.html">
            <button class="orders-button">Orders</button>
        </a>
        <a href="about.html">
            <button class="about-button">About</button>
        </a>
    </div>

	<div class="container">
        <form action= "logIn.php" method="post">
		    <div class="username">
		    	<label for="username">Username</label>
		    	<input type="text" placeholder="Enter Username" name="username" required autocomplete="off"> 
		    </div>

		    <div class="password">
		    	<label for="password">Password</label>
		    	<input type="password" placeholder="Enter Password" name="password1" required>
		    </div>

		    <div class="submit">
		    	<button name = "submit" type="submit">Login</button> 
		    </div>
        </form>
	</div>
    
    <div class="error" id="error-msg" name="error-msg">
        <?php 
        if (isset($_GET['error'])) 
        {
            echo htmlspecialchars($_GET['error']); 
        }
        ?>
    </div>

	<div class="footer-container">
        <footer>
            <label for="copywrite-label">
                &copy Copyrights Nexus Market 2023. All right reserved.
            </label>
        </footer>
    </div>
</body>
</html>