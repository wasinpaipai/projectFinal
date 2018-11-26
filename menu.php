<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ONE TWO TWO - Menu</title>
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
                <a href="menu.php"><h3 class="moment">Menu</h3></a>
                <a href="promotion.php"><h3>Promotion</h3></a>
                <a href="contact.php"><h3>Contact</h3></a>
            </div>

            <span class="click left">&nbsp;&nbsp;&nbsp;</span>
            <span class="click right" onclick="openNav()"><b>&#9776;</b></span>
        </div>
        <div id="main_menu">
            <a href="index.php"><li><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3 class="moment">Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </div>
        
    </nav>

    <div class="cont">
        <h1>รายการอาหาร</h1>
        <h4 align="center">Special Drink</h4>
        <table class="list_menu" style="width: 100%; text-align: center;">
            <tr>
                <th></th>
                <th>COLD</th>
            </tr>
            <tr>
                <td class="menu_name">Espresso Coconut Pudding (เอสเปรสโซ่พุดดิ้งมะพร้าว)</td>
                <td>80</td>
            </tr>
            <tr>
                <td class="menu_name">Sparkling Orange Coffee (สปาร์คกลิ้ง ออเรนจ์ คอฟฟี่)</td>
                <td>120</td>
            </tr>
            <tr>
                <td class="menu_name">Ice Coconut Water Americano (อเมริกาโน่มะพร้าว)</td>
                <td>80</td>
            </tr>
        </table>

        <h4 align="center">Standard Drink</h4>
        <div id="desktop">
            <table class="list_menu" style="width: 100%; text-align: center;">
                <tr>
                    <th></th>
                    <th>HOT</th>
                    <th>COLD</th>
                    <th>FRAPPE</th>
                </tr>
                <tr>
                    <td class="menu_name">Americano (อเมริกาโน่)</td>
                    <td class="hot">45</td>
                    <td class="cold">50</td>
                    <td class="frappe">-</td>
                </tr>
                <tr>
                    <td class="menu_name">Cappucino (คาปูชิโน่)</td>
                    <td class="hot">50</td>
                    <td class="cold">60</td>
                    <td class="frappe">-</td>
                </tr>
                <tr>
                    <td class="menu_name">Espresso (เอซเปรสโซ่)</td>
                    <td class="hot">45</td>
                    <td class="cold">60</td>
                    <td class="frappe">70</td>
                </tr>
                <tr>
                    <td class="menu_name">Latte (ลาเต้)</td>
                    <td class="hot">50</td>
                    <td class="cold">60</td>
                    <td class="frappe">70</td>
                </tr>
                <tr>
                    <td class="menu_name">Mocha (มอคค่า)</td>
                    <td class="hot">55</td>
                    <td class="cold">60</td>
                    <td class="frappe">75</td>
                </tr>
                <tr>
                    <td class="menu_name">Piccolo Latte (พิคโคโล่ ลาเต้)</td>
                    <td class="hot">50</td>
                    <td class="cold">-</td>
                    <td class="frappe">-</td>
                </tr>
                <tr>
                    <td class="menu_name">Caramel Macciato (คาราเมล มัคคิอาโต้)</td>
                    <td class="hot">60</td>
                    <td class="cold">70</td>
                    <td class="frappe">80</td>
                </tr>
            </table>
        </div>

        <div id="mobile">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'FRAPPE')"><b>FRAPPE</b></button>
                <button class="tablinks" onclick="openCity(event, 'COLD')"><b>COLD</b></button>
                <button class="tablinks" onclick="openCity(event, 'HOT')" id="defaultOpen"><b>HOT</b></button>
            </div>

            <!-- Tab content -->
            <div id="HOT" class="tabcontent">
                <table class="list_menu" style="width: 100%; text-align: center;">
                    <tr>
                        <td class="menu_name">Americano (อเมริกาโน่)</td>
                        <td class="hot">45</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Cappucino (คาปูชิโน่)</td>
                        <td class="hot">50</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Espresso (เอซเปรสโซ่)</td>
                        <td class="hot">45</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Latte (ลาเต้)</td>
                        <td class="hot">50</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Mocha (มอคค่า)</td>
                        <td class="hot">55</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Piccolo Latte (พิคโคโล่ ลาเต้)</td>
                        <td class="hot">50</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Caramel Macciato (คาราเมล มัคคิอาโต้)</td>
                        <td class="hot">60</td>
                    </tr>
                </table>
            </div>

            <div id="COLD" class="tabcontent">
                <table class="list_menu" style="width: 100%; text-align: center;">
                    <tr>
                        <td class="menu_name">Americano (อเมริกาโน่)</td>
                        <td class="cold">50</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Cappucino (คาปูชิโน่)</td>
                        <td class="cold">60</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Espresso (เอซเปรสโซ่)</td>
                        <td class="cold">60</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Latte (ลาเต้)</td>
                        <td class="cold">60</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Mocha (มอคค่า)</td>
                        <td class="cold">60</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Caramel Macciato (คาราเมล มัคคิอาโต้)</td>
                        <td class="cold">70</td>
                    </tr>
                </table>
            </div>

            <div id="FRAPPE" class="tabcontent">
                <table class="list_menu" style="width: 100%; text-align: center;">
                    <tr>
                        <td class="menu_name">Espresso (เอซเปรสโซ่)</td>
                        <td class="frappe">70</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Latte (ลาเต้)</td>
                        <td class="frappe">70</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Mocha (มอคค่า)</td>
                        <td class="frappe">75</td>
                    </tr>
                    <tr>
                        <td class="menu_name">Caramel Macciato (คาราเมล มัคคิอาโต้)</td>
                        <td class="frappe">80</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="dri_area" style="text-align: center;">
            <div class="pic_dri">
                <img src="Multi/dri_001-1.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><b>Cappucino</b></div>
                </div>
            </div>
            <div class="pic_dri">
                <img src="Multi/dri_002-1.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><b>Espresso Coconut Pudding</b></div>
                </div>
            </div>
            <div class="pic_dri">
                <img src="Multi/dri_003-1.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><b>Sparkling Orange Coffee</b></div>
                </div>
            </div>
            <div class="pic_dri">
                <img src="Multi/dri_004-1.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text"><b>Ice Coconut Water Americano</b></div>
                </div>
            </div>
        </div>

        <h4 align="center">Bakery</h4>
        <div class="bak_area">
            <div class="pic_bak">
                <img src="Multi/bak_002.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text-b"><b>Mini Butter Croissant</b><br>
                    25 บาท</div>
                </div>
            </div>
            <div class="pic_bak">
                <img src="Multi/bak_005.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text-b"><b>Sausage Roll</b><br>
                    70 บาท</div>
                </div>
            </div>
            <div class="pic_bak">
                <img src="Multi/bak_006.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text-b"><b>Tuna Puff</b><br>
                    50 บาท</div>
                </div>
            </div>
        </div>
    </div>

    <div class="icon_area">
        <a href="https://www.facebook.com/Onetwotwocoffeebar/" target ="_blank"><img class="icon" src="Multi/fb_icon.png"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/onetwotwocoffeebar/" target ="_blank"><img class="icon" src="Multi/ig_icon.png"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.google.co.th/maps/place/One+Two+Two+Coffee+Bar/@13.6860306,100.6464808,17z/data=!3m1!4b1!4m5!3m4!1s0x311d6076657be2c5:0xa663c4f424ec2740!8m2!3d13.6860254!4d100.6486695?hl=th&authuser=0" target ="_blank"><img class="icon" src="Multi/map_icon.png"></a>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script type="text/javascript">
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        // ------------------------------

        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

</body>
</html>