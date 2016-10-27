<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Al-Noor Lasani- Gallery</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<nav class="navbar center navbar-default" role="navigation" style="border-color: #ffe330">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Al Noor Lasani"></a>
			</div>
	
				<div class="collapse navbar-collapse navbar-ex1-collapse navbar-inner">
				<ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
					   <li class="dropdown">
						<a href="s-gloss.html" class="dropdown-toggle">S Gloss<b class="caret"></b></a>
                        <span class="toggle" data-toggle="dropdown"></span>
						<ul class="dropdown-menu">
							<li><a href="sgloss-color-palette.php" target="_self">Color Palette</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="tactile.html" class="dropdown-toggle">Tactile<b class="caret"></b></a>
                        <span class="toggle" data-toggle="dropdown"></span>
						<ul class="dropdown-menu">
							<li><a href="tactile-color-palette.php" target="_self">Color Palette</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="high-gloss.html" class="dropdown-toggle">High Gloss<b class="caret"></b></a>
                        <span class="toggle" data-toggle="dropdown"></span>
						<ul class="dropdown-menu">
							<li><a href="high-gloss-color-palette.php" target="_self">Color Palette</a></li>
						</ul>
					</li>
                     <li class="dropdown">
						<a href="lasani-laminates.html" class="dropdown-toggle">Lasani Laminates<b class="caret"></b></a>
                        <span class="toggle" data-toggle="dropdown"></span>
						<ul class="dropdown-menu">
							<li><a href="lasani-laminates-color-palette.php" target="_self">Color Palette</a></li>
                            <li><a href="duralam.html" target="_self">DuraLam</a></li>
						</ul>
                    
					</li>
					<li><a href="mdf.html">MDF</a></li>
					<li class="active"><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div style="position: absolute; width: 100%; top:0; height:100%; overflow: hidden;">
        <div style="position: relative; left: 50%; width: 5000px; text-align: center; margin-left: -2500px;">

			<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
		            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		        </div>
		        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
		            <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/gallery/1_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/4_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/5_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/6_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/7_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/8_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/9_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/3_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/10_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/11_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/2_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/12_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/13_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/15_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/16_phone.jpg" /></div>
                      
                        <div><img u="image" src="images/cataloge/gallery/19_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/21_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/14_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/23_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/25_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/26_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/27_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/28_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/29_phone.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/30_phone.jpg" /></div>
	                    
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/gallery/1.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/4.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/5.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/6.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/7.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/8.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/9.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/3.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/10.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/11.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/2.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/12.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/13.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/15.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/16.jpg" /></div>
                        
                        <div><img u="image" src="images/cataloge/gallery/19.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/21.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/14.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/23.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/25.jpg" /></div>
                         <div><img u="image" src="images/cataloge/gallery/26.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/27.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/28.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/29.jpg" /></div>
                        <div><img u="image" src="images/cataloge/gallery/30.jpg" /></div>
					<?php } ?>
		            
		        </div>
		        <!-- Arrow Navigator -->
		        
		    </div>
		
		</div>
	</div>
<div class="navArrows">
    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
</div>
    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>

    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
	<script>
        jQuery(document).ready(function ($) {
            
            // if(document.body.clientWidth <= 720 ){
            //     $("#jssor_1, #jssor_1 div[data-u]").height(1800); // 430 minimum
            // }
            if(document.body.clientWidth <= 720 ){
                $("#jssor_1, #jssor_1 div[data-u]").height(1800).width(1500); // 430 minimum
                $("#jssor_1").height(1970).css({
                    top: '55px'});; // 430 minimum
            }

            if(document.body.clientWidth == 1440 ){
                $("#jssor_1, #jssor_1 div[data-u]").height(1700);//.width(2000); // 430 minimum
            }
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,

              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $AutoCenter: 1,
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 5,
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var windowWidth = $(window).width();

                if (windowWidth) {
                    var windowHeight = $(window).height();
                    var originalWidth = jssor_1_slider.$OriginalWidth();
                    var originalHeight = jssor_1_slider.$OriginalHeight();

                    if (originalWidth / windowWidth > originalHeight / windowHeight) {
                        jssor_1_slider.$ScaleHeight(windowHeight);
                    }
                    else {
                        jssor_1_slider.$ScaleWidth(windowWidth);
                    }
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end

            $('.jssora22l').click(function(event) {
                jssor_1_slider.$Prev();
            });
            $('.jssora22r').click(function(event) {
                jssor_1_slider.$Next();
            });
			// ON CLICK SCROLL
            $('#jssor_1').find('img').each(function(index, el) {
                $(this).click(function(event) {
                    jssor_1_slider.$Next();
                });
            });

            if(document.body.clientWidth <= 720 ){
                // $("#jssor_1, #jssor_1 div[data-u]").height(1800); // 430 minimum
                $('.jssorb05 > div').css({
                    top: 'auto',
                    bottom: '-80px'
                });
            }
        });


    </script>
</body>
</html>