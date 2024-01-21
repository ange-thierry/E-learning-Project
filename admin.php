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
            padding: 20px;
            margin: 20px 0;
            display: block;
        }

        .course-card h3 {
            margin-top: 10px;
            color: #333;
        }

        .course-card p {
            color: #555;
        }

        .course-card a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #3b5998;
            margin-right: 10px;
            cursor: pointer;
        }

        .course-card a:hover {
            text-decoration: underline;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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

<div class="admin-container">
    <header>
        <div class="logo">
            <img src="logo2.png" alt="E-Learning Platform Logo" height="30">
        </div>
        <nav>
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="course.php">Manage Courses</a></li>
                <li onclick="AddUser()"><button>Manage users</button></li>
                <li><a href="upload.php">add course</a></li>
                <li><a href="delete crse.php">delete course</a></li>
                <li><a href="home.php">Logout</a></li>
            </ul>
        </nav>
    </header>
 <script>
        function AddUser() {
            const courseSection = document.getElementById('course');
            
            const button1 = document.createElement('button');
            button1.textContent = "ADD NEW USER";
            button1.addEventListener('click', function(e) {
                AddNewUser();
            });

            const button2 = document.createElement('button');
            button2.textContent = "DELETE USER";
            button2.addEventListener('click',function(e){
                DeleteUser();
            })

            const button3 = document.createElement('button');
            button3.textContent = "UPDATE USER";
            
            const courseCards = document.querySelectorAll('.course-card');
            courseCards.forEach(card => card.style.display = "none");

            courseSection.appendChild(button1);
            courseSection.appendChild(button2);
            courseSection.appendChild(button3);
        }

        function AddNewUser() {
            const courseSection = document.getElementById('course');
            const addUserForm = document.createElement('form');
            addUserForm.method = "post";

            addUserForm.innerHTML = `
            <a href="deleuser.php">delete user</a>
            <a href="Update.php">update user</a>
                <label for="fullname">fullname:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="username">username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm">confirm:</label>
                <input type="text" id="confirm" name="confirm" required>

                <button type="submit">Add User</button>
            </form>
            <?php
include('Connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $email = $_POST["username"]; 
    $confirm = $_POST["confirm"];
    if ($password != $confirm) {
        die("Password and confirm password do not match");
    }

    $sql="INSERT INTO abausers (fullname, password, email,confirm) VALUES ('$fullname','$password', '$email','$confirm')";
   $connect=mysqli_query($conn,$sql);
   if($connect)
   {
    echo "New user is added";
   }
   else {
   echo "Not added";
   }
}
   $conn->close()
   ?>
            `;
            courseSection.appendChild(addUserForm);
        }
        document.querySelector('nav a[href=""]').addEventListener('click', AddUser);
    </script>
    <main>
        <section class="course-management" id="course">
            <h2></h2>
            <div class="course-card">
                <h3>Course 1</h3>
                <p>Cambridge program</p>
                <a href="https://www.cambridgeinternational.org/why-choose-us/benefits-of-a-cambridge-education/international-curriculum/">manage</a> 
            </div>

            <div class="course-card">
                <h3>Course 2</h3>
                <p>University level</p>
                <a href="https://library.ur.ac.rw/">Manage</a> 
            </div>
            <div class="course-card">
                <h3>Course 3</h3>
                <p>secondary level</p>
                <a href="https://eduthink.thinkbig.rw/rwanda-secondary-school-books/">Manage</a> 
            </div>
            <div class="course-card">
                <h3>Course 4</h3>
                <p>Primary level</p>
                <a href="https://eduthink.thinkbig.rw/rwanda-primary-school-books/">Manage</a>  
            </div>
            <div class="course-card">
                <h3>Course 5</h3>
                <p>WDA and TVET level</p>
                <a href="https://www.rtb.gov.rw/">Manage</a>
  </div>
        </section>
    </main>
</div>

</body>
</html>
