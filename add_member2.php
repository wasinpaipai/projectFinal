<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ONE TWO TWO - Employee</title>
	<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="http://jabont.com/jayss/jayss.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_mobile.css">
    <link rel="stylesheet" type="text/css" href="style_desktop.css">
</head>
<body style="font-family: 'Athiti', sans-serif;">
   <nav>
        <div class="logo">
             <a href="emp_login.php"><img id="shop_logo" src="Multi/icon_122.jpg" align="middle"></a>
        </div>
    </nav>

    <div class="cont">
	<h1>เพิ่มข้อมูลสำเร็จ</h1>
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
				$name = $_POST['name'];
				$num = $_POST['num'];
				//Insert Order

				$conn = conn();
				$sql = "INSERT INTO phonenumber(
					name, 
					num
				)
				VALUES (
					'$name',
					'$num'
				)";
				$conn->query($sql);

					$num = $_POST['num'];
					$conn = conn();
					$sql = "SELECT * FROM phonenumber
					WHERE num = $num";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()) {
					?>
						<p class="pb">
							<b>Name : </b><?=$row['name']?>
							<br> 
							<b>No. : </b><?=$row['num']?>
							<br>
							<b>Point : </b><?=$row['star']?>
						</p>
						<br>
						<button class="input" onclick="location.href='emp_login.php'">กลับสู่หน้าแรก</button>
					<?php 
				}
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