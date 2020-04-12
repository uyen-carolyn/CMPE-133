<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body{
  background-color: #4D4E5F;

}
/* Button used to open the menu */
.menu-button {
  background-color:#BFBDBD;
  color:white;
  font-weight: bold;
  font-size: 12px;
  width: 100px;
  padding:16px 2px;
  cursor: pointer;
  position: fixed;
  top: 2%;
  right: 2%;
  width: 100px;
  border-radius: 10px;
}

/* The menu */
.form-popup {
  display: none;
  position: fixed;
  top: 9%;
  right: 2%;
}


/* Add styles to the menu container */
.form-container {
  width: 175px;
  padding: 16px 2px;
  background-color:lightgray;
  border-radius: 10px;
}




/* Set a style for the buttons in menu form */
.form-container .btn {
  background-color:#FFFFFF;
  color: #7C7A7A;
  padding: 10px 40px;
  border: none;
  width: 150px;
  display: block;
  margin: 10px;
  border-radius: 10px;
  font-family: 'Montserrat', sans-serif;

}



/* Add hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

h4 {
text-align: center;
line-height: 320px;
font-size: 50px;
font-family: 'Montserrat', sans-serif;
color: white;
}

h5{

  text-align: center;
  font-size: 50px;
  font-family: 'Montserrat', sans-serif;
  color: white;
}

h1{
font-size: 15px;

}
h2{
font-size: 15px
}
h3{
font-size: 15px
}
</style>
</head>
<body>

<h4>Welcome</h4>
<h5> Choose your story </h5>


<button class="menu-button" onclick="openForm()">Menu</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">

     <button type="submit" class="btn" formaction="http://localhost/chatroom/about.php">About Us</button>
     <button type="submit" class="btn" formaction="http://localhost/chatroom/login.php">Play Game</button>


    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>


function openForm() {

  document.getElementById("myForm").style.display = "block";

}

function closeForm() {

  document.getElementById("myForm").style.display = "none";

}
</script>

</body>
</html>
