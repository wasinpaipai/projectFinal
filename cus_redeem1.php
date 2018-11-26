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
			<img id="shop_logo" src="Multi/icon_122.jpg" align="middle">
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
					while($row = $result->fetch_assoc()) {
					?>
						<p class="pb">
							Name : <?=$row['name']?>
							<br> 
							No. : <?=$row['num']?>
							<br>
							Point : <?=$row['star']?>
						</p>
							<form method="POST">
								<input	type="hidden" name="star" value="<?=$row['star']?>">
								<input type="hidden" name="id" value="<?=$row['id']?>">
								<button name="ok" value="rd">Remdeem
								</button>
							</form>
						
						<?php
					}
				}

				if ($_POST['ok'] == 'rd') {
						$star=$_POST['star'];
						$id=$_POST['id'];
						echo '<p>',$star; 
						if ($star >= 10) {
							//Show Drinks
							echo "<br>Select your Drinks with the fade button and javascript animation</p>";
							//$drinks=namedrinks;
							?>
							<form method="POST">
								<button name="ok" value="cf">Confirmm!!!
								</button>
								<input	type="hidden" name="star" value="<?= $star?>">
								<input	type="hidden" name="id" value="<?= $id?>">
							</form>
							<?php 
								}
							}
				if ($_POST['ok'] == 'cf') 
				{
					// $star = $star-7;
					$star=$_POST['star'];
					$id=$_POST['id'];
					echo "<p>Star = ";
					echo $star-10,'<br>';
					$conn = conn();
					$re_code=rand(10000,1000000);
					$code_sql = "INSERT INTO redeem(re_code) VALUES('$re_code')" ;
					$conn->query($code_sql);
						echo "Code: ",$re_code,'<br></p>';
						?>
							<button onclick="location.href='index.php'">Back to Homepage</button>
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