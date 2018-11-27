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
    <h1>ข้อมูลลูกค้า</h1>
	<div role="main" class="container">
		<div class="card">
			<div class="redeem">
				<?php
				function conn(){
					$conn = new mysqli("localhost", "root","", "tt");
					return $conn;
				}
				if ($_POST['ok'] == 'rede') {
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
							<b>Name : </b><?=$row['name']?>
							<br> 
							<b>No. : </b><?=$row['num']?>
							<br>
							<b>Point : </b><?=$row['star']?>
						</p>
							<form method="POST">
								<input	type="hidden" name="star" value="<?=$row['star']?>">
								<input type="hidden" name="id" value="<?=$row['id']?>">
								<input type="hidden" name="code" value="<?$_POST['code']?>">
								<input type="text" name="code">
								<button class="input" name="ok" value="rd">Comfirm Code
								</button>
							</form>
						<?php
					}
				}
				if ($_POST['ok'] == 'rd') {
					$conn = conn();
					$code=$_POST['code'];
					$code_sql = "SELECT * FROM redeem WHERE re_code=$code";
					$code_result = $conn->query($code_sql);
					$code_row = $code_result->fetch_assoc();
							if(!$code_row){
							      echo '<p class="pb"><b>This code is Incorrect!!!!</b></p>';
							} else {
											$star=$_POST['star'];
											$id=$_POST['id'];
											echo '<p class="pb"><b>Star = ';
											echo $star-10 , '</b></p>'; ?>
											<?php
												$conn = conn();
												$id = $_POST['id'];
												$star = $_POST['star'];
												$sql = "UPDATE phonenumber 
												SET  star =  $star-10
												WHERE  id = $id";
												$conn->query($sql);
												$conn = conn();
									$code_sql = "DELETE FROM redeem WHERE re_code=$code" ;
									$conn->query($code_sql);
												/*$code_sql ="DELETE FROM redeem WHERE re_code=$code"*/
												// $conn->query($code_sql);

								}
								?>
								<br> 
								<center><button class="input" onclick="location.href='index.php'">Back to Homepage</button></center>
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