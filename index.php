<?php
if(isset($_POST['sub'])){
error_reporting(0);
$from=$_POST['from'];
$tel=$_POST['tel'];
$address=$_POST['address'];
$feedback=$_POST['msg']; 
$subject="Review mail from Pocket Diary";
$message="Name : ".$from." Email : ".$address." Phone Number : ".$tel." Feedback : ".$feedback;
$headers="From : Pixo Website User";
mail("pixonoids@gmail.com",$subject,$message,$headers);
?>
<script>window.alert("Thank you for your valuable feedback!");</script>
<?php
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pixonoids</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Stylesheet/mouseparallax.css" rel="stylesheet" type="text/css"/>
    <link href="Stylesheet/main.css" rel="stylesheet">
    <link href="Stylesheet/responsive.css" rel="stylesheet">
    <link href="Stylesheet/perfect-scrollbar.min.css" rel="stylesheet">
    <link href = "Stylesheet/fontAwesome/css/font-awesome.min.css" rel = "stylesheet">
        <link rel="stylesheet" href="ism/css/my-slider.css"/>
  </head>
  <body>
    <div class="divBackMenuToggle"></div>
    <div id="divBody0" class="divBody divActive">
      <div id="divPixoIs">
  		    Pixonoids is&nbsp;<span id="span1">Passion</span>
  		</div>
      <div id="divLogo">

      </div>
      <div id="background" class="mouse-bg"><img id="bgimg1" src="Images/production.png"/></div>
      <div id="foreground" class="mouse-bg"><img src="Images/webdesigning.png"/></div>
      <div id="fore-foreground" class="mouse-bg"><img src="Images/graphics.png"/></div>
      <div id="fore-fore-foreground" class="mouse-bg"><img src="Images/animation.png"/></div>
    </div>
<div id="divBody1" class="divBody divInactive">
    <div class="wrapper" id="scroll">
     <div id="convi">
      <div id="convenor1">
        <div class="heading"><h3>Web Head</h3> </div>
         
        <img src="Images/members/kunal.jpg" id="slideup1"/>
      <div id="hiddeninfo">
        <span>Kunal Sharma</span><br/>
        <span>8628853077</span><br/>
        <span>kunalsharma1221@gmail.com</span>
      </div>
      </div>
      <div id="convenor2">
        <div class="heading"> <h3>Creative Head</h3></div>
        <img src="Images/members/mukul.jpeg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Mukul Chandel</span><br/>
        <span>9459770555 </span><br/>
        <span>mc.mukulchandel@gmail.com</span>
        </div>
      </div>
      
      <div id="convenor3">
        <div class="heading"><h3>Graphics Head</h3></div>
        <img src="Images/members/avantika.jpeg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Avantika Sharma</span><br/>
        <span>7831800177 </span><br/>
        <span>sharma96avantika@gmail.com</span>
        </div>
      </div>
    </div>  
    <div id="convi1">
      <div id="co-convenor1">
         <div class="heading"><h3>Convener</h3></div>
        <img src="Images/members/ayush.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Ayush Mishra</span><br/>
        <span>7417886588</span><br/>
        <span>ayush04mishra@gmail.com</span>
        </div>
      </div>
      <div id="co-convenor2">
        <div class="heading"><h3>Convener</h3></div>
        <img src="Images/members/chandrima.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Chandrima Modgil</span><br/>
        <span>9882541639</span><br/>
        <span>chandrima314@gmail.com</span>
        </div>
      </div>
     </div>   
  <div class="line">
    <h1>Final Year</h1>
   </div> 
  

   <div id="convicopy">
      <div class="abcd">
        <img src="Images/members/mukul.jpeg" id="slideup1"/>
      
       <div id="hiddeninfo">
        <span>Mukul Chandel</span><br/>
        <span>CSE</span><br/>
        <span>9459770555 </span><br/>
       
        </div>
    </div>
      <div class="abcd">
        
        <img src="Images/members/shubham.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Shubham Rana</span><br/>
        <span>CSE</span><br/>
        <span>9459136165 </span><br/>
        </div>
         
       </div> 
      <div class="abcd" id="nomargin">
    
        <img src="Images/members/kunal.jpg" id="slideup1"/>
      <div id="hiddeninfo">
        <span>Kunal Sharma</span><br/>
        <span>CSE</span><br/>
        <span>8628853077</span><br/>
       
      </div>
     
      </div>
      <div class="abcd">
    
        <img src="Images/members/avantika.jpeg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Avantika Sharma</span><br/>
        <span>CSE</span><br/>
        <span>7831800177 </span><br/>
       
        </div>
      </div>
      <div class="abcd">
    
        <img src="Images/members/ishan.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Ishan Dhiman</span><br/>
        <span>ECE</span><br/>
        <span>9805069553</span><br/>
        </div>
      </div>
            <div class="abcd" id="nomargin">
    
        <img src="Images/members/priya.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Priya Vashishth</span><br/>
        <span>CSE</span><br/>
        <span>8894380431</span><br/>
        
        </div>
      </div>
            <div class="abcd">
    
        <img src="Images/members/saloni.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Saloni Bakshi</span><br/>
        <span>CSE</span><br/>
        <span>8894981033</span><br/>
        </div>
      </div>
            <div class="abcd">
    
        <img src="Images/members/anubhuti.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Anubhuti Singh</span><br/>
        <span>CSE</span><br/>
        <span>9882509001</span><br/>
        </div>
      </div>
            <div class="abcd" id="nomargin">
    
        <img src="Images/members/jagriti.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Jagriti Wadhawan</span><br/>
        <span>Architecture</span><br/>
        <span>9805802030</span><br/>
        </div>
      </div>
    </div>  
   <div class="line">
    <h1>Third Year</h1>
   </div> 

       <div id="convicopy">
      <div class="abcd">
        
         
         <img src="Images/members/ayush.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Ayush Mishra</span><br/>
         <span>Mechanical</span><br/>
        <span>7417886588</span><br/>
       
        </div>
      </div>
      <div class="abcd">
        
        <img src="Images/members/chandrima.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Chandrima Modgil</span><br/>
        <span>Architecture</span><br/>
        <span>9882541639</span><br/>
        </div>
      </div>
      
      <div class="abcd" id="nomargin">
    
        <img src="Images/members/saurabh.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Saurabh Kumar</span><br/>
        <span>CSE</span><br/>
        <span>9805075250</span>
        </div>
      </div>
      <div class="abcd">
    
        <img src="Images/members/kiran.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Kiran Sreekumar</span><br/>
        <span>ECE</span><br/>
        <span>9882225497</span>
        </div>
      </div>
      <div class="abcd">
    
        <img src="Images/members/ravi.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Ravi Teja</span><br/>
        <span>ECE</span><br/>
        <span>9882550040</span>
        </div>
      </div>
            <div class="abcd" id="nomargin">
    
        <img src="Images/members/shivam1.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Shivam Dhuria</span><br/>
        <span>CSE</span><br/>
        <span>8091517000</span>
        </div>
      </div>
            <div class="abcd">
    
        <img src="Images/members/shivi.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Shivi Vats</span><br/>
        <span>CSE</span><br/>
        <span>8860008291</span>
        </div>
      </div>
            <div class="abcd">
    
        <img src="Images/members/mukesh.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Mukesh Kumar Kharita</span><br/>
        <span>CSE</span><br/>
        <span>9805075215</span>
        </div>
      </div>
            <div class="abcd" id="nomargin">
    
        <img src="Images/members/prerna.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Prerna Garg</span><br/>
        <span>CSE</span><br/>
        <span>8894362646</span>
        </div>
      </div>
                 <div class="abcd" id="lastmargin">
    
        <img src="Images/members/shivam2.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Shivam Tripathi</span><br/>
        <span>CSE</span><br/>
        <span>8350929741</span>
        </div>
      </div>
                  <div class="abcd">
    
        <img src="Images/members/abhishek.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Abhishek Negi</span><br/>
        <span>CSE</span><br/>
        <span>8894959393</span>
        </div>
      </div>
    </div>
       <div class="line">
    <h1>Second Year</h1>
   </div> 
        <div id="convicopy">
      <div class="abcd">
        <img src="Images/members/sweta.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Sweta</span><br/>
        <span>CSE</span><br/>
        <span>9882876697</span>
      </div>
      </div>
      <div class="abcd">
      <img src="Images/members/anishka.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Anishka Gupta</span><br/>
        <span>CSE</span><br/>
        <span>9882926365</span>
      </div>
    </div>
      <div class="abcd" id="nomargin">
        <img src="Images/members/soniya.jpg" id="slideup1"/>
        <div id="hiddeninfo">
      <span>Soniya Negi</span><br/>
        <span>EEE</span><br/>
        <span>8351976018</span>
      </div>
      </div>
      <div class="abcd">
              <img src="Images/members/anurag.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Anurag Thakur</span><br/>
        <span>CSE</span><br/>
        <span>8894138980</span>
      </div>
      </div>
      <div class="abcd">
        <img src="Images/members/rashpa.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Saurabh Rashpa</span><br/>
        <span>CSE</span><br/>
        <span>9459992490</span>
      </div>
      </div>
      <div class="abcd" id="nomargin">
         
        <img src="Images/members/nancy.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Nancy Chauhan</span><br/>
        <span>ECE</span><br/>
        <span>8894811850</span>
      </div>
      </div>
      <div class="abcd">
        
         
        <img src="Images/members/rohit.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Rohit Thakur</span><br/>
        <span>Mechanical</span><br/>
        <span>7833952855</span>
      </div>
      </div>
      <div class="abcd">

        <img src="Images/members/rohan.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Rohan Verma</span><br/>
        <span>Mechanical</span><br/>
        <span>8351880807</span>
      </div>
              
         
      </div>
      <div class="abcd" id="nomargin">
              
         
        <img src="Images/members/vrinda.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Vrinda Gupta</span><br/>
        <span>CSE</span><br/>
        <span>9882633239</span>
      </div>
      </div>
            <div class="abcd">
        
         
        <img src="Images/members/ritwik.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Ritwik Sharma</span><br/>
        <span>ECE</span><br/>
        <span>9736388781</span>
      </div>
      </div>
            <div class="abcd">
        
         
        <img src="Images/members/aman.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Aman Singh</span><br/>
        <span>Mechanical</span><br/>
        <span>9805365309</span>
      </div>
      </div>


            <div class="abcd" id="nomargin">
        
         
        <img src="Images/members/lekhraj.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Lekhraj Sharma</span><br/>
        <span>Civil</span><br/>
        <span>9882927954</span>
      </div>
      </div>
            <div class="abcd" id="lastmargin">
        
         
        <img src="Images/members/umesh.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Umesh Pant</span><br/>
        <span>ECE</span><br/>
        <span>7831972256</span>
      </div>
      </div>
            <div class="abcd">
        
         
        <img src="Images/members/pankaj.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Pankaj Thakur</span><br/>
        <span>ECE</span><br/>
        <span>8386004685</span>
      </div>
      </div>

    </div>
           <div class="line">
    <h1>First Year</h1>
   </div>
       <div id="convicopy">
            <div class="abcd"> 
        <img src="Images/members/ananya.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Ananyashree Kandoria</span><br/>
        <span>CSE</span><br/>
        <span>9816090455</span>
      </div>
      </div>
                 <div class="abcd">
        
         
        <img src="Images/members/sarita.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Sarita Agarwal</span><br/>
        <span>ECE</span><br/>
        <span>9468947513</span>
      </div>
      </div>
      
                <div class="abcd" id="nomargin">
        <img src="Images/members/karthik.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Karthik Vedantam</span><br/>
        <span>CSE</span><br/>
        <span>8351801841</span>
      </div>
      </div>
                 <div class="abcd">
        
         
        <img src="Images/members/jasmine.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Jasmine Sethi</span><br/>
        <span>ECE</span><br/>
        <span>7018100569</span>
      </div>
      </div>
                 <div class="abcd">
        
         
        <img src="Images/members/abhinav.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Abhinav Mishra</span><br/>
        <span>Mechanical</span><br/>
        <span>8192837889</span>
      </div>
      </div>
                     <div class="abcd" id="nomargin">
        
         
        <img src="Images/members/arpana.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Arpana Mehta</span><br/>
        <span>CSE</span><br/>
        <span>8171782417</span>
      </div>
      </div>


            <div class="abcd" id="lastmargin">
        <img src="Images/members/pranav.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Pranav Mahajan</span><br/>
        <span>ECE</span><br/>
        <span>7807041681</span>
      </div>
      </div>
            <div class="abcd">
    
        <img src="Images/members/nima.jpg" id="slideup1"/>
        <div id="hiddeninfo">
        <span>Nima Tshering Bhutia</span><br/>
        <span>CSE</span><br/>
        <span>9734833314</span>
        </div>
      </div>
    </div>
    
     

    </div>
    </div>


    <div id="divBody2" class="divBody divInactive">
  <a onclick="photocont();"> <img src="Images/production.png" id="web1" alt="photography"/></a>
   <a onclick="webcont();"><img src="Images/webdesigning.png" alt="web" id="web2"></a>   
   <a onclick="graphcont();"><img src="Images/graphics.png" alt="graphics" id="web3"></a>
  <a onclick="animcont();"> <img src="Images/animation.png" alt="animations" id="web4"></a>  
     <div id="written0"><h1 id="workheading">Production</h1><p id="workcontent">This field  basically consists of two departments - the pre-production team and post-production team which work together to produce the proficient output.<br><br>Pre-production<br>It includes photography, the clicking of photographs of events and competitions held in the campus and around and cinematography, the shooting of videos. Photography has been an integral part of team Pixonoids right from the beginning. Seeing the world through the lens is an amazingly different experience in itself.
<br><br>Post-production<br>The shaping of input into the desired output in the form of a walk-up, or a streetbuzz is what post-production team does. We work on softwares like Adobe Lightroom, Adobe Premiere Pro, Sony Vegas etc...</p>
		<button class="sliderbutton0">View Images</button>
     </div>
    <div id="fallnow0"><div class="ism-slider" data-transition_type="instant" data-play_type="loop" data-interval="3000" data-image_fx="zoompan" data-radios="false" id="my-slider">
  <ol>
    <li>
      <img src="ism/image/slides/flower-729514_1280.jpg">
      <div class="ism-caption ism-caption-0">We belong to Pixonoids and Pixonoids belongs to us.</div>
    </li>
    <li>
      <img src="ism/image/slides/beautiful-701678_1280.jpg">
      <div class="ism-caption ism-caption-0">Web Development</div>
    </li>
    <li>
      <img src="ism/image/slides/summer-192179_1280.jpg">
      <div class="ism-caption ism-caption-0">Web Development</div>
    </li>
    <li>
      <img src="ism/image/slides/city-690332_1280.jpg">
      <div class="ism-caption ism-caption-0">Web Development</div>
    </li>
    <li>
      <img src="ism/image/slides/prod1.jpg">
      <div class="ism-caption ism-caption-0">Production</div>
    </li>
    <li>
      <img src="ism/image/slides/prod2.jpg">
      <div class="ism-caption ism-caption-0">Production</div>
    </li>
    <li>
      <img src="ism/image/slides/prod3.jpg">
      <div class="ism-caption ism-caption-0">Production</div>
    </li>
    <li>
      <img src="ism/image/slides/tree-701688_1280.jpg">
      <div class="ism-caption ism-caption-0">Production</div>
    </li>
    <li>
      <img src="ism/image/slides/sky-690293_1280.jpg">
      <div class="ism-caption ism-caption-0">Graphics</div>
    </li>
    <li>
      <img src="ism/image/slides/ye_25419.jpg">
      <div class="ism-caption ism-caption-0">Animation</div>
    </li>
  </ol>
</div>

</div>
    </div>
    <div id="divBody3" class="divBody divInactive">
      <h3 id="contactwalamsg">Leave us a message . . . </h3>
      <form id="reviewus" method="POST" action="">
        <input id="yourname" placeholder="Your name" type="name" name="from">
        <input id="youremail" placeholder="Your mail address" type="email" name="address">
        <input id="yourphone" placeholder="Your phone number" type="tel" name="tel">
        <textarea id="yourmessage" placeholder="Your message" name="msg"></textarea>
        <input type="submit" id="submitreview" value="Submit">
      </form>
      <div id = "continfoz">
        <i class="fa fa-mobile" style="font-size: 4em;margin:2%;margin-left:3%;margin-bottom:5%;"></i><h2 id="callnoz">9887273792</h2><br/>
        <i class="fa fa-envelope-o" style="font-size: 2.5em; margin:2%;  margin-bottom:10%;"></i><h2 id="emailidz">pixonoids@gmail.com</h2><br/>
        <i class="fa fa-building" style="font-size: 2.5em; margin:2%; margin-left:3%; margin-bottom:11%;"></i><h2 id="addressz">Research Lab <br/>Computer Center<br>NIT Hamirpur</h2><br/>
        <i class="fa fa-clock-o" style="font-size: 2.7em; margin:2%;"></i><h2 id="timez">5:00 PM to 11:00 PM</h2>
      </div>
    </div>

  <button onclick="funcBringContent(0)" class="menu menu1" onmouseover="funcChangeColor(event)" onmouseout="funcRevertColor(event)">  <i class="fa fa-home" aria-hidden="true"></i>
 <span class="firstLetter">
H</span>ome </button>
    <button onclick="funcBringContent(1)" class="menu menu2" onmouseover="funcChangeColor(event)" onmouseout="funcRevertColor(event)"><i class="fa fa-users" aria-hidden="true"></i>
 <span class="firstLetter">M</span>embers </button>
    <button onclick="funcBringContent(2)" class="menu menu3" onmouseover="funcChangeColor(event)" onmouseout="funcRevertColor(event)"><i class="fa fa-cogs" aria-hidden="true"></i>
 <span class="firstLetter">W</span>hat we do </button>
    <button onclick="funcBringContent(3)" class="menu menu4" onmouseover="funcChangeColor(event)" onmouseout="funcRevertColor(event)"><i class="fa fa-phone" aria-hidden="true"></i>
 <span class="firstLetter">C</span>ontact Us </button>

    <div id="menuButton" onclick="toggleMenu()">| | |</div>

    <div id="divLogoSmall"> </div>
    <div id="divFooter">
     <div id="footerCopyright">Made with &nbsp;<i class = "fa fa-heart"></i> &nbsp;By Pixonoids</div>
     <div id="footerRight">Follow us on: &nbsp;<a href = "#"><i class = "fa fa-facebook-official"></i></a><a href = "#"><i class = "fa fa-youtube-play"></i></a><a href = "#"><i class = "fa fa-instagram"></i></a></div>
    </div>
    <script src="JS/jquery.min.js"> </script>
    <script src="JS/contentView.js"></script>
    <script type="text/javascript" src="JS/pixoIs.js"></script>
    <script src="JS/menuToggleMobile.js"></script>
    <script src="JS/work.js"></script>
    <script src="JS/mouse.parallax.js"></script>
        <script src="JS/perfect-scrollbar.jquery.min.js"></script>
       <script src="ism/js/ism-2.2.min.js"></script>
  </body>
  </html>
