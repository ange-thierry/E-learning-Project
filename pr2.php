<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>E-LEARNING PLATFORM</title>
  <style>
    /* Additional CSS styles specific to this page */
    body {
      background-color: #f4f4f4;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Header Styles */
    header {
      background-color: #3b5998;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    header img {
      width: 500px;
      height: 100px;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #3b5998;
      font-weight: bold;
    }

    /* Time Display Styles */
    .time {
      position: absolute;
      top: 7%;
      right: 5%;
      color: #3b5998;
      font-size: 18px;
    }

    /* Main Content Styles */
    main {
      padding: 20px;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }

    /* Image Container Styles */
    .image-container {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
    }

    .image-box {
      text-align: center;
    }

    .image-box img {
      width: 410px;
      height: 250px;
    }

    .column {
      width: 30%;
      margin-top: 20px;
    }

    /* Footer Styles */
    .footer {
      background-color: #3b5998;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-around;
    }

    #about-us, #contact-us {
      text-align: center;
    }

    .cont {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <header>
    <img src="logo.jpg" alt="E-Learning Platform Logo">
    <nav>
      <a href="pr7.php">Home</a>
      <a href="ser.php">Services</a>
      <a href="#about-us">About Us</a>
      <a href="#contact-us">Contact</a>
      <a href="logginElearning.php">Login</a>
    </nav>
  </header>
  <div class="time" id="current-time"></div>
  <script>
    // JavaScript for updating current time
    function updateTime() {
      const currentTimeContainer = document.getElementById('current-time');
      const now = new Date();
      const hours = now.getHours().toString().padStart(2, '0');
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const seconds = now.getSeconds().toString().padStart(2, '0');
      const formattedTime = `${hours}:${minutes}:${seconds}`;
      currentTimeContainer.textContent = formattedTime;
      setTimeout(updateTime, 1000);
    }

    updateTime();
  </script>
  <main>
    <p>
      "In today's rapidly evolving educational landscape, 
      accessibility and convenience have become paramount
      in ensuring that learning opportunities are available to all. 
      A website dedicated to accessibility and convenience in education 
      serves as a digital gateway to a world of knowledge. 
      Accessibility ensures that the content and features of the website 
      are designed to cater to a diverse audience, including individuals 
      with disabilities. This means incorporating features like screen 
      reader compatibility, text-to-speech capabilities, and easy navigation.
      Simultaneously, the website's design should prioritize convenience, 
      making learning materials and resources readily available at the 
      learner's fingertips. Through intuitive navigation, responsive design,
      and the integration of user-friendly interfaces, students can access 
      their educational content seamlessly, from anywhere and at any time.
      The harmonious combination of accessibility and convenience in an 
      educational website not only breaks down barriers to learning but also
      empowers students to pursue education at their own pace, fostering 
      and lifelong learning".
    </p>
    <div class="image-container">
      <div class="image-box">
        <img src="primary1.jpg" alt="Primary">
        <p>Primary</p>
      </div>
      <div class="image-box">
        <img src="o level.JPG" alt="Senior Schools">
        <p>Senior Schools</p>
      </div>
      <div class="image-box">
        <img src="professional.jpg" alt="Professional">
        <p>Professional</p>
      </div>
      <div class="column">
        <h2>Geographical Accessibility</h2>
        <p>
          This platform breaks down the barriers posed by physical distance. 
          Students from remote areas or those unable to access traditional
          educational institutions can now pursue education. This is
          crucial for individuals with limited mobility or living in 
          areas with limited educational resources.
        </p>
      </div>
      <div class="column">
        <h2>Inclusive Learning Environment</h2>
        <p> 
          This platform can create an inclusive space by offering 
          various communication methods such as text allowing for
          interaction and collaboration among students from diverse
          backgrounds, which is beneficial for cultivating a global 
          perspective.
        </p>
      </div>
      <div class="column">
        <h2>Cost-Effective Education</h2>
        <p>
          E-learning often reduces costs associated with traditional
          education, such as commuting expenses, accommodation, or
          purchasing physical textbooks. This makes education more
          affordable and accessible to a broader population.
        </p>
      </div>
    </div>
    <div class="image-container">
      <img src="img10.jpeg" alt="Image 1" height="250" width="410">
      <img src="img11.jpeg" alt="Image 2" height="250" width="410">
      <img src="img12.jpeg" alt="Image 3" height="250" width="410">
      <div class="column">
        <h2>Personalized Learning</h2>
        <p>
          This platform utilizes data analytics and artificial 
          intelligence to offer personalized learning experiences.
          They analyze student performance and preferences to provide
          tailored content and assessments. This enhances the quality
          of education by catering to individual learning styles, 
          strengths, and areas for improvement. It ensures that each
          student has a unique learning path designed to maximize their
          potential.
        </p>
      </div>
      <div class="column">
        <h2>Global Collaboration</h2>
