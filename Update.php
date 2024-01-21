<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        button {
            background-color: #3b5998;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d325f;
        }

        .error-message, .success-message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .error-message {
            color: red;
            background-color: #ffd6d6;
        }

        .success-message {
            color: green;
            background-color: #d6f5d6;
        }
    </style>
</head>
<body>

<?php
include('Connection.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $fullname = $_POST["fullname"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    
    if (empty($fullname) || empty($newPassword) || empty($confirmPassword)) {
        echo "<div class='error-message'>All fields are required.</div>";
    } elseif ($newPassword != $confirmPassword) {
        echo "<div class='error-message'>New password and confirm password do not match.</div>";
    } else {
       
        $fullname = mysqli_real_escape_string($conn, $fullname);
        $newPassword = mysqli_real_escape_string($conn, $newPassword);

      
        $sql = "UPDATE abausers SET password='$newPassword' WHERE Fullname='$fullname'";
        $updated = mysqli_query($conn, $sql);

        if ($updated) {
            echo "<div class='success-message'>User information updated successfully.</div>";
        } else {
            echo "<div class='error-message'>Failed to update user information.</div>";
        }
    }
}

$conn->close();
?>

<div class="form-container">
    <form method="post">
        <label for="fullname">Fullname:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Update User</button>
    </form>
</div>

</body>
</html>
