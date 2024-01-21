
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {
            width:100%;
            height:15%;
            background-color: rgb(253, 253, 253);
            border-bottom:3px solid #818181;
            position: fixed;
            top:0;
            left:0;
        }
        ul img {
            position: absolute;
            top:4px;
            left:20px;
            width: 100px;
        }
        ul li {
            display: inline;
            padding:10px;
            float:right;
            padding-top: 20px;
        }
        ul li a {
            color:black;
            text-decoration: none;
            font-size: 15px;
        }
        ul li button {
            padding-top: 15px;
            background-color: green;
            padding:10px;
            border-radius: 3px;
            border: none;
        }
        ul li a:hover{
            color:blue;
        }
        .bodyies {
            width:100%;
            height:500px;
            background-size: 1300px;
            background-repeat:no-repeat;
            background-image: url(download.jpg);
        }
        h1 {
            color:black;
            font-size: 35px;
            position: absolute;
            top:30%;
            left:38%;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        p {
            font-size: 18px;
            position:absolute;
            top:40%;
            left:38%;
            color:black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .bodyies button{
            background-color: green;
            position:absolute;
            top:55%;
            left:46%;
            border:none;
            width:8%;
            padding:10px;
            border-radius: 4px;;
        }
        .section {
            width:100%;
            display: table;
            content: "";
        }
        .sectionA {
            width:33.3%;
            float: left;
            height:200px;
        }
        .sectionB {
            width:33.3%;
            float: left;
            height:200px;
        }
        .sectionC {
            width:33.3%;
            float: left;
            height:200px;
        }
        sectionA ul li {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .sectionA a {
            margin:20px;
            padding-top:10px;
            padding:10px;
            color:black;
            text-decoration: none;
            font-size: 15px;
        }
        .left-nav {
            height: 600px;
            background-color: black;
            width:0px;
            overflow-x: hidden;
            position: fixed;
            z-index: 1;
            top:0;
            left:0;
            transition: .5s;
        }
        .left-nav li{
            padding:20px;
        }
        .left-nav li a {
            padding-top:35%;
            display: inline-block;
            color: #818181;
            font-size: 25px;
            text-decoration: none;
            margin-left:20px;
            float:left;
        }
        .Login-Form {
            width:100%;
        }
        .login-madal {
            background-color:white;
            width:40%;
            margin-left: auto;
            margin-right: auto;
            border:4px solid #818181;
            border-radius: 20px;
            position: absolute;
            top:100%;
            left:30%;
            display: none;
        }
        .login-madal input {
            width:90%;
            margin-left:auto;
            margin-right:auto;
            padding:10px;
            margin:20px;
        
        }
        input[type=submit]
        {
            background-color: green;
            border-radius: 5px;
            border: none;
        }
    </style>
    <script>
        function openNav()
        {
            document.getElementById('close').style.width="250px";
        }
        function closeNav()
        {
            document.getElementById('close').style.width="0";
        
        }
        function sign()
        {
            document.getElementById('modal').style.display="block";
        }
    </script>
</head>
<body>
   <div class="header">
    <ul>
        <li><img onclick="openNav()" src="https://o.remove.bg/downloads/cba7ce61-400b-45e5-9561-56c3e625e5c4/download-removebg-preview.png"></li>
        <li><button onclick="sign()">Sign in</button></li>
        <li><a href=" " class="one">Courses</a></li>
        <li><a href=" " class="two">Resources</a></li>
    </ul>
    <div class="left-nav" id="close">
        <ul>
        <li><a href="javascript:void(0)" onclick="closeNav()">&times;</a></li>
        <li><a href="">Darkmode</a></li>
        <li><a href="">Setting</a></li>
        <li><a href="">Helps</a></li>
        <li><a href="">Email us</a></li>
        </ul>
    </div>
    <div class="Login-form">
        <div class="login-madal" id="modal">
            <center><h3>Login form</h3></center>
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <input type="text" placeholder="Confirm Password">
            <input type="submit" placeholder="sign-in">
        </div>
    </div>
   </div>
   <div class="bodyies">
    <h1>E-Learning Platform</h1>
    <p>Accessibility and convenient of the education</p>
    <button>Join Platform</button>
   </div>
   <div class="section">
    <div class="sectionA">
        <h3>Social media</h3>
        
            <a href="www.facebook.com">Facebook</a><br>
            <a href="www.facebook.com">Whatsapp</a><br>
            <a href="www.facebook.com">Emails</a><br>
            <a href="www.facebook.com">Instagram</a><br>
            <a href="www.facebook.com">Youtube</a>
        
    </div>
    <div class="sectionB">
        <h3>Social media</h3>
        
            <a href="www.facebook.com">Facebook</a><br>
            <a href="www.facebook.com">Whatsapp</a><br>
            <a href="www.facebook.com">Emails</a><br>
            <a href="www.facebook.com">Instagram</a><br>
            <a href="www.facebook.com">Youtube</a>
    </div>
    <div class="sectionC">
        <h3>Social media</h3>
        <a href="www.facebook.com">Facebook</a><br>
        <a href="www.facebook.com">Whatsapp</a><br>
        <a href="www.facebook.com">Emails</a><br>
        <a href="www.facebook.com">Instagram</a><br>
        <a href="www.facebook.com">Youtube</a>
    </div>
   </div>
</body>
</html>