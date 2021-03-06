<!-- about code based on https://www.w3schools.com/howto/howto_css_about_page.asp-->
<!DOCTYPE html>
<html>
<head>
        <title>About the Team!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="icon" href="images/favicon.ico">
</head>
<style>
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  overflow-x:hidden;
}
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
.row {
  width: 1700px;
  height: 700px;
}
.columnleft, .columnright {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
}

.columnleft {
  margin-left: 200px;
}

.columnright {
  margin-top: -688px;
  margin-left: 850px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 490px;
}
.about-section {
  padding: 100px;
  padding-bottom: 50px;
  text-align: center;
  background-color: #021631;
  background: url("images/about-bg.jpg");
  color: white;
}
.about-text {
  padding: 70px;
  background-color: rgba(0,12,38, 0.6);
}

.container {
  padding: 0 16px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
img {
  width:  490px;
  height: 490px;
}
.title {
  color: grey;
}
a {
  color: white;
}

.repo {
  color: #DCC48E;
}

.repo:hover {
  color: #446DF6;
  text-decoration: none;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
/*h1 animation*/
h1 {
  text-align:center;
  display:inline-block;
  font-size: 70px;
  border-right: solid 5px rgb(255,255,255);
  white-space: nowrap;
  overflow: hidden;
  animation: animated-text 4s steps(29,end) 0s 1 normal both,
             animated-cursor 600ms steps(29,end) infinite;
}
@keyframes animated-text{ /*text animation*/
  from{width: 0px;}
  to{width: 475px;}
}
@keyframes animated-cursor{ /* cursor animations */
  from{border-right-color: rgb(255,255,255);}
  to{border-right-color: transparent;}
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #021631 !important;">
    <div class="container">
      <a class="navbar-brand" href="#">Chatroom Adventures</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/chatroom/welcome.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About the Team
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/chatroom/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="about-section">
  <div class="about-text">
    <h1>About the Team.</h1>
    <p style="font-size:20px;">Our web application is a class project for our Spring 2020 Software Engineering II class (CMPE 133) at SJSU.<br>
      This class project consists of creating a web application of our choice using any language and operating system platform.<br>
      To view our project's full code, <a class="repo" href="https://github.com/uyen-carolyn/CMPE-133"> click here to check out our repository!</a></p>
  </div>
</div>
<h2 style="text-align:center; padding-top: 20px; padding-bottom: 10px;">Our Team Members</h2>
<div class="row">
  <div class="columnleft">
    <div class="card">
      <img src="images/profile-bri.jpg" alt="brian" style="width:100%">
      <div class="container">
        <h2>Brian Albert Redoloza</h2>
        <p class="title">Team Member</p>
        <p>It was fun creating the story for this adventure!</p>
        <p>GitHub: Redoloza-BrianAlbert</p>
      </div>
    </div>
  </div>
  <div class="columnright">
    <div class="card">
      <img src="images/profile-risha.jpg" alt="risha" style="width:100%">
      <div class="container">
        <h2>Risha Ray</h2>
        <p class="title">Team Member</p>
        <p>I love designing and developing applications!</p>
        <p>GitHub: risharay</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="columnleft">
    <div class="card">
      <img src="images/profile_Yenni.jpg" alt="yenni" style="width:100%">
      <div class="container">
        <h2>Yenni Lam</h2>
        <p class="title">Team Member</p>
        <p>It's amazing how code can make so many things!</p>
        <p>GitHub: YenniLamb</p>
      </div>
    </div>
  </div>
  <div class="columnright">
    <div class="card">
      <img src="images/profile-uyen.jpg" alt="uyen" style="width:100%">
      <div class="container">
        <h2>Uyen Nguyen</h2>
        <p class="title">Team Member</p>
        <p>Creating this app was a blast! I hope you enjoyed it!</p>
        <p>GitHub: uyen-carolyn</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
