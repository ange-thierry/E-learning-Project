<html>
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

textarea {
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

if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["delete_course"])) {
    $course_id_to_delete = $_POST["course_id_to_delete"];
    $course_id_to_delete = mysqli_real_escape_string($conn, $course_id_to_delete);
    
    $sql = "DELETE FROM courses WHERE crseid = '$course_id_to_delete'";
    $deleted = mysqli_query($conn, $sql);

    if ($deleted) {
        echo "<div class='success-message'>Course deleted successfully.</div>";
    } else {
        echo "<div class='error-message'>Failed to delete course.</div>";
    }
}

$conn->close();
?>

<div class="form-container">
    <form method="post">
        <label for="course_id_to_delete">Course ID to delete:</label>
        <input type="text" name="course_id_to_delete" required>
        <button type="submit" name="delete_course">Delete Course</button>
    </form>
</div>
</body>
</html>
