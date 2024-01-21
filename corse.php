<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Admin Portal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        header {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #3b5998;
            color: #fff;
        }

        .logo img {
            height: 30px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #2d4373;
            overflow: hidden;
        }

        nav ul li {
            float: left;
        }

        nav a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #1d325f;
        }

        nav a.active {
            background-color: #1d325f;
        }

        main {
            padding: 20px;
        }

        .course-management {
            margin-top: 20px;
        }

        .course-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            margin: 10px;
        }

        .course-card h3 {
            margin-top: 10px;
        }

        .course-card p {
            color: #555;
        }

        .course-card a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #3b5998;
        }

        .course-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="admin-container">
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="E-Learning Platform Logo" height="30">
        </div>
        <nav>
            <ul>
                <li><a href="pr7.php" class="active">Home</a></li>
                <li><a href="#">Manage Courses</a></li>
                <li><a href="#">Manage Users</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="course-management">
            <h2>Course Management</h2>
            <div class="course-card">
                <h3>Course 1</h3>
                <p>Cambridge program</p>
                <a href="https://www.cambridgeinternational.org/why-choose-us/benefits-of-a-cambridge-education/international-curriculum/">manage</a> 
                 <a href="https://www.cambridgeinternational.org/why-choose-us/benefits-of-a-cambridge-education/international-curriculum/">delete</a>
                <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="courseTitle">Course Title:</label>
        <input type="text" id="courseTitle" name="courseTitle" required>

        <label for="courseFile">Select Course File:</label>
        <input type="file" id="courseFile" name="courseFile" accept=".pdf, .doc, .docx" required>

        <button type="submit">Upload Course</button>
    </form>
            </div>

            <div class="course-card">
                <h3>Course 2</h3>
                <p>University level</p>
                <a href="https://library.ur.ac.rw/">Manage</a> 
                <a href="https://library.ur.ac.rw/">Delete</a>
                <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="courseTitle">Course Title:</label>
        <input type="text" id="courseTitle" name="courseTitle" required>

        <label for="courseFile">Select Course File:</label>
        <input type="file" id="courseFile" name="courseFile" accept=".pdf, .doc, .docx" required>

        <button type="submit">Upload Course</button>
    </form>
            </div>
            <div class="course-card">
                <h3>Course 3</h3>
                <p>secondary level</p>
                <a href="https://eduthink.thinkbig.rw/rwanda-secondary-school-books/">Manage</a> 
                 <a href="https://eduthink.thinkbig.rw/rwanda-secondary-school-books/">Delete</a>
                <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="courseTitle">Course Title:</label>
        <input type="text" id="courseTitle" name="courseTitle" required>

        <label for="courseFile">Select Course File:</label>
        <input type="file" id="courseFile" name="courseFile" accept=".pdf, .doc, .docx" required>

        <button type="submit">Upload Course</button>
    </form>
            </div>
            <div class="course-card">
                <h3>Course 4</h3>
                <p>Primary level</p>
                <a href="https://eduthink.thinkbig.rw/rwanda-primary-school-books/">Manage</a>  
                <a href="https://eduthink.thinkbig.rw/rwanda-primary-school-books/">Delete</a>
                <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="courseTitle">Course Title:</label>
        <input type="text" id="courseTitle" name="courseTitle" required>

        <label for="courseFile">Select Course File:</label>
        <input type="file" id="courseFile" name="courseFile" accept=".pdf, .doc, .docx" required>

        <button type="submit">Upload Course</button>
    </form>
            </div>
            <div class="course-card">
                <h3>Course 5</h3>
                <p>WDA and TVET level</p>
                <a href="https://www.rtb.gov.rw/">manage</a>
                <a href="https://www.rtb.gov.rw/">Delete</a>
                <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="courseTitle">Course Title:</label>
        <input type="text" id="courseTitle" name="courseTitle" required>

        <label for="courseFile">Select Course File:</label>
        <input type="file" id="courseFile" name="courseFile" accept=".pdf, .doc, .docx" required>

        <button type="submit">Upload Course</button>
    </form>
  </div>
        </section>
    </main>
</div>

</body>
</html>
