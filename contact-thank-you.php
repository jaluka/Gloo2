<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="gloo_style.css" rel="stylesheet" type="text/css">
<form class="body" action="survey_pt2.php" method="post" name="survey_pt1">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37010113-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td height="40" valign="bottom"><img src="images/Logo-web-155-36.jpg" alt="Gloo Courses: speed reading, memory improvement and study skills courses in Melbourne, Sydney, Canberra, Brisbane and around Australia" width="155" height="36" border="0"></td>
		<td height="40" valign="bottom" class="body"><div align="right"><i>Gloo Memory, Speed Reading And<br>Study Skills Courses By Christopher Lyons</i><br><font color="black"><b>Call Us On 02 9089 8892</b></font></div>	
				</td>
			</tr>
		</table>

<table width="700" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="700" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27"><a href="index.html"><img src="images/buttons/01_.gif" alt="Home" width="60" height="23" border="0" /></a></td>
    <td><a href="about.html"><img src="images/buttons/02-.gif" alt="Gloo Who?" width="85" height="23" border="0" /></a></td>
    <td><a href="wiify.html"><img src="images/buttons/03-.gif" alt="What's In It For You?" width="140" height="23" border="0" /></a></td>
    <td><a href="products.html"><img src="images/buttons/04-.gif" alt="Products and Services" width="149" height="23" border="0" /></a></td>
    <td><a href="testimonials.html"><img src="images/buttons/05-.gif" alt="Testimonials" width="98" height="23" border="0" /></a></td>
    <td><a href="freestuff.html"><img src="images/buttons/06-.gif" alt="Free Stuff" width="83" height="23" border="0" /></a></td>
    <td><a href="contact.html"><img src="images/buttons/07-over.gif" alt="Contact Us" width="85" height="23" border="0" /></a></td>
  </tr>
</table>
<table width="700" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="527" height="300" valign="top"><?php
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$company = $_POST['company'];
$hphone = $_POST['hphone'];
$email = $_POST['email'];
$message = $_POST['message'];

$message = "Name: ".$fname . " " . $sname . "\n" . "Company: ".$company."\n". "Contact Phone: ".$hphone."\n"
		. "Email: ".$email."\n\n". "Message:\n\n ".$message."\n";
	
	$from = "From: $fname <$email>";

		if(($message != "") && ($email != ""))
		{
			if(mail("questions@gloo.com.au","New Mail From Gloo Contact Page:$fname - $email",$message,$from))
			{
?>      
			
<p class="body" align="left"><br>
<img src="IMAGES/elegantfish.jpg" width="207" height="106" border="0">
      </p>
           
 <p><img src="images/dotline_bk_02.gif" height="2" width="527"></p>   
   
	<h2><font color="navy">Thank You!</font></h2>
	    
		  		<p class="body"><b>
Your message has been sent.</b><br><br>We will be in touch with you really soon - usually within 24 hours.
<br><br><font color="navy">
<b>Looking to make this your best year yet?<br><br></b></font>

Discover the 3 most overlooked and underused tools to save you heaps of time and boost your success...<BR>

<br><br>

<div align="center">
  <table width="527" height="116" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="top"><p class="body" align="center">
<img src="images/header3.jpg" width="476" height="113"><br>

<b><br>Read Faster, Remember More, Tackle Information Overload<br><br>
<a href="thehiddenadvantageworkshopsummary.html">The Hidden Advantage Workshop</a>
<br><br><br></b>
</td>
    </tr>
  </table>
</td>
<?
			}
			else
			{
			echo "Due to heavy network traffic, your message couldn't be sent. Please Try again";
			}
		}
		else
		{
			echo "Please Fill All Required Fields.";
		}
?></td>
    <td width="10">&nbsp;</td>
    <td width="1" nowrap="nowrap" background="images/dotline_bk_03.gif" class="small"></td>
    <td width="10" class="small">&nbsp;</td>
    <td width="152" valign="top" class="small"><table width="152" border="0" cellspacing="0" cellpadding="0">
      <tr>

      </table>
    <p>&nbsp;</p>      <p class="small">&nbsp;</p>
    </td>
  </tr>
</table>
<table width="675" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>  <br>
   <td class="body"><div align="center">	&nbsp;<a href="/">Home</a> | <a href="about.html">About Us</a> | <a href="wiify.html">What's In It For You?</a> | <a href="products.html">Products + Services</a> | <a href="testimonials.html">Testimonials</a> | <a href="freestuff.html">Free Stuff</a> | <a href="contact.html">Contact</a><br> 					<a href="thehiddenadvantageworkshopsummary.html">Public Workshops</a> | <a href="High-School-Study-Skills-Programs-Sydney-Melbourne.html">Student Courses</a> | <a href="In-House-Workshops-And-Personal-Coaching-Programs.html">Staff Training Courses</a> | <a href="coaching.html">Personal Coaching Programs</a><br><a href="Online-Training-Courses-And-Coaching-Programs.html">Online Training Programs</a> | <a href="Top-Tips-And-Techniques.html">Top Tips And Techniques</a> | <a href="privacypolicy.html">Privacy Policy</a><br>Copyright 2015 Gloo Memory, Speed Reading And Study Skills Courses By Christopher Lyons</div><br>
    </td>
  </tr>
</table>
</body></form>
</html>
