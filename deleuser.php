<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </head>
<body>
<?php
                        include('Connection.php');
                        $sql="SELECT Fullname from abausers";
                        $connected=mysqli_query($conn,$sql);
                          if(mysqli_num_rows($connected)>0)
                          {    
                            echo "<div class='Deletes'> ";
                            echo "<form method='post'>"; 
                            echo "<center><h3>Delete All details to </h3><center>";
                                echo "<select id='deletes' name='del'>";
                                   while($row=$connected->fetch_assoc())
                                   {
                                       echo "<option value='{$row['Fullname']}'>{$row['Fullname']} </option>";
                                   }
                                   echo "</select>";
                                   echo "<button type='submit'> Delete</button>";
                                   echo "</form>";
                           }
                           $conn->close()
                         ?> 
                    


                    <?php
include('Connection.php');


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $del = $_POST["del"];

    
    $del = mysqli_real_escape_string($conn, $del);

    $sql = "DELETE FROM abausers WHERE Fullname='$del'";
    $deleted = mysqli_query($conn, $sql);

    if ($deleted) {
        echo "<h3> deleted successfully " . $del . "</h3>";
    } else {
        echo "Not deleted";
    }
}

$conn->close();
?>

</body>
</html>