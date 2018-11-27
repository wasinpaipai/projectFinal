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
    	<h1>Hello, Welcome.</h1>
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

						if (!$row) {
						    echo '<h4 align="center">Username and Password Incorrect!</h4>'; ?>
						<center><button class="input" onclick="location.href='cus_login.php'">Back</button></center>
					<?php
						} else {
							?>
							<p class="pb">
								<b>ID : </b><?=$row['id']?>
								<br> 
								<b>Username : </b><?=$row['username']?>
								<br>
							</p>
							<button class="input" onclick="location.href='emp_redeem.php'">Put Code</button>
							<button class="input" onclick="location.href='add_member1.php'">Add member</button>
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