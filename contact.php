<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ONE TWO TWO - Contact</title>
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
                <a href="promotion.php"><h3>Promotion</h3></a>
                <a href="contact.php"><h3 class="moment">Contact</h3></a>
            </div>

            <span class="click left">&nbsp;&nbsp;&nbsp;</span>
            <span class="click right" onclick="openNav()"><b>&#9776;</b></span>
        </div>
        <div id="main_menu">
            <a href="index.php"><li><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3 class="moment">Contact</h3></li></a>
        </div>
        
    </nav>

    <div class="cont">
        <h1>Contact</h1>
        <div class="flexible">
            <div class="contact">
                <h2>Hours :</h2>
                <p>Everyday 7.30AM - 5.45PM</p>
            </div>
            <div class="contact">
                <h2>Tel :</h2>
                <p>095 - 958 - 3674</p>
            </div>
        </div>
        <div class="flexible">
            <div class="contact">
                <h2>Price :</h2>
                <p>60 - 120 Baht/person</p>
            </div>
            <div class="contact">
                <h2>Social :</h2>
                <p>
                    Facebook Page : One Two Two Coffee Bar<br>
                    Instagram : Onetwotwocoffeebar
                </p>
            </div>
        </div>
        <br>
        <div class="con_add">
            <h2>Address :</h2>
            <p>37/3 Soi Muban SeriVilla Yaek 4, Khwaeng Nong Bon, Prawet, Bangkok 10250</p>
        </div>
        <br>
        <h2 style="text-align: center;">Map</h2>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2255.6074070743307!2d100.6474615843594!3d13.686298394365682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6076657be2c5%3A0xa663c4f424ec2740!2sOne+Two+Two+Coffee+Bar!5e0!3m2!1sth!2sth!4v1543203837932" width="75%" height="350px" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>
    </div>

    <div class="icon_area">
        <a href="https://www.facebook.com/Onetwotwocoffeebar/" target ="_blank"><img class="icon" src="Multi/fb_icon.png"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/onetwotwocoffeebar/" target ="_blank"><img class="icon" src="Multi/ig_icon.png"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.google.co.th/maps/place/One+Two+Two+Coffee+Bar/@13.6860306,100.6464808,17z/data=!3m1!4b1!4m5!3m4!1s0x311d6076657be2c5:0xa663c4f424ec2740!8m2!3d13.6860254!4d100.6486695?hl=th&authuser=0" target ="_blank"><img class="icon" src="Multi/map_icon.png"></a>
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