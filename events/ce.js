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
  console.log(pevent);
  var index;
  var text;
  var cul = [];
  var length = 39;
  var selectedEvent;
  // var culstr = "\"";
  var culstr = "";
  var i = 0;

   for(i=0; i < length; i++)
    {
      cul[i] = "cul" + i;
      culstr += "#" + cul[i]
      culstr += ",";
    }
    cul[i] = "cul" + i;
    culstr += "#" + cul[i];
    // culstr += "\"";;

    console.log(culstr);

    var elements = document.querySelectorAll(culstr);

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