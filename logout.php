<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Form</title>
    <style>
        /* Your existing styles remain unchanged */

        /* Additional styles for the logout button */
        .logout-btn {
            background-color: #dc3545;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="registration">
        <?php
        session_start(); // Start the session

        include('connection.php');

        // Check if the user is logged in
        if (isset($_SESSION['fname'])) {
            $fullName = $_SESSION['fname'];
            echo "<p>Welcome, $fullName!</p>";
            echo '<form method="POST" action="">
                    <input type="submit" class="logout-btn" value="Logout" name="logout">
                  </form>';

            // Logout functionality
            if (isset($_POST['logout'])) {
                session_destroy(); // Destroy the session
                header("location: your_logout_page.php"); // Redirect to a logout confirmation page
                exit();
            }
        } else {
            // Display the login form if not logged in
            echo '<form method="POST" action="">
                    <center><h3>Login Form</h3></center>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    <div class="password-container">
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>
                    </div>
                    <input type="submit" value="Login">
                    <a href="register2.php">Register</a>
                </form>';

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // Your existing login logic remains unchanged
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $password = isset($_POST['psw']) ? $_POST['psw'] : '';

                $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
                $connect = mysqli_query($conn, $sql);

                if (mysqli_num_rows($connect) > 0) {
                    $row = mysqli_fetch_assoc($connect);
                    $_SESSION['fname'] = $row['Fullname']; // Set session variable
                    header("location: pr3.php");
                    exit();
                } else {
                    echo " ";
                }
            }
        }

        $conn->close();
        ?>
    </div>

    <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
        }
    </script>
</body>

</html>
