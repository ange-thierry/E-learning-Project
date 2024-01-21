<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2em;
            width: 300px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #3b5998;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2d4373;
        }

        .password-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        #psw, #psw1 {
            padding-right: 40px;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="registration">
        <form method="GET" action="">
            <center><h3>Login Form</h3></center>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <div class="password-container">
                <input type="password" name="psw" id="psw" placeholder="Enter your password" required>
                <span class="toggle-password" onclick="togglePassword('psw')">&#x1F441;</span>
            </div>
            <input type="submit" value="Login">
            <a href="register2.php">register</a>
        </form>
        <?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $password = isset($_GET['psw']) ? $_GET['psw'] : '';

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $connect = mysqli_query($conn, $sql);

    if (mysqli_num_rows($connect) > 0) {
        $row = mysqli_fetch_assoc($connect);
        $fullName = $row['Fullname'];
        header("location: pr3.php?fname=$fullName");
        exit();
    } else {
        echo " ";
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