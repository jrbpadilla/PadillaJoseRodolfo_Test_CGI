<!DOCTYPE html>
<html>
<title>Homepage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; background-color: #3FA8D5;" id="mySidebar" >
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="objectives.php" class="w3-bar-item w3-button">Objectives</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div id="main">

<div class="w3-blue">
  <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776; About Me</button>

</div>



<div class="w3-container">
 <style>
* {
  box-sizing: border-box;
}

body {
  background-image: url(bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height:950px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="row">
  <div class="column">
      <center><img src="pic1.jpg" style="width: 700px;"></center>
  </div>
  <div class="column">
    <center>
      <br><br>
    <h2><b>Jose Rodolfo Bolivar Padilla</b></h2>
    <p style="font-style: italic;">22 / Bachelor of Science in Information Technology / City College of Calamba</p></center>
    <p>I am seeking for an opportunity to be employed and trained to the one of the best companies in the country. I want to improve my skills and experience for the better future. I'm a graduate of Bachelor of Science in Information Technology at City College of Calamba. I'm currently residing at Barangay Batino Calamba City Laguna. I was born on January 17, 2000 at Barangay Malinta, Los Banos, Laguna.</p>
    <p>I finished elementary at Los Banos Central Elementary School in Los Banos, Laguna in the year of 2012. I took my junior high school in Asian Computer College in the year 2016 which is located at Mayapa, Calamba City, Laguna. I took Accountancy and Business Management (ABM) strand in senior high school at Perpetual Help System Dalta-Calamba Campus and graduated in the year 2018. I took my bachelors degree at City College of Calamba and graduated with Service Awardee and Athletic Awardee. </p>

<hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <h3><b>My Service</b></h3>
    <p style="font-style: italic;"><b><i class='far fa-edit'></i> Multimedia Editing</b></p>
    <p>I have a knowledge about Adobe Photoshop, video editing and photography.</p>

    <p style="font-style: italic;"><b><i class='far fa-file'></i> Microsoft Office</b></p>
    <p>I have a basic knowledge on every microsoft office, I can use every microsoft office that the company will assign to me.</p>

    <p style="font-style: italic;"><b><i class='fas fa-desktop'></i> Programming</b></p>
    <p>I know the C language, PHP, HTML, and CSS programming language that I can use to create an output with these languages.</p>

    <p style="font-style: italic;"><b><i class='fas fa-tools'></i> Hardware</b></p>
    <p>I can be technical in terms of hardware. I can fix devices like desktop, laptop and routers when it comes to wirings and hardware.</p>

<hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <h3><b>Social Media Accounts</b></h3>
    <a href="https://mail.google.com/mail/u/0/#inbox"><img src="gmail.png" style="width: 25px; height: 25px;"> jrbpadilla00@gmail.com</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="https://www.facebook.com/jrbpadilla17"><img src="fb.png" style="width: 30px; height: 30px;"> Korei</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="https://www.linkedin.com/in/jose-rodolfo-padilla-302441244/"><img src="link.png" style="width: 28px; height: 28px;"> Jose Rodolfo Padilla</a>

  </div>
</div>

</body>
</html>


</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
