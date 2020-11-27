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

  $query = "INSERT INTO `cevent` (usn, name, phone_no, email, event_name) VALUES ('$usn', '$name', '$phoneno', '$email', '$sEvent')";
  $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

  echo "<script>alert(\"Registration added successfully\");</script";
  header("Location: Cultural_Events.php");
 }
}

?>

<html>
<head>
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
  <link rel="shortcut icon" href="../img/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Cultural Events | Anaadyanta </title>
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
      /*background-color: #FFAF1B;*/
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
    #fashion {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556169/cultural/fasion.jpg");
    }
    #streetx {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556155/cultural/streetx.jpg");
    }
    #groundzeroe {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487493597/cultural/battle_east.jpg");
    }
    #groundzero {
      background-image: url("cul/groundzero.jpg");
    }
    #choreonitee {
      background-image: url("cul/choreonitee.jpg");
    }
    #choreonitew {
      background-image: url("cul/choreonitew.jpg");
    }
    #s7tosmoke {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556142/cultural/7tosmoke.jpg");
    }
    #solodance {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556130/cultural/SoloDance.jpg");
    }
    #zerowatt {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556151/cultural/accoustic.jpg");
    }
    #thexfactore {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556165/cultural/solo_vocal_east.jpg");
    }
    #thexfactorw {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556167/cultural/solo_vocal_west.jpg");
    }
    #beatbox {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556167/cultural/beatbox.jpg");
    }
    #streetplay {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556170/cultural/streetplay.jpg");
    }
    #improv {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556162/cultural/improv.jpg");
    }
    #monoacting {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556160/cultural/monoacting.jpg");
    }
    #imprint {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487494442/cultural/imprint_web.jpg");
    }
    #collage {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556158/cultural/Collage.jpg");
    }
    #facepainting {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556157/cultural/face_paint.jpg");
    }
    #dslr {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556151/cultural/dslr_photo.jpg");
    }
    #mobilephotography {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486556154/cultural/mobile_photo.jpg");
    }
    #debate {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487495352/cultural/contention.jpg");
    }
    #potpourri {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487496149/cultural/potpourri.jpg");
    }
    #jam {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487496777/cultural/JAM.jpg");
    }
    #generalquiz {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487498156/cultural/quiz.jpg");
    }
    #creativewritting {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487499094/cultural/creative.jpg");
    }
    #fifa {
      background-image: url("cul/fifa.jpg");
    }
    #cs {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486582706/game/ConterStrike.jpg");
    }
    #dota2 {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487499802/game/dota2.jpg");
    }
    #nfs {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486582707/game/nfs_mw.jpg");
    }
    #cod {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486582714/game/modern_war.jpg");
    }
    #minisoccer {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486582707/game/mini_soc.jpg");
    }
    #basketball {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487500024/game/BASKETBALL.jpg");
    }
    #volleyball {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486582771/game/volleyball.jpg");
    }
    #badminton {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1486582710/game/badminton.jpg");
    }
    #treasure {
      background-image: url("https://res.cloudinary.com/dep8pxurn/image/upload/v1487500782/game/treasure-map.jpg");
    }
    #indianjam {
      background-image: url("cul/indianJam.jpg");
    }
    #pictionarykind {
      background-image: url("cul/pictionary.jpg");
    }
    #puzzle {
      background-image: url("cul/puzzle.jpg");
    }
    #craftastic {
      background-image: url("cul/craftastic.jpg");
    }
    #poetry {
      background-image: url("cul/poetrySlam.jpg");
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
      padding:35% 40%;
      border-radius: 100%;
    }

    @media only screen and (max-width:720px) {
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
<body id = "body">

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
          <form action="Cultural_Events.php" method="POST" id = "fr" style = "display:none">
            <br />
            <input type = "text" name = "name" class = "Reg" placeholder="Name" required>&nbsp;&nbsp;&nbsp;
            <input type = "text" name = "usn" class = "Reg" placeholder="USN" required> <br/><br/>
            <input type = "number" name = "phoneno" class = "Reg" placeholder="Phone Number" required>&nbsp;&nbsp;&nbsp;
            <input type = "email" name = "email" class = "Reg" placeholder="Email" required><br><br>
            Event :
           <select name="sEvent">
            <option value="">-- Event --</option>
            <option value="CHOREO NITE(EASTERN)">CHOREO NITE(EASTERN)</option>
            <option value="CHOREO NITE(Western)">CHOREO NITE(Western)</option>
            <option value="STREET X">STREET X</option>
            <option value="7 TO SMOKE">7 TO SMOKE</option>
            <option value="SOLO DANCE">SOLO DANCE</option>
            <option value="GROUND ZERO">GROUND ZERO</option>
            <option value="INDIAN JAM">INDIAN JAM</option>
            <option value="ZERO WATT (ACOUSTICS)">ZERO WATT (ACOUSTICS)</option>
            <option value="THE X FACTOR (VOCAL SOLO) Eastern">THE X FACTOR (VOCAL SOLO) Eastern</option>
            <option value="THE X FACTOR (VOCAL SOLO) Western">THE X FACTOR (VOCAL SOLO) Western</option>
            <option value="BEATBOX">BEATBOX</option>
            <option value="FASHION SHOW">FASHION SHOW</option>
            <option value="STREET PLAY">STREET PLAY</option>
            <option value="IMPROVE">IMPROVE</option>
            <option value="MONOACTING">MONOACTING</option>
            <option value="IMPRINT">IMPRINT</option>
            <option value="Elkova(Pictionary)">Elkova(Pictionary)</option>
            <option value="COLLAGE">COLLAGE</option>
            <option value="FACE PAINTING">FACE PAINTING</option>
            <option value="PUZZLE">PUZZLE</option>
            <option value="CRAFTASTIC">CRAFTASTIC</option>
            <option value="DSLR">DSLR</option>
            <option value="MOBILE PHOTOGRAPHY">MOBILE PHOTOGRAPHY</option>
            <option value="FIFA">FIFA</option>
            <option value="COUNTER STRIKE 1.6">COUNTER STRIKE 1.6</option>
            <option value="DOTA">DOTA</option>
            <option value="NFS Most Wanted">NFS Most Wanted</option>
            <option value="Call of Duty- Modern Warfare">Call of Duty- Modern Warfare</option>
            <option value="MINI SOCCER">MINI SOCCER</option>
            <option value="3 VS 3 BASKETBALL">3 VS 3 BASKETBALL</option>
            <option value="VOLLEYBALL">VOLLEYBALL</option>
            <option value="BADMINTON">BADMINTON</option>
            <option value="CROSS SWORDS(DEBATE)">CROSS SWORDS(DEBATE)</option>
            <option value="POTPOURRI">POTPOURRI</option>
            <option value="JAM">JAM</option>
            <option value="SMARTACUS(GENERAL QUIZ)">SMARTACUS(GENERAL QUIZ)</option>
            <option value="PANDORA'S BOX(CREATIVE WRITING)">PANDORA'S BOX(CREATIVE WRITING)</option>
            <option value="FOR BETTER OR VERSE(POETRY SLAM)">FOR BETTER OR VERSE(POETRY SLAM)</option>
            <option value="TREASURE HUNT">TREASURE HUNT</option>
           </select><br/>
            <input class="button" type = "submit" id="submitt" name="submit" value="Register">
          </form>
        </center>
    </div>
  </div>

  <br>
  <h1 style="font-family: 'fable';"> Cultural Events </h1>
  <br>

  <input type="button" class="button" value="Register" id="regbtn" style="right: 8%; bottom: 6%; position: fixed;">

  <a href="Events_Categories.html" style="position: fixed; margin: -80px 0 0 10px;"> <i class="fa fa-arrow-left fa-2x" aria-hidden="true" ></i></a>
  <div class = "options" id="cul1"><div class="image" id="choreonitee"><span class = "head">CHOREO NITE(EASTERN)</span></div> <!-- <button id="cul1">VIEW</button> -->
  </div>
  <div class = "options" id="cul2"><div class="image" id="choreonitew"><span class = "head">CHOREO NITE(WESTERN)</span></div> <!-- <button id="cul2">VIEW</button> -->
  </div>
  <div class = "options" id="cul3"><div class="image" id="streetx"><span class = "head">STREET X</span></div> <!-- <button id="cul3">VIEW</button> -->
  </div>
  <div class = "options" id="cul4"><div class="image" id="s7tosmoke"><span class = "head">7 TO SMOKE</span></div> <!-- <button id="cul4">VIEW</button> -->
  </div>
  <div class = "options" id="cul5"><div class="image" id="solodance"><span class = "head">SOLO DANCE</span></div> <!-- <button id="cul5">VIEW</button> -->
  </div>
  <div class = "options" id="cul6"><div class="image" id="groundzero"><span class = "head">GROUND ZERO</span></div> <!-- <button id="cul6">VIEW</button> -->
  </div>
  <div class = "options" id="cul7"><div class="image" id="indianjam"><span class = "head">INDIAN JAM</span></div> <!-- <button id="cul7">VIEW</button> -->
  </div>
  <div class = "options" id="cul8"><div class="image" id="zerowatt"><span class = "head">ZERO WATT</span></div> <!-- <button id="cul8">VIEW</button> -->
  </div>
  <div class = "options" id="cul9"><div class="image" id="thexfactore"><span class = "head">THE X FACTOR(EASTERN)</span></div> <!-- <button id="cul9">VIEW</button> -->
  </div>
  <div class = "options" id="cul10"><div class="image" id="thexfactorw"><span class = "head">THE X FACTOR(WESTERN)</span></div> <!-- <button id="cul10">VIEW</button> -->
  </div>
  <div class = "options" id="cul11"><div class="image" id="beatbox"><span class = "head">BEATBOX</span></div> <!-- <button id="cul11">VIEW</button> -->
  </div>
  <div class = "options" id="cul12"><div class="image" id="fashion"><span class = "head">FASHION SHOW</span></div> <!-- <button id="cul12">VIEW</button> -->
  </div>
  <div class = "options" id="cul13"><div class="image" id="streetplay"><span class = "head">STREET PLAY</span></div> <!-- <button id="cul13">VIEW</button> -->
  </div>
  <div class = "options" id="cul14"><div class="image" id="improv"><span class = "head">IMPROV</span></div> <!-- <button id="cul14">VIEW</button> -->
  </div>
  <div class = "options" id="cul15"><div class="image" id="monoacting"><span class = "head">MONO ACTING</span></div> <!-- <button id="cul15">VIEW</button> -->
  </div>
  <div class = "options" id="cul16"><div class="image" id="imprint"><span class = "head">IMPRINT</span></div> <!-- <button id="cul16">VIEW</button> -->
  </div>
  <div class = "options" id="cul17"><div class="image" id="pictionarykind"><span class = "head">Elkova(Pictionary)</span></div> <!-- <button id="cul17">VIEW</button> -->
  </div>
  <!-- <div class = "options" id="cul18"><div class="image" id="collage"><span class = "head">COLLAGE</span></div>  <button id="cul18">VIEW</button>
  </div> -->
  <div class = "options" id="cul19"><div class="image" id="facepainting"><span class = "head">FACE PAINTING</span></div> <!-- <button id="cul19">VIEW</button> -->
  </div>
  <div class = "options" id="cul20"><div class="image" id="puzzle"><span class = "head">PUZZLE</span></div> <!-- <button id="cul20">VIEW</button> -->
  </div>
  <div class = "options" id="cul21"><div class="image" id="craftastic"><span class = "head">CRAFTASTIC</span></div> <!-- <button id="cul21">VIEW</button> -->
  </div>
  <div class = "options" id="cul22"><div class="image" id="dslr"><span class = "head">DSLR</span></div> <!-- <button id="cul22">VIEW</button> -->
  </div>
  <div class = "options" id="cul23"><div class="image" id="mobilephotography"><span class = "head">MOBLIE PHOTOGRAPHY</span></div> <!-- <button id="cul23">VIEW</button> -->
  </div>
  <div class = "options" id="cul24"><div class="image" id="fifa"><span class = "head">FIFA</span></div> <!-- <button id="cul24">VIEW</button> -->
  </div>
  <div class = "options" id="cul25"><div class="image" id="cs"><span class = "head">COUNTER STRIKE 1.6</span></div> <!-- <button id="cul25">VIEW</button> -->
  </div>
  <div class = "options" id="cul26"><div class="image" id="dota2"><span class = "head">DOTA 2</span></div> <!-- <button id="cul26">VIEW</button> -->
  </div>
  <div class = "options" id="cul27"><div class="image" id="nfs"><span class = "head">NFS MOST WANTED</span></div> <!-- <button id="cul27">VIEW</button> -->
  </div>
  <div class = "options" id="cul28"><div class="image" id="cod"><span class = "head">CALL OF DUTY-MORDERN WARFARE</span></div> <!-- <button id="cul28">VIEW</button> -->
  </div>
  <div class = "options" id="cul29"><div class="image" id="minisoccer"><span class = "head">MINI SOCCER</span></div> <!-- <button id="cul29">VIEW</button> -->
  </div>
  <div class = "options" id="cul30"><div class="image" id="basketball"><span class = "head">3V3 BASKETBALL</span></div> <!-- <button id="cul30">VIEW</button> -->
  </div>
  <div class = "options" id="cul31"><div class="image" id="volleyball"><span class = "head">VOLLEYBALL</span></div> <!-- <button id="cul31">VIEW</button> -->
  </div>
  <div class = "options" id="cul32"><div class="image"  id="badminton"><span class = "head">BADMINTON</span></div> <!-- <button id="cul32">VIEW</button> -->
  </div>
  <div class = "options" id="cul33"><div class="image" id="debate"><span class = "head">CROSS SWORDS(DEBATE)</span></div> <!-- <button id="cul33">VIEW</button> -->
  </div>
  <div class = "options" id="cul34"><div class="image" id="potpourri"><span class = "head">POTPOURRI</span></div> <!-- <button id="cul34">VIEW</button> -->
  </div>
  <div class = "options" id="cul35"><div class="image" id="jam"><span class = "head">JAM</span></div> <!-- <button id="cul35">VIEW</button> -->
  </div>
  <div class = "options" id="cul36"><div class="image" id="generalquiz"><span class = "head">SMARTACUS(GENERAL QUIZ)</span></div> <!-- <button id="cul36">VIEW</button> -->
  </div>
  <div class = "options" id="cul37"><div class="image" id="creativewritting"><span class = "head">PANDORA'S BOX(CREATIVE WRITING)</span></div> <!-- <button id="cul37">VIEW</button> -->
  </div>
  <div class = "options" id="cul38"><div class="image" id="poetry"><span class = "head">FOR BETTER OR VERSE(POETRY SLAM)</span></div> <!-- <button id="cul38">VIEW</button> -->
  </div>
  <div class = "options" id="cul39"><div class="image" id="treasure"><span class = "head">TREASURE HUNT</span></div> <!-- <button id="cul39">VIEW</button> -->
  </div>

  <script type="text/javascript" src="cdetails.js"></script>
  <script type="text/javascript" src="ce.js"></script>
  <script type="text/javascript">
      var regbtn = document.getElementById("regbtn");

        close2.onclick = function() {
          bg2.style.display = "none";
          body.style.overflow = "auto";
          fr.style.display = "none";
          regi.style.display = "block";
        }
  </script>

</body>
</html>
