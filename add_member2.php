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
        </div>
    </nav>

    <div class="cont">
    <div role="main" class="container">
    	<div class="card">
    		<div class="login">
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
							Name : <?=$row['name']?>
							<br> 
							No. : <?=$row['num']?>
							<br>
							Point : <?=$row['star']?>
						</p>
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