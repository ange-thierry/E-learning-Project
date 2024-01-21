
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-LEARNING PLATFORM</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  .time {
    position:absolute;
    top:7%;
    right:5%;
  }
</style>
<body>
    <body bgcolor="white">
  <div>
    <table width="100%">
    <center><img src="logo2.png" alt=" " height="200px" width="1000px"></center>
      <th><font size="10">E-LEARNING PLATFORM</font></th>
      <th>
        <a href="home.php">Home</a>
        <a href="#about-us">About us</a>
        <a href="#contact-us">Contacts</a>
        <a href="logginElearning.php"> user login</a>
        <a href="login2.php">Admin login</a>
      </th>
    </table>
  </div>
  <div class="time" id="current-time"></div>
  <script>
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
  <div>
    <p>
      "In today's rapidly evolving educational landscape, 
      accessibility and convenience have become paramount
       in ensuring that learning
       opportunities are available to all. A website dedicated 
       to accessibility and
        convenience in education serves as a digital gateway to 
        a world of knowledge. 
        Accessibility ensures that the content and features of 
        the website are designed 
        to cater to a diverse audience, including individuals
         with disabilities. This
         means incorporating features like screen reader
          compatibility, text-to-speech
          capabilities, and easy navigation. Simultaneously,
           the website's design should
           prioritize convenience, making learning materials
            and resources readily
            available at the learner's fingertips. Through 
            intuitive navigation,
             responsive design, and the integration of user-friendly
              interfaces,
             students can access their educational content seamlessly, 
             from anywhere
              and at any time. The harmonious combination of accessibility
               and convenience
               in an educational website not only breaks down barriers
                to learning but also 
               empowers students to pursue education at their own pace,
                fostering 
                and lifelong learning".
      </p>
  </div>
  <div class="image-container">
    <div class="image-box">
        <img src="primary1.jpg" alt=" ">
        <p>primary </p>
    </div>
    <div class="image-box">
      <img src="o level.JPG" alt=" ">
        <p>senior schools</p>
    </div>
    <div class="image-box">
        <img src="professional.jpg" alt=" ">
        <p>professional</p>
    </div>
    <div class="column">
        <h2>Geographical Accessibility</h2>
        <p>
            This platform breaks down the barriers posed by physical distance. 
            Students from remote areas or those unable to access traditional
             educational institutions can now pursue education. This is
              crucial for individuals with limited mobility or living in 
              areas with limited educational resources
        </p>
    </div>
    <div class="column">
      <h2>Inclusive Learning Environment</h2>
      <p> This platform can create an inclusive space by offering 
        various communication methods such as text allowing for
         interaction and collaboration among students from diverse
          backgrounds, which is beneficial for cultivating a global 
          perspective.</p>
  </div>
  <div class="column">
    <h2>Cost-Effective Education</h2>
    <p>E-learning often reduces costs associated with traditional
         education, such as commuting expenses, accommodation, or
          purchasing physical textbooks. This makes education more
           affordable and accessible to a broader population</p>
</div>
    </div>
    <img src="img10.jpeg" alt=" " height="250"  width="410">
    <img src="img11.jpeg" alt=" "  height="250"  width="410">
    <img src="img12.jpeg" alt=" " height="250"  width="410">
    <div class="parallel">
    <div class="column">
        <h2>Personalized Learning</h2>
        <p>
            This platforms utilize data analytics and artificial 
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
      <p> This platforms facilitate global collaboration and networking.
         Students from different parts of the world can engage in 
         discussions, projects, and cultural exchanges. This global perspective
          not only enriches the educational experience but also prepares 
          students for an increasingly interconnected world, fostering 
          cross-cultural understanding and cooperation.</p>
  </div>
  <div class="column">
    <h2>Flexibility Scheduling</h2>
    <p>Traditional education often necessitates a rigid schedule, making 
        it challenging for individuals with busy lives to pursue further
         learning. E-learning platforms offer flexibility in scheduling, 
         allowing students to customize their learning journey to fit their
          work, family, and personal commitments. This flexibility empowers
           professionals, parents, and those with non-traditional schedules 
           to access education at their convenience</p>
</div>
</div>
    <img src="img13.jpeg" alt=" " height="250"  width="410">
    <img src="img14.jpeg" alt=" "  height="250"  width="410">
    <img src="img15.jpg" alt=" " height="250"  width="410">
   <center><h1>In association with: </h1></center>
    <img src="thinkbig.jpg" alt=" " height="100"  width="230">
    <img src="reb.jpeg" alt=" "  height="100"  width="230">
    <img src="UNICEF.png" alt=" " height="100"  width="230">
    <img src="ur.jpg" alt=" " height="100"  width="230">
    <img src="cambridge.png" alt=" "  height="100"  width="230">
    <img src="wda.png" alt=" "  height="100"  width="230">

    <hr>
    <div class="footer">
      <div id="about-us">
        <h2>ABOUT US</h2>
        <p>NAT Inc.</p>
        <div class="cont">
          Designed by Thierry
          <p>All rights reserved. &copy; 2023</p>
        </div>
      </div>

      <div id="contact-us">
        <h2>OUR CONTACTS </h2>
        <p>TEL: +250782451980</p>
        <p>E-MAIL: elearningplatform@gmail.com</p>
        <p>TELEGRAM: 0782451980</p>
        <p>WHATSAPP: 0787836308</p>
      </div>
    </div>
    
</body>
</html>