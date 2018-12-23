
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<link href="css/top.css" rel="stylesheet" type="text/css"/>
 <!-- 	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> -->
 	<meta charset="UTF-8">
 	<title>会员信息管理系统</title>
 </head>
 <body class='bg'>

	 <?php 
		include_once("./html/top.html");
		include_once("./html/left.html");
		// include_once("./html/About the system.html");
		if (isset($_GET['type'])) {
			include_once("./html/".$_GET['type'].".html");
		}
	 ?>	
 </body>
 </html>