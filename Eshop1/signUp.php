<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signUp.css">
    <title>Nexus Market: Sign Up</title>
</head>
<body>
	<div class="users">
        <label for="">Nexus Market </label>
        <a href="index.html">
            <button class="sign-up-button">Home</button>
        </a>
        <a href="signIn.php">
            <button class="sign-in-button">Log In</button>
        </a>
        <a href="orders/orders.html">
            <button class="orders-button">Orders</button>
        </a>
        <a href="about.html">
            <button class="about-button">About</button>
        </a>
    </div>

	<div class="container">
        <form action="sign_up_db.php" method="post">
		    <label for="firstName">First Name:</label>
		    <input type="text" id="firstName" name="firstName" placeholder="Type your first name" autocomplete="off" required minlength="3"><br>

		    <label for="lastName">Last Name:</label>
		    <input type="text" id="lastName" name="lastName" placeholder="Type your last name"  autocomplete="off" required minlength="3"><br>

		    <label for="username">Username:</label>
		    <input type="text" id="username" name="username" placeholder="Type your username" autocomplete="off" required minlength="3"><br>

		    <label for="email">Email:</label>
		    <input type="email" id="email" placeholder = "Type your email" name="email" required autocomplete="off" minlength="3"><br>

		    <label for="phoneNumber">Phone Number:</label>
		    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Your phone number" autocomplete="off" required ><br>

		    <label for="password">Password:</label>
		    <input type="password" id="password1" name="password1" placeholder="Ideally 10 digits" required minlength="5"><br>

		    <label for="confirm_password">Confirm Password:</label>
		    <input type="password" id="confirm_password" name="confirm_password" required><br>

		    <button type="submit">Sign Up</button>
        </form>
	</div>   
    
	<div class="footer-container">
        <footer>
            <label for="copywrite-label">
                &copy Copywrite Nexus Market 2023. All right reserved.
            </label>
        </footer>
    </div>

</body>
</html>