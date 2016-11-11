var active=0,prev,x;
function funcBringContent(x){
  if(x!=active){
    document.getElementsByClassName("divBackMenuToggle")[0].className="divBackMenuToggle";
    document.getElementById("menuButton").innerHTML="| | |";
    if(active==0){
      document.getElementsByClassName("menu1")[0].className="menu menuSlide1";
      document.getElementsByClassName("menu2")[0].className="menu menuSlide2";
      document.getElementsByClassName("menu3")[0].className="menu menuSlide3";
      document.getElementsByClassName("menu4")[0].className="menu menuSlide4";
      document.getElementById("divLogoSmall").style.top="2%";
      if(menuCount!=0) menuCount++;
    }
    else if(x==0){
      document.getElementById("divLogoSmall").style.top="-10%";
      document.getElementsByClassName("menuSlide1")[0].className="menu menu1";
      document.getElementsByClassName("menuSlide2")[0].className="menu menu2";
      document.getElementsByClassName("menuSlide3")[0].className="menu menu3";
      document.getElementsByClassName("menuSlide4")[0].className="menu menu4";
      if(menuCount!=0)  menuCount++;
    }

    else {
      if(document.getElementsByClassName("menu")[0].className=="menu menuToggled menuSlide1"){
        document.getElementsByClassName("menu")[0].className="menu menuSlide1";
        document.getElementsByClassName("menu")[1].className="menu menuSlide2";
        document.getElementsByClassName("menu")[2].className="menu menuSlide3";
        document.getElementsByClassName("menu")[3].className="menu menuSlide4";
      }
      else {
        document.getElementsByClassName("menu")[0].className="menu menuSlide1";
        document.getElementsByClassName("menu")[1].className="menu menuSlide2";
        document.getElementsByClassName("menu")[2].className="menu menuSlide3";
        document.getElementsByClassName("menu")[3].className="menu menuSlide4";
      }
      if(menuCount!=0) menuCount++;
    }
    var activeDiv=document.getElementById("divBody"+active);
    var reqDiv=document.getElementById("divBody"+x);
    if(x<active) reqDiv.style.zIndex="100";
    activeDiv.style.transform="translateZ(-500px)";
    reqDiv.className="divBody divActive";
    prev=active;
    active=x;
    setTimeout(funcErr, 500);
  }
}

function funcErr(){
  var p=document.getElementById("divBody"+prev);
  var q=document.getElementById("divBody"+active);
  p.style.transform="translateZ(0px)";
  p.style.zIndex="0";
  p.className="divBody divInactive";
  q.style.zIndex="0";
}

function funcChangeColor(event){
  if (active==0) {
    event.target.style.color="#8B4789";
    event.target.querySelector(".firstLetter").style.color="#8B4789";
  }
  else if (active==1) {
    event.target.style.color="#FF6347";
    event.target.querySelector(".firstLetter").style.color="#FF6347";
  }
  else if (active==2) {
    event.target.style.color="#6cd744";
    event.target.querySelector(".firstLetter").style.color="#6cd744";
  }
  else {
    event.target.style.color="#089de3";
    event.target.querySelector(".firstLetter").style.color="#089de3";
  }
}
function funcRevertColor(event){
  event.target.style.color="white";
  event.target.querySelector(".firstLetter").style.color="white";
}

function photocont(){
  document.getElementById("workheading").innerHTML="Production";
  document.getElementById("workcontent").innerHTML="This field basically consists of two departments - the pre-production team and post-production team which work together to produce the proficient output.<br><br>Pre-production<br>It includes photography, the clicking of photographs of events and competitions held in the campus and around and cinematography, the shooting of videos. Photography has been an integral part of team Pixonoids right from the beginning. Seeing the world through the lens is an amazingly different experience in itself.<br><br>Post-production<br>The shaping of input into the desired output in the form of a walk-up, or a streetbuzz is what post-production team does. We work on softwares like Adobe Lightroom, Adobe Premiere Pro, Sony Vegas etc...";
}
function webcont(){
  document.getElementById("workheading").innerHTML="Web Designing";
  document.getElementById("workcontent").innerHTML="Web development is a broad term for the work involved in developing a web site for the Internet. We are responsible for developing the websites of the cultural and technical fests of our college. The official website of Hill'ffair, the cultural fest of the institute, is made in the summer semester. The official website of Nimbus, the technical fest of the college, is made in the winter semester.<br> We are a team of creative and technically inclined people who work on both the front-end and back-end of the website. We work on technologies like HTML, CSS, JavaScript, Jquery, AngularJS etc for making the client-side aesthetically appealing. For the back-end, we mainly work on NodeJS and PHP. ";
}
function graphcont(){
  document.getElementById("workheading").innerHTML="Graphics";
  document.getElementById("workcontent").innerHTML="As the name indicates, this team designs the posters, flexes, flyers, visual designs, images for the events and competitions that take place from time to time, be it Adam and Eve, Campus Star or Spic Macay etc. Also, the invitations, posters of contests, events organised by sponsors, posters of different club's performances in the cultural amd technical events of NITH namely Hillffair and Nimbus are designed and made by this team. The software used Adobe Photoshop. Posters are the main source of information for anything that is going to be organised in campus, both online and offline. They assit the other teams in deciding about the graphical interface etc.";
}
function animcont(){
  document.getElementById("workheading").innerHTML="Animation";
  document.getElementById("workcontent").innerHTML="The pre-launch, main video, etc of the cultural extravaganza - Hillffair and pre-launch, gaming videos,etc. of technical fest - Nimbus are animated by the Animation team. We work on softwares like Adobe After Effects. These videos provide the basic idea about the upcoming events, participation, competitions going to be organised, sponsors, dates of the events information. ";
} 
function displaymyinfo(num){
  document.getElementById("hiddenquotes"+num).style.visibility="visible";
  document.getElementById("hi"+num).style.visibility="hidden";
}
function hidemyinfo(num){
  document.getElementById("hiddenquotes"+num).style.visibility="hidden";
  document.getElementById("hi"+num).style.visibility="visible";
}
 $(document).ready(function(){
      $(".sliderbutton0").click(function(){
        $("#fallnow0").fadeIn();
      });
      $("#fallnow0").click(function(){
        $("#fallnow0").slideUp();
      });
      $('#background').mouseParallax({ moveFactor: 10 });
      $('#foreground').mouseParallax({ moveFactor: 10 });
      $('#fore-foreground').mouseParallax({ moveFactor: 10 });
      $('#fore-fore-foreground').mouseParallax({ moveFactor: 10 });       
      $('#scroll').perfectScrollbar({
          wheelSpeed: 20,
          wheelPropagation: false
        });
    });
