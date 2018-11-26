<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ONE TWO TWO - Home</title>
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
                <a href="index.php"><h3 class="moment">Home</h3></a>
                <a href="history.php"><h3>History</h3></a>
                <a href="menu.php"><h3>Menu</h3></a>
                <a href="promotion.php"><h3>Promotion</h3></a>
                <a href="contact.php"><h3>Contact</h3></a>
            </div>

            <span class="click left">&nbsp;&nbsp;&nbsp;</span>
            <span class="click right" onclick="openNav()"><b>&#9776;</b></span>
        </div>
        <div id="main_menu">
            <a href="index.php"><li><h3 class="moment">Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </div>
    </nav>

    <div class="cont">
        <div class="slider" id="main-slider"><!-- outermost container element -->
            <div class="slider-wrapper"><!-- innermost wrapper element -->
                <img src="Multi/pic_001.jpg" alt="First" class="slide" /><!-- slides -->
                <img src="Multi/pic_002.jpg" alt="Second" class="slide" />
                <img src="Multi/pic_003.jpg" alt="Third" class="slide" />
                <img src="Multi/pic_004.jpg" alt="Fourth" class="slide" />
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

        (function() {
            function Slideshow( element ) {
                this.el = document.querySelector( element );
                this.init();
            }
            
            Slideshow.prototype = {
                init: function() {
                    this.wrapper = this.el.querySelector( ".slider-wrapper" );
                    this.slides = this.el.querySelectorAll( ".slide" );
                    this.previous = this.el.querySelector( ".slider-previous" );
                    this.next = this.el.querySelector( ".slider-next" );
                    this.index = 0;
                    this.total = this.slides.length;
                    this.timer = null;
                    
                    this.action();
                    this.stopStart();   
                },
                _slideTo: function( slide ) {
                    var currentSlide = this.slides[slide];
                    currentSlide.style.opacity = 1;
                    
                    for( var i = 0; i < this.slides.length; i++ ) {
                        var slide = this.slides[i];
                        if( slide !== currentSlide ) {
                            slide.style.opacity = 0;
                        }
                    }
                },
                action: function() {
                    var self = this;
                    self.timer = setInterval(function() {
                        self.index++;
                        if( self.index == self.slides.length ) {
                            self.index = 0;
                        }
                        self._slideTo( self.index );
                        
                    }, 4000);
                },
                stopStart: function() {
                    var self = this;
                    self.el.addEventListener( "mouseover", function() {
                        clearInterval( self.timer );
                        self.timer = null;
                        
                    }, false);
                    self.el.addEventListener( "mouseout", function() {
                        self.action();
                        
                    }, false);
                }
            };
            
            document.addEventListener( "DOMContentLoaded", function() {
                var slider = new Slideshow( "#main-slider" );
            });
        })();

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