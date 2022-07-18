<?php

/* NOZIEKA BERAGAI ANAK DENIAL
      UNIMKL-011290
      khcy3nbe@nottingham.edu.my*/

session_start();
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
?> 


<!DOCTYPE html>
<html>
<head>
<title>Beautiful Sarawak: Niah Cave</title>


<meta name="description" content="This web page is about Niah Cave, Sarawak">
<meta name="keywords" content="Niah, cave, Gua Niah, Beautiful Sarawak">
<meta name="author" content="Beautiful Sarawak">


<link rel="icon" href="icon.png" type="image/png" sizes="16x16">
<link rel="stylesheet" type="text/css" href="mystyle2.css">


<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "0fe51e72-0174-412d-a20c-c1c28eef03d3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


<script src="jquery.js"></script> <?php //Learn how to make simple roudabout JQuery from https://github.com/fredleblanc/roundabout// ?>
<script src="jquery.roundabout.js"></script> 
<script src="jquerymigrate.js"></script> 
<script>
   $(document).ready(function() {
      $('ul').roundabout({
         autoplay: true,
         autoplayDuration: 3000,
         autoplayPauseOnHover: true
      });
   });
</script> 


<script>
function setCookie(cname,cvalue,exdays)
{
var d = new Date();
d.setTime(d.getTime()+(exdays*24*60*60*1000));
var expires = "expires="+d.toGMTString();
document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname)
{
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++) 
  {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
return "";
}

function checkCookie()
{
var user=getCookie("username");
if (user!="")
  {
  alert("We meet again " + user + ". Hope that you will continue enjoying this website (^_^)");
  }
else 
  {
  user = prompt("Please enter your name:","");
  if (user!="" && user!=null)
    {
    setCookie("username",user,30);
    }
  }
}
</script>
</head>
<body onload="checkCookie()">

<div class ="logo">
<img src="logo.png">
</div>

<div class="title">
<a href="index.php">Home  &nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="about.php">About  &nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="contact.php">Contact  &nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="gallery.php">Gallery  &nbsp;&nbsp;</a>
</div >


<div class="style3">
<script language="JavaScript">
    var today = new Date();
    var month = new Array('January','February','March','April','May','June',
			  'July','August','September','October','November','December');
    var year = today.getYear();
	
    document.write('Today is '+ today.getDate()+' '+month[today.getMonth()]+' '+(year + 1900)+'<br>');
    document.write('Your last visiting time is: '+today.getHours()+':'+today.getMinutes()+'<br>');
</script>
</div>


<div class="header">


<div class="style1">
<ul>
		<li><img src="/slides/0.png" alt="" height="100%" width="100%" title="Cave mouth"/></li>
		<li><img src="/slide/1.png" alt="" height="100%" width="100%" title="Main Entrance Gate"/></li>
		<li><img src="/slide/2.png" alt="" height="100%" width="100%" title="Niah Headquarters"/></li>
		<li><img src="/slide/3.png" alt="" height="100%" width="100%" title="Visitor Chalet"/></li>
		<li><img src="/slide/4.png" alt="" height="100%" width="100%" title="Boat that is use to across the river"/></li>
		<li><img src="/slide/5.png" alt="" height="100%" width="100%" title="Jungle cement walkway"/></li>
		<li><img src="/slide/6.png" alt="" height="100%" width="100%" title="Jungle wooden plank walkway"/></li>
		<li><img src="/slide/7.png" alt="" height="100%" width="100%" title="Cave wooden plank walkway"/></li>
		<li><img src="/slide/8.png" alt="" height="100%" width="100%" title="Inside the cave"/></li>
		<li><img src="/slide/9.png" alt="" height="100%" width="100%" title="Cave mouth"/></li>
		<li><img src="/slide/10.png" alt="" height="100%" width="100%" title="Birdnest collecting area"/></li>
		<li><img src="/slide/11.png" alt="" height="100%" width="100%" title="Padang, where shafts of sunlight stream down from large holes in the cave roof "/></li>
		<li><img src="/slide/12.png" alt="" height="100%" width="100%" title="Scenery"/></li>
    <li><img src="/slide/13.png" alt="" height="100%" width="100%" title="Inside Painted Cave"/></li>    
    <li><img src="/slide/14.png" alt="" height="100%" width="100%" title="Inside Painted Cave"/></li>
    <li><img src="/slide/15.png" alt="" height="100%" width="100%" title="Monkey"/></li>
    <li><img src="/slide/16.png" alt="" height="100%" width="100%" title="Butterfly"/></li>
    <li><img src="/slide/17.png" alt="" height="100%" width="100%" title="Map to Niah National Park"/></li>
</ul> 


<hr size="2" width="100%" align="center" noshade>


&copy 2014 Beautiful Sarawak


<div>
<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_blogger_large' displayText='Blogger'></span>
<span class='st_myspace_large' displayText='MySpace'></span>
<span class='st_email_large' displayText='Email'></span>
</div>


<div>
<audio controls autoplay>
  <source src="sape.mp3" type="audio/mpeg">
  <source src="sape.ogg" type="audio/ogg">
  <embed height="50" width="100" src="sape.mp3">
</audio>
</div>


<div align="center">
<div class="view">
<?php echo "Page Viewed by You in This Session: ". $_SESSION['views'];?>
</div>
</div>


</div>
</div>


</body>
</html>
<?php ?>