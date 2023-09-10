<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <form action="signup.php" method="POST">
            <?php
            include("php/config.php");

            if(isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email']; // Fix this, it should be 'email'
                $password = $_POST['password'];

                // Verify if the email is already taken
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");

                if(mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                        <p>This email is already taken. Please try another one.</p>
                    </div> <br>";

                    echo "<a href='javascript:self.his'><button class='btn'>Go Back</button></a>";
                } else {
                    mysqli_query($con, "INSERT INTO users (Username, Email, Password) VALUES ('$username','$email','$password')") or die("Error Occurred!");

                    echo "<div class='message'>
                        <p>Registered Successfully</p>
                    </div> <br>";

                    echo "<a href='login.php'><button class='btn'>Login Now!</button></a>";
                }
            } else {
            ?>
                <h2>Sign Up</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required> <!-- Fix the 'name' attribute to 'email' -->
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="submit">Sign Up</button> <!-- Added 'name="submit"' -->
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
            <a href="home.php">Home</a>
        </div>
        <?php } ?>
    </body>
</html>
