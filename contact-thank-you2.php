<html>
<head>
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
<?php

	$from = "From: $name <$email>";

	if($firstLoad == "no")
	{
		if(($message != "") && ($email != ""))
		{
			if(mail("questions@gloo.com.au","New Mail From Gloo Contact Page:$name - $email",$message,$from))
			{
				echo "Your Message Has Been Sent. Thank-you page goes here.";
			}
			else
			{
				echo "Your Message Has Not Been Sent. Please Try Again Later.";
			}
		}
		else
		{
			echo "Please Fill All Required Fields.";
		}
	}
?>
</body>
</html>
