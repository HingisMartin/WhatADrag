<html>
<head><title>STUDENT</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('#nav').addClass('shrink');
    }
    else {
    $('#nav').removeClass('shrink');
    }
  });
});

</script>
	<script src="http://www.google-analytics.com/analytics.js" async=""></script>
	<script >
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].1=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;
		m.parentNode.insertBefore(a,m)})(window,document,'script','http"//www.google-analytics.com/analytics.js','ga');
		ga('create','UA_69486020-1','auto');ga('send','pageview');
	</script>
	<meta http-equiv="x-ua-compatible" content="ie=edge"/>
	<meta charset="utf-8">
	<style >
	
.flex_class{
display: flex;
justify-content:space-between;
}
#nav{
   height: 70px;
  background: transparent; // Transparent initial setting
  display: block;
  position: fixed;
  width: 100%;
  z-index: 99999;
  transition: all ease .5s;
}
#nav.shrink{
 height: 40px;
  transition: all ease .5s;
  background: #006064; 
  color: white;
}
}
.pad{
	padding: 20px;
	float:left;
}
.pad_logo{
	padding: 10px;
}
@keyframes move {
   0% { transform: translateX(0); }
   25% { transform: translateX(-200px); }
   50% { transform: translateX(-400px); }
   75% { transform: translateX(-600px); }
   100% { transform: translateX(-800px); }
}
.ani{
	animation: move 10s ease 20s  infinite ;
	max-height:800px;
}
	</style>
</head>
<BODY  class="container">
	<div>
		<div>
			<nav id="nav"class="flex_class">
				<DIV  class="pad_logo">PROJECT HANDLER</DIV>
				<div class="pad" id="logo">ACADEMIC CALENDER</div>
				<div class="pad">PROFILE</div>
				<DIV class="pad">RATING</DIV>
				<DIV class="pad">SCHEDULE</DIV>
			</nav>
		</div>
		<div>				
			<img class="ani" style="padding-top:25px;" src="https://wallpapercave.com/wp/bIvdbAb.png">
		</div>
		<div></div>
		<div>
			<form>
				<?php
				include(config.php);
				echo "Group Name: ".$grname."<br>Group Id :".$gid."<br> Group Members : <br> Domain :";
				?>
			</form>
		</div>
	</div>

	<script>
	$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('#nav').addClass('shrink');
    }
    else {
    $('#nav').removeClass('shrink');
    }
  });
});
</script>
</BODY>
</html>