<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color:black; */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .sign-container {
            background-color:gainsboro;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.123);
            text-align: center;
        }
        .sign-option {
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="sign-container">
    <h2>Login or Register</h2>
    
    <div class="sign-option">
        <h3>Login</h3>
        <form action="login.php" method="post">
            <!-- Your login form fields go here -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <a href="pr3.html">login</a>
        </form>
    </div>
</body>
</html>