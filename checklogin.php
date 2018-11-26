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
    		<div class="redeem">
    	<?php
			function conn(){
				$conn = new mysqli("localhost", "root","", "tt");
				return $conn;
			}
					    $username = $_POST['username'];
						$password = $_POST['password'];
						$conn = conn();
						$sql = "SELECT * FROM employee
						WHERE username = $username
						AND password = $password";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						if(!$row){
						      echo "Username and Password Incorrect!";
						  }else{
						  	?>
									<p class="pb">
										ID : <?=$row['id']?>
										<br> 
										Username : <?=$row['username']?>
										<br>
									</p>
									    <button onclick="location.href='emp_redeem.php'">Redeem</button>
									    <button onclick="location.href='add_member1.php'">Add member</button>

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