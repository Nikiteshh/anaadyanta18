<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
  $error='';
if(isset($_POST['submit'])){
 if(empty($_POST['name']) || empty($_POST['sEvent'])){
   echo "<script>alert(\"Error\");</script";
 }
 else
 {

  $usn = $_POST['usn'];
  $name = $_POST['name'];
  $phoneno = $_POST['phoneno'];
  $email = $_POST['email'];
  $sEvent = $_POST['sEvent'];

  $query = "INSERT INTO `tevent` (usn, name, phone_no, email, event_name) VALUES ('$usn', '$name', '$phoneno', '$email', '$sEvent')";
  $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

  echo "<script>alert(\"Registration added successfully\");</script";
  header("Location: Technical_Events.php");
 }
}

?>

<html>
<head>
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
  <link rel="shortcut icon" href="../img/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Technical Events | Anaadyanta </title>
  <style>
  @font-face {
  font-family: 'Fable';
  src: url('../font/Fable.ttf') format('truetype');
 }
* {

  transition: all 0.5s ease;
}
    body {
      margin:0;
      background-color: #FFAF1B;
      font-family: 'Kavivanar', cursive;
     background-image: url("../img/bg.png");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      /*background: #fc4a1a;
      background: -webkit-linear-gradient(to bottom, #f7b733, #fc4a1a);
      background: linear-gradient(to bottom, #f7b733, #fc4a1a);
      background-attachment: fixed;*/
    }
    h1 {
      text-align: center;
      color: #210002;
      font-size: 3em;
      /*font-family: 'Fable';*/
    }
    div.options {
      display: flex;
      overflow: hidden;
      justify-content: center;
      align-items: center;
      background-color: #321113;
      float: left;
      height: 25vw;
      width: 25vw;
      margin: 3.6%;
      margin-top: 3.16%;
      transition: all 0.5s ease;

    }
    div.popup {
      display: none;
      overflow: auto;
      position: fixed;
      height: 100%;
      width: 100%;
      z-index: 5;
      background-color: rgba(0,0,0,0.7);
      color:black;
    }
    input[type=text], input[type=email], input[type=number] {
      color: White;
      box-shadow: none;
      background-color: rgba(0,0,0,0);
      border: none;
      border-bottom: solid;
      font-size: 1.5em;
      border-color: white;
    }
    input[type=text]:focus, input[type=email]:focus, input[type=number]:focus {

      box-shadow: none;
      background-color: rgba(0,0,0,0);
      border: none;
      border-bottom: solid;
      border-color: brown;
      outline: none;
    }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    div.content {
      padding: 1em 2em;
      border-radius: 50px;
      border: 10px solid #210002;
      width: 80%;
      opacity: 1;
      background-color: #EE9E0A;
      align-self: center;
      margin: 20px auto;
    }
    h1 {
      text-align: center;
      font-size: 3em;
      /*font-family: 'Fable';*/
    }
    div.options {
      display: flex;
      overflow: hidden;
      justify-content: center;
      align-items: center;
      background-color: #321113;
      float: left;
      height: 25vw;
      width: 25vw;
      margin: 3.6%;
      margin-top: 3.16%;
      transition: all 0.5s ease;

    }
    a{
      text-decoration: none;
    }
    img.events {
      object-fit: cover;
      display: inline-block;
      margin-left: auto;
      margin-right: auto;
      vertical-align: middle;
      flex-shrink: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: 1;
      transition: all 0.5s ease;
    }
    div.options:hover img.events {
        margin-top: -150%;
        z-index: 2;
    }
    div.options h1 {
      text-align: center;
      position: absolute;
    }
    div.options button{
      cursor: pointer;
      z-index: 0;
      position:absolute;
      height: 3em;
      width: 6vw;
      border: none;
      background-color: rgba(150,150,150,0.7);
      margin-top:9vw;
      transition: all 0.5s ease;
      letter-spacing: 0.1em;
    }
    div.options button:hover{
      background-color: rgba(255,200,100,1);
      width: 10vw;
    }
    .centerer {
      display: inline-block;
      height: 25vw;
      vertical-align: middle;
    }
    div.image {
      overflow: hidden;
      display: flex;
      /* filter: grayscale; */
      position: absolute;
      align-items: center;
      justify-content: center;
      z-index: 1;
      height: 25vw;
      width: 25vw;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-color: rgba(50, 50, 50, 0.5);
    }
    div.options:hover div.image {
      /*margin-top: -6vw;*/
      width: 30%;
    }
    span.head {
      background-color: rgba(0,0,0,0.3);
      padding: 0.5em 0.5em;
      width: 100%;
      z-index: 3;
      font-size: 1.5em;
      text-align: center;
      color: white;
      position: absolute;
      border: solid;
    }

    div.options:hover span.head {
      padding:40% 50%;
      border-radius: 100%;
    }
    #fullthrottle {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486581117/tech/full_throttle.jpg");
    }
    #geekcoder {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486581115/tech/onspot.jpg");
    }
    #paperplane {
      background-image: url("tec/paperplane.jpg");
    }
    #bridgemaster {
      background-image: url("tec/bridgemaster.jpg");
    }
    #bugmenot {
      background-image: url("tec/bugmenot.jpg");
    }
    #techaudit {
      background-image: url("tec/techaudit.jpg");
    }
    #guessthecode {
      background-image: url("tec/guessthecode.jpg");
    }
    #hackathon {
      background-image: url("tec/hackathod.jpg");
    }
    #episode {
      background-image: url("tec/episode.jpg");
    }
    #crypthunt {
      background-image: url("tec/crypthunt.jpg");
    }
    #cubeopen {
      background-image: url("tec/cubeopen.jpg");
    }
    #droptheegg {
      background-image: url("tec/droptheegg.jpg");
    }
    #geekcoder {
      background-image: url("tec/geekcoder.jpg");
    }
    #enigmacodecracker {
      background-image: url("tec/enigmacodecracker.jpg");
    }
    #vrmazerunner {
      background-image: url("tec/vrmazerunner.jpg");
    }
    #jahaaz {
      background-image: url("tec/jahaaz.jpg");
    }
    #robowars {
      background-image: url("tec/robowars.jpg");
    }
    #rcplane {
      background-image: url("tec/rcplane.jpg");
    }
    #automotivequiz {
      background-image: url("tec/automotivequiz.jpg");
    }
    #bhkdraft {
      background-image: url("tec/2bhkdraft.jpg");
    }
    #waterrocketry {
      background-image: url("tec/waterrocketry.jpg");
    }
    #linefollower {
      background-image: url("tec/linefollower.jpg");
    }
    #whatthephysics {
      background-image: url("tec/whatthephysics.jpg");
    }

    #header {
      position: fixed;
      margin-top:0;
      margin-left: 10vw;
      height: 20vh;
      width: 80vw;
      transition: all 0.5s ease;

    }
    #footer {
      position: fixed;
      margin-top:80vh;
      margin-left: 10vw;
      height: 20vh;
      width: 80vw;
      transition: all 0.5s ease;
    }
    #header:hover {
      opacity: 0.6;
      overflow: hidden;
      background-color:#000;
      position: fixed;
      margin-top:0;
      margin-left: 10vw;
      height: 80vh;
      width: 80vw;
    }
    #footer:hover {
      opacity: 0.6;
      background-color:#000;

      position: fixed;
      margin-top:20vh;
      margin-left: 10vw;
      height: 80vh;
      width: 80vw;
    }
    h1.reg {
      color:#000;
      display: block;
      font-size: 3em;
      transition: all 0.5s ease;
    }
    .sides:hover h1.reg {
      display: none;
    }

    @media only screen and (max-width:720px) {
      input[type=text] {
        width:60vw;
      }
      .sides:hover p{
        margin-top: 10vh;
      }
      #header {
        position: fixed;
        margin-top:0;
        margin-left: 0vw;
        height: 20vh;
        width: 100vw;
        transition: all 0.5s ease;
      }
      #footer {
        position: fixed;
        margin-top:80vh;
        margin-left: 10vw;
        height: 20vh;
        width: 80vw;
        transition: all 0.5s ease;
      }
      #header:hover {
        opacity: 0.6;
        background-color:#000;
        overflow: auto;
        position: fixed;
        margin-top:0;
        margin-left: 0vw;
        height: 80vh;
        width: 100vw;
      }
      #footer:hover {
        opacity: 0.6;
        background-color:#000;
        position: fixed;
        margin-top:20vh;
        margin-left: 0vw;
        height: 80vh;
        width: 100vw;
      }
      div.options {
        height: 80vw;
        width: 80vw;
        margin: 10vw;
      }
      div.options button{
        position: absolute;
        z-index: 0;
        width: 20vw;
        margin-top:25vw;
        margin-left: -10vw;
      }
      div.options button:hover{
        width: 30vw;
        margin-left: -15vw;
      }
      div.image {
        z-index: 1;
        height: 80vw;
        width: 80vw;
        background-image: url("bg1.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
      }
      div.options:hover div.image {
      margin-top: -20vw;
      }
  }

  .button {
    background-color: #CCCC00;
    border-radius: 15px;
    border: 2px solid #333300;
    color: white;
    padding: 17px 37px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    z-index: 4;
  }
  .button:hover {
    background-color: #333300;
    border: 2px solid #CCCC00;
    padding: 25px 42px;
    font-size: 24px;
  }
  select{
    padding: 5px 20px;
    font-size: 16px;
    margin-left: 0px;
  }

  #submitt{
    margin-top: 50px;
  }

  </style>
</head>
<body id="body">
  <div class = "popup" id = "bg">
    <div style="float:right;cursor:pointer;padding:1em 1em; color: white;" id = "close">&#10006;</div>
    <div class = "content">
      <div class = "description">
        <center>
          <h1 class = "reg" style="text-decoration: underline;"><span id="pevent"></span></h1>
        </center>

        <p><b>Description:<br></b> <span id="pdescription"></span></p>
        <p><b>Rules:</b><br><span id="prule"></span> </p>
        <p><b>Reg. Fee:</b> <span id="preg"></span> </p>
        <p><b>Prize:</b> &emsp;&emsp;<span id="pprize"></span> </p>
        <p><b>Contact:</b> &emsp;<span id="pcontact"></span> </p>
      </div>
<!--       <div class = "register">
        <center><h1 class = "reg" id = "regi" style = "cursor: pointer">REGISTER</h1></center>
          <center>
          <form action="Cultural_Events.php" method="POST" id = "fr" style = "display:none">
            <br />
            <input type = "text" name = "name" class = "Reg" placeholder="Name" required>&nbsp;&nbsp;&nbsp;
            <input type = "text" name = "usn" class = "Reg" placeholder="USN" required> <br/><br/>
            <input type = "text" name = "phoneno" class = "Reg" placeholder="Phone Number" required>&nbsp;&nbsp;&nbsp;
            <input type = "text" name = "email" class = "Reg" placeholder="Email" required><br><br>
            <input type = "submit" name="submit" value="Register">
          </form>
        </center>
      </div> -->
    </div>
  </div>

  <div class = "popup" id = "bg2">
    <div style="float:right;cursor:pointer;padding:1em 1em; color: white;" id = "close2">&#10006;</div>
    <div class = "content">
        <center><h1 class = "reg" id = "regi" style = "cursor: pointer">REGISTER</h1></center>
          <center>
          <form action="Technical_Events.php" method="POST" id = "fr" style = "display:none">
            <br />
            <input type = "text" name = "name" class = "Reg" placeholder="Name" required>&nbsp;&nbsp;&nbsp;
            <input type = "text" name = "usn" class = "Reg" placeholder="USN" required> <br/><br/>
            <input input type="number" name = "phoneno" class = "Reg" placeholder="Phone Number" required>&nbsp;&nbsp;&nbsp;
            <input type = "email" name = "email" class = "Reg" placeholder="Email" required><br><br>
            Event :
           <select name="sEvent">
            <option value="">-- Event --</option>
            <option value="FULL THROTTLE">FULL THROTTLE</option>
            <option value="PAPER PLANE">PAPER PLANE</option>
            <option value="GEEK CODER">GEEK CODER</option>
            <option value="TECH AUDIT">TECH AUDIT</option>
            <option value="AUTOMOTIVE QUIZ">AUTOMOTIVE QUIZ</option>
            <option value="EPISODE">EPISODE</option>
            <option value="CRYPT HUNT">CRYPT HUNT</option>
            <option value="ROBO WARS">ROBO WARS</option>
            <option value="HACKATHON">HACKATHON</option>
            <option value="CUBE OPEN">CUBE OPEN</option>
            <option value="RC PLANE">RC PLANE</option>
            <option value="DROP THE EGG">DROP THE EGG</option>
            <option value="BRIDGE MASTER">BRIDGE MASTER</option>
            <option value="ENIGMA CODE CRACKER">ENIGMA CODE CRACKER</option>
            <option value="VR MAZE RUNNER">VR MAZE RUNNER</option>
            <option value="WATER ROCKETRY">WATER ROCKETRY</option>
            <option value="2BHK DRAFT">2BHK DRAFT</option>
            <option value="LINE FOLLOWER">LINE FOLLOWER</option>
            <option value="BUG ME NOT (CODE DEBUGGING)">BUG ME NOT (CODE DEBUGGING)</option>
            <option value="JAHAAZ">JAHAAZ</option>
            <option value="WHAT THE PHYSICS">WHAT THE PHYSICS</option>
            <option value="GUESS THE CODE">GUESS THE CODE</option>
           </select><br/>
            <input class="button" type = "submit" id="submitt" name="submit" value="Register">
          </form>
        </center>
    </div>
  </div>

  <br>
  <h1 style="font-family: 'fable';"> Technical Events </h1>
  <br>

  <input type="button" class="button" value="Register" id="regbtn" style="right: 8%; bottom: 6%; position: fixed;">

  <a href="Events_Categories.html" style="position: fixed; margin: -80px 0 0 10px;"> <i class="fa fa-arrow-left fa-2x" aria-hidden="true" ></i></a>
  <div class = "options" id="tec1"><div class="image" id= "fullthrottle"><span class = "head">FULL THROTTLE</span></div><!-- <button id="tec1">VIEW</button> -->
  </div>
  <div class = "options" id="tec2"><div class="image" id= "paperplane"><span class = "head">PAPER PLANE</span></div><!-- <button id="tec2">VIEW</button> -->
  </div>
  <div class = "options" id="tec3"><div class="image" id= "geekcoder"><span class = "head">GEEK CODER</span></div><!-- <button id="tec3">VIEW</button> -->
  </div>
  <div class = "options" id="tec4"><div class="image" id= "techaudit"><span class = "head">TECH AUDIT</span></div><!-- <button id="tec4">VIEW</button> -->
  </div>
  <div class = "options" id="tec5"><div class="image" id= "automotivequiz"><span class = "head">AUTOMOTIVE QUIZ</span></div><!-- <button id="tec5">VIEW</button> -->
  </div>
  <div class = "options" id="tec6"><div class="image" id= "episode"><span class = "head">EPISODE</span></div><!-- <button id="tec6">VIEW</button> -->
  </div>
  <div class = "options" id="tec7"><div class="image" id= "crypthunt"><span class = "head">CRYPT HUNT</span></div><!-- <button id="tec7">VIEW</button> -->
  </div>
  <div class = "options" id="tec8"><div class="image" id= "robowars"><span class = "head">ROBO WARS</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec9"><div class="image" id= "hackathon"><span class = "head">HACKATHON</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec10"><div class="image" id= "cubeopen"><span class = "head">CUBE OPEN</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec11"><div class="image" id= "rcplane"><span class = "head">RC PLANE</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec12"><div class="image" id= "droptheegg"><span class = "head">DROP THE EGG</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec13"><div class="image" id= "bridgemaster"><span class = "head">BRIDGE MASTER</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec14"><div class="image" id= "enigmacodecracker"><span class = "head">ENIGMA CODE CRACKER</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec15"><div class="image" id= "vrmazerunner"><span class = "head">VR MAZE RUNNER</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec16"><div class="image" id= "waterrocketry"><span class = "head">WATER ROCKETRY</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec17"><div class="image" id= "bhkdraft"><span class = "head">2BHK DRAFT</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec18"><div class="image" id= "linefollower"><span class = "head">LINE FOLLOWER</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec19"><div class="image" id= "bugmenot"><span class = "head">BUG ME NOT (CODE DEBUGGING)</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec20"><div class="image" id= "jahaaz"><span class = "head">JAHAAZ</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec21"><div class="image" id= "whatthephysics"><span class = "head">WHAT THE PHYSICS</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>
  <div class = "options" id="tec22"><div class="image" id= "guessthecode"><span class = "head">GUESS THE CODE</span></div><!-- <button id="tec8">VIEW</button> -->
  </div>


  <script type="text/javascript" src="tech.js"></script>

    <script>
  var n = 0;
  var bg = document.getElementById("bg");
  var regbtn = document.getElementById("regbtn");
  var body = document.getElementById("body");
  var close = document.getElementById("close");
  var close2 = document.getElementById("close2");
  var regi = document.getElementById("regi");
  var fr = document.getElementById("fr");
  var pdescription = document.getElementById("pdescription");
  var prule = document.getElementById("prule");
  var preg = document.getElementById("preg");
  var pprize = document.getElementById("pprize");
  var pcontact = document.getElementById("pcontact");
  var pevent = document.getElementById("pevent");
  var index;
  var text;


    var tec = [];
    var length = 23;
    // var culstr = "\"";
     var tecstr = "";

    for(var i=0; i < length; i++)
    {
      tec[i] = "tec" + i;
      tecstr += "#" + tec[i]
      tecstr += ",";
    }
    tec[i] = "tec" + i;
    tecstr += "#" + tec[i];
    // culstr += "\"";;

    var elements = document.querySelectorAll(tecstr);

    for(var i=0; i < elements.length; i++)
    {
      elements[i].addEventListener("click",function(){
          text = this.id;
          index = parseInt(text.slice(3,text.length+1));
          bg.style.display = "block";
          body.style.overflow = "hidden";
          pevent.innerHTML = details[index-1].name;
          pdescription.innerHTML = details[index-1].description;
          prule.innerHTML = details[index-1].rule;
          preg.innerHTML = details[index-1].reg;
          pprize.innerHTML = details[index-1].prize;
          pcontact.innerHTML = details[index-1].contact;
          // console.log(description[index-1]);
        close.onclick = function() {
          bg.style.display = "none";
          body.style.overflow = "auto";
          fr.style.display = "none";
          regi.style.display = "block";
        }
        regi.onclick = function() {
            fr.style.display = "block";
            regi.style.display = "none";
        }
      });
    }

    regbtn.onclick = function(){
      bg2.style.display = "block";
      body.style.overflow = "hidden";
      fr.style.display = "block";
      regi.style.display = "none";
      close2.onclick = function() {
          bg2.style.display = "none";
          body.style.overflow = "auto";
          fr.style.display = "none";
          regi.style.display = "block";
        }
    }

    console.log(elements);

  </script>


</body>
</html>
