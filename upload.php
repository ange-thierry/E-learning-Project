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

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $crsetitle = $_POST["crsetitle"];
    $crsecategory = $_POST["crsecategory"];

    if (empty($crsetitle) || empty($crsecategory)) {
        echo "<div class='error-message'>All fields are required.</div>";
    } else {
        $crsetitle = mysqli_real_escape_string($conn, $crsetitle);
        $crsecategory = mysqli_real_escape_string($conn, $crsecategory);

        $sql = "INSERT INTO courses (crsetitle, crsecategory) VALUES ('$crsetitle', '$crsecategory')";
        $inserted = mysqli_query($conn, $sql);

        if ($inserted) {
            echo "<div class='success-message'> uploaded successfully </div>";
        } else {
            echo "<div class='error-message'> failed to upload </div>";
        }
    }
}

$conn->close();
?>

<div class="form-container">
    <form method="post">
    <label for="courseFile">Course title:</label>
        <input type="file" id="crsetitle" name="crsetitle" accept=".pdf, .doc, .docx" required>
        <label for="crsecategory">Course category:</label>
        <input type="text"  name="crsecategory" require>
        <button type="submit">Upload Course</button>
    </form>
</div>
</body>
</html>
