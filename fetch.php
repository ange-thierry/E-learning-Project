<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .success-message {
            color: #4caf50;
            margin-bottom: 16px;
        }

        .error-message {
            color: #ff0000;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>

<?php
include('Connection.php');
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Files List:</h2>";
        echo "<ul>";

        while ($row = mysqli_fetch_assoc($result)) {
            $filePath = $row['crsetitle'];
            echo "<li><a href='{$filePath}' target='_blank'>{$row['crsetitle']}</a></li>";
        }

        echo "</ul>";
    } else {
        echo "<div class='info-message'>No files found in the database.</div>";
    }
} else {
    echo "<div class='error-message'>Failed to fetch files from the database.</div>";
}

$conn->close();
?>
</body>
</html>
