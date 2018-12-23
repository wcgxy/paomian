<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Home</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="http://maxcdn.bootstrapcdn.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- bg effect -->
	<div id="bg">
		<canvas></canvas>
		<canvas></canvas>
		<canvas></canvas>
	</div>
	<!-- //bg effect -->
	<!-- title -->
	<h1>会员信息管理系统</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form action="#" method="post">
			<h2>Login Now
				<i class="fas fa-level-down-alt"></i>
			</h2>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					管理员账号
				</label>
				<input placeholder="Username" name="Name" type="text" required="">
			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					密码
				</label>
				<input placeholder="Password" name="Password" type="password" required="">
			</div>
			<!-- checkbox -->
			
			<!-- //checkbox -->
			<input type="submit" value="登录">
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>泡面团队 <a target="_blank" href="https://www.cnblogs.com/98-10-22-25/">&#x535A;&#x5BA2;&#x56ED;&#x5730;&#x5740;</a></p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- //Jquery -->

	<!-- effect js -->
	<script src="js/canva_moving_effect.js"></script>
	<!-- //effect js -->
<?php 
    include_once("conn.php");
    session_start();
    if(isset($_POST['Name']) && isset($_POST['Password'])) 
        {
        $_SESSION['Name']= $_POST['Name'];
        $_SESSION['Password']= $_POST['Password'];
        try{
        $querystr="select * from 管理者";
        $result=$pdo->query($querystr);
        //$row=$pds->fetch(PDO::FETCH_ASSOC);
        }catch(Exception $exc){
        echo $exc->getMessage();
        }
        if ($result->rowCount()>0) {
            $flag=false;
        foreach ($result as $value) {
            if ($value['账号']==$_SESSION['Name'] && $value['密码']==$_SESSION['Password']) {
               header("Location:main.php");
               
            }
        }
        }
        if(!$flag){
                echo    '<div style="color:red;text-align:center">出错啦：用户名或者密码错误！</div>';
            }
    }
 ?>
</body>
</html>