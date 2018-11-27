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
        <h1>ONE TWO TWO COFFEE BAR</h1>
        <h2 align="center">เข้าสู่ระบบพนักงาน</h2>
        <div role="main" class="container">
            <div class="card">
            	<div class="login">
            		<form method="POST" action="checklogin.php">
        			<b>Username: <input type="text" name="username">
        			<br>
        			Password: <input type="text" name="password">
        			<br>
                    <br></b>
        			<input class="input" type="submit" name="submit" value="login">
        		</form>
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