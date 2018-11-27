<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ONE TWO TWO - Promotion</title>
	<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="http://jabont.com/jayss/jayss.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_mobile.css">
    <link rel="stylesheet" type="text/css" href="style_desktop.css">
</head>
<body style="font-family: 'Athiti', sans-serif;">
	<nav>
		<div class="logo">
            <a href="index.php"><img id="shop_logo" src="Multi/icon_122.jpg" align="middle"></a>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="index.php"><h3>Home</h3></a>
				<a href="history.php"><h3>History</h3></a>
				<a href="menu.php"><h3>Menu</h3></a>
				<a href="promotion.php"><h3 class="moment">Promotion</h3></a>
				<a href="contact.php"><h3>Contact</h3></a>
			</div>

			<span class="click left">&nbsp;&nbsp;&nbsp;</span>
			<span class="click right" onclick="openNav()"><b>&#9776;</b></span>
		</div>
		<div id="main_menu">
			<a href="index.php"><li><h3>Home</h3></li></a>
			<a href="history.php"><li><h3>History</h3></li></a>
			<a href="menu.php"><li><h3>Menu</h3></li></a>
			<a href="promotion.php"><li><h3 class="moment">Promotion</h3></li></a>
			<a href="contact.php"><li><h3>Contact</h3></li></a>
		</div>
		
	</nav>
	<div class="cont">
		<h1>ข้อมูลของคุณ</h1>
		<div role="main" class="container">
			<div class="card">
			<div class="redeem">
				<?php
				function conn(){
					$conn = new mysqli("localhost", "root","", "tt");
					return $conn;
				}
				if ($_POST['ok'] == 'pn') {
					//Prepare data
					$num = $_POST['num'];
					//Insert Order
					$conn = conn();
					$sql = "SELECT * FROM phonenumber
					WHERE num = $num";
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					if (!$row) {
						echo '<h4 align="center"><b>Your phone number is Incorrect!</b></h4>'; ?>
						<center><button class="input" onclick="location.href='promotion.php'">Back</button></center>
					<?php } else { ?>
						<p class="pb">
							<b>Name : </b><?=$row['name']?>
							<br> 
							<b>No. : </b><?=$row['num']?>
							<br>
							<b>Point : </b><?=$row['star']?>
						</p>
							<form method="POST">
								<input	type="hidden" name="star" value="<?=$row['star']?>">
								<input type="hidden" name="id" value="<?=$row['id']?>">
								<center><button class="input" name="ok" value="rd">ใช้แต้มของคุณ
								</button></center>
							</form>
						<?php }
				}

				if ($_POST['ok'] == 'rd') {
					$star=$_POST['star'];
					$id=$_POST['id'];
					echo '<b><p class="pb"> แต้มของคุณ : ',$star, '</b>';
					if ($star >= 10) {
						//Show Drinks
						echo "<br>คุณสามารถใช้แต้มแลกน้ำฟรี 1 แก้ว<br>
						<b>แต้มที่ใช้ = 10 แต้ม</b></p>";
						//$drinks=namedrinks;
						?>
						<form method="POST">
							<center><button class="input" name="ok" value="cf">ยืนยัน
							</button></center>
							<input	type="hidden" name="star" value="<?= $star?>">
							<input	type="hidden" name="id" value="<?= $id?>">
						</form>
						<?php 
					} else {
						echo "<br>แต้มของคุณไม่พอสำหรับโปรโมชั่นนี้<br>
						<b>แต้มที่ใช้ = 10 แต้ม</b></p>";
						//$drinks=namedrinks;
					}
				}
				if ($_POST['ok'] == 'cf') {
					// $star = $star-7;
					$star=$_POST['star'];
					$id=$_POST['id'];
					echo '<b><p class="pb">Star = ';
					echo $star-10,'<br></b>';
					$conn = conn();
					$re_code=rand(10000,1000000);
					$code_sql = "INSERT INTO redeem(re_code) VALUES('$re_code')" ;
					$conn->query($code_sql);
					echo "<b>Code: ",$re_code,'<br></b></p>';
					?>
					<center><button class="input" onclick="location.href='index.php'">กลับสู่หน้าแรก</button></center>
					<?php 
				}
			?>
			</div>
		</div>
		</div>
	</div>
	<script type="text/javascript">
		/* Set the width of the side navigation to 250px */
		function openNav() {
		    document.getElementById("mySidenav").style.width = "250px";
		}

		/* Set the width of the side navigation to 0 */
		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		}
	</script>
</body>
</html>