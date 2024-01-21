<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Upload</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = 'uploads/';

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $courseTitle = $_POST['courseTitle'];

    $filename = $uploadDir . uniqid() . '_' . basename($_FILES['courseFile']['name']);

    if (move_uploaded_file($_FILES['courseFile']['tmp_name'], $filename)) {
        echo 'Course uploaded successfully.';
        echo '<br>';
        echo 'Course Title: ' . $courseTitle;
        echo '<br>';
        echo 'File Path: ' . $filename;
    } else {
        echo 'Error uploading the course.';
    }
}
?>

    <h2>Upload Course</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="courseTitle">Course Title:</label>
        <input type="text" id="courseTitle" name="courseTitle" required>

        <label for="courseFile">Select Course File:</label>
        <input type="file" id="courseFile" name="courseFile" accept=".pdf, .doc, .docx" required>

        <button type="submit">Upload Course</button>
    </form>

</body>
</html>
