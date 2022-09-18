<?php require('connection.php'); 
session_start()  
?>
<!DOCTYPE html>
<html>
<head>
	<title>@পড়িPOINT/Home</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link rel="stylesheet" type="text/css" href="CSS/new.css">
	
    
    
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
</head>
<body>
<header class="main-header clearfix" role="header">
	<div class="logo">
	<h1><em>@পড়ি</em> Point</h1>	
	  </div>
      <?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{
    echo"
    <div class='user'>
      User Name:   $_SESSION[username]  -<a href='logout.php'>LOG OUT </a>
    </div>
    ";
}
?>
	</header>
	
	<p>Welcome to   <em>@পড়ি</em><em1>POINT</em1> <em>...</em></p>
	<br>
	
	<br>
	
	<a href="index_Main_Science.php" style="--clr:#00FF00"><span>Science</span><i></i></a>
	<a href="index_Main_Commerce.php" style="--clr:#FF0000"><span>Commerce</span><i></i></a>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/62dca41f54f06e12d88b0178/1g8mu277b';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4938034475866068"
     crossorigin="anonymous"></script>



</body>
</html>