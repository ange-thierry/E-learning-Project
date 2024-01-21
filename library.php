<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Dashboard</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
}

.dashboard-container {
    max-width: 1200px;
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #3b5998;
    color: #fff;
}

.logo img {
    height: 30px;
}

.user-info {
    text-align: right;
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

.welcome-section {
    text-align: center;
}

.course-section {
    margin-top: 20px;
}

.course-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    margin: 10px;
}

.course-card img {
    width: 100%;
    border-radius: 8px;
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

<div class="dashboard-container">
    <header>
        <div class="logo">
            <img src="logo2.png" alt="E-Learning Platform Logo" height="150" width="100">
        </div>
        <div class="user-info">
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="pr7.php" class="active">Home</a></li>
            <li><a href="pr5.php">Courses</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section class="welcome-section">
            <h1>Welcome to Your E-Learning Dashboard</h1>
            <p>Explore courses, track your progress, and enhance your skills.</p>
        </section>

        <section class="course-section">
            <h2>Your library</h2>
            <div class="course-card">
                <p>kigali public library</p>
                <a href="https://www.kplonline.org/">view details</a>
            </div>

            <div class="course-card">
                <h3>library 2</h3>
                <p>REB library</p>
                <a href="https://elearning.reb.rw/">View Details</a>
            </div>
            <div class="course-card">
                <h3>library 3</h3>
                <p>UR library</p>
                <a href="https://ur.ac.rw/?Library">View Details</a>
            </div>
            <div class="course-card">
                <h3>library 4</h3>
                <p>Cambridge dictionary</p>
                <a href="https://dictionary.cambridge.org/">View Details</a>
            </div>
        </section>
    </main>
</div>

</body>
</html>
