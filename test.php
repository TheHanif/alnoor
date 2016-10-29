<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Al-Noor Lasani- High Gloss- Color Palette</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
	
	<nav class="navbar center navbar-default" role="navigation" style="border-color: #ffac4c">
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
						<a href="high-gloss.html" class="dropdown-toggle" style="color: #ffac4c; background-color: transparent; text-shadow: 0 1px 1px #000;">High Gloss<b class="caret"></b></a>
						<span class="toggle" data-toggle="dropdown"></span>
						<ul class="dropdown-menu">
							<li class="active"><a href="high-gloss-color-palette.php" target="_self">Color Palette</a></li>
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
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>


	<div id="slider1_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 553px; overflow: hidden;">
	        <!-- Loading Screen -->
	    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
	        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;"></div>
	        <div style="position: absolute; display: block; background: url('http://jimyengr.20m.us/eliving/img/loading.gif') no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;"></div>
	    </div>

	    <!-- Slides Container -->
	    <div u="slides" class="slides" style="cursor:auto; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	        
	        <div>
	            <div id="sliderh5_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3052/slide1-phone.jpg" /><div class="caption">3052</div></div>
	                    
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3052/slide1.jpg" /><div class="caption">3052</div></div>
	                    
					<?php } ?>
	                    
	    
	                </div>
	                
	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->
	                
	            </div>
	            <div u="thumb"><img src="images/cataloge/high-gloss/3052/thumb.jpg" /></div>
	        </div><!-- / slide -->

	        <div>
	            <div id="sliderh6_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3054/slide1-phone.jpg" /><div class="caption">3054</div></div>
	                    
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3054/slide1.jpg" /><div class="caption">3054</div></div>
	                    
					<?php } ?>
	                    
	    
	                </div>
	                
	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->
	                
	            </div>
	            <div u="thumb"><img src="images/cataloge/high-gloss/3054/thumb.jpg" /></div>
	        </div><!-- / slide -->

	        <div>
	            <div id="sliderh7_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3064/slide1-phone.jpg" /><div class="caption">3064</div></div>
	                    <div><img u="image" src="images/cataloge/high-gloss/3064/slide2-phone.jpg" /><div class="caption">3064</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3064/slide1.jpg" /><div class="caption">3064</div></div>
	                    <div><img u="image" src="images/cataloge/high-gloss/3064/slide2.jpg" /><div class="caption">3064</div></div>
					<?php } ?>
	                    
	    
	                </div>
	                
	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->
	                
	            </div>
	            <div u="thumb"><img src="images/cataloge/high-gloss/3064/thumb.jpg" /></div>
	        </div><!-- / slide -->

	        <div>
	            <div id="sliderh8_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3066/slide1-phone.jpg" /><div class="caption">3066</div></div>
	                    
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/high-gloss/3066/slide1.jpg" /><div class="caption">3066</div></div>
	                    
					<?php } ?>
	                    
	    
	                </div>
	                
	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->
	                
	            </div>
	            <div u="thumb"><img src="images/cataloge/high-gloss/3066/thumb.jpg" /></div>
	        </div><!-- / slide -->

	       

	    </div><!-- / slides -->

	    <!-- ThumbnailNavigator Skin Begin -->
	    <div u="thumbnavigator"  id="thumbNav" class="jssort12 thumbNav" style="background:#4d4c4e; cursor: default; position: absolute; width: 1200px; height: 110px; left:0px; bottom: 0px;">

	        <div u="slides" style="cursor:default;">
	            <div id="main_thumbs" u="prototype" id="sliderThumbs" style="POSITION: absolute; WIDTH: 148px; HEIGHT: 99px; TOP: 0; LEFT: 0;">
	                <thumbnailtemplate></thumbnailtemplate>
	            </div>   
	        </div>
	    </div>


	<!-- Thumbnail Item Skin End -->
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script> -->
    <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {


        	var sliders = [
        		
        		"sliderh5_container",
        		"sliderh6_container",
        		"sliderh7_container",
        		"sliderh8_container",
        		
        	]

        	// var customX = 31;
        	var customX = 15;
        	// var cols = 5;
        	var cols = 8;

    		var bodyWidth = document.body.clientWidth;
        	var docHeight = document.body.offsetHeight;

        	

        	var largerSlider = (docHeight*0.805);
        	var largerContainer = (docHeight*1.05708248);

        	var slidersHeight;
        	var containerHeight;

        	// alert(bodyWidth);
        	// $("#thumbNav").width(1);

        	if (bodyWidth == 360 && document.body.clientHeight == 640) { // S7
        		// customX = 35;
        		// customX = 120;
        		customX = 25;
        		cols = 5;

        		$("#main_thumbs").width(250).height(167);

        		console.log('<=400');

				slidersHeight = 1650;
				containerHeight = 1850;
        	}else if (bodyWidth <= 414) { // For phones

        		// customX = 35;
        		// customX = 120;
        		customX = 25;
        		cols = 5;

        		$("#main_thumbs").width(250).height(167);

        		console.log('<=400');

				slidersHeight = 1350;
				containerHeight = 1550;
        	}else if (bodyWidth <= 480) { // For phones

        		customX = 35;

        		$("#main_thumbs").width(250).height(167);

        		console.log('<=480');

				slidersHeight = 480;
				containerHeight = 640;
        	}else if (bodyWidth <= 720) { // For phones

        		customX = 25;
        		cols = 5;

        		$("#main_thumbs").width(250).height(167);

        		console.log('<=720');

				slidersHeight = 1800;
				containerHeight = 2000;
        	}else if(bodyWidth <= 1024){ // For iPads
        		console.log('<=1024');
        		slidersHeight = 550;
        		containerHeight = 680;
        	}else if(bodyWidth == 1920){ // For 1920
        		console.log(1920);
        		console.log(largerSlider);
        		slidersHeight = 400;
        		containerHeight = 525;
        	}else if(bodyWidth == 1440){ // For 1920
        		console.log(1440);
        		slidersHeight = 1940;
				containerHeight = 2080;
			}else{ // > 1024
        		console.log(4);
				// slidersHeight = docHeight-230;
    //     		containerHeight = docHeight-100;
        		slidersHeight = docHeight*0.65;
        		containerHeight = docHeight*0.85;
			}

			// if (bodyWidth <= 400) {
			// 	$('#sliderThumbs').css({
			// 		width: 100,
			// 		height: 100
			// 	});
			// };

        	$(".slider, .slides").height(slidersHeight); // 430 minimum
        	$("#slider1_container").height(containerHeight); // 540 minimum


            var nestedSliders = [];

            $.each(sliders, function (index, containerId) {
                var nestedSliderOptions = {
                    $PauseOnHover: 1,
                    $SlideDuration: 500, 
                    $MinDragOffsetToSlide: 20,
                    $SlideSpacing: 3, 
                    $DisplayPieces: 1,
                    $ParkingPosition: 0,
                    $UISearchMode: 0,
                    $FillMode: 2,
                    $AutoCenter: 3,
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$,
                        $SpacingX: 5,
                        $Scale: false
                    }
                };
 // nestedSliders.push(new $JssorSlider$(containerId, nestedSliderOptions));
                
                // ON CLICK SCROLL START
                var $nest = new $JssorSlider$(containerId, nestedSliderOptions);

	            $('#'+containerId).find('img').each(function(index, el) {
	                $(this).click(function(event) {
	                    $nest.$Next();
	                });
	            });

                nestedSliders.push($nest);
                // END
				});

            var options = {
                $AutoPlay: false,
                $AutoPlaySteps: 0,
                $AutoPlayInterval: 2000,
                $PauseOnHover: 3,
                $ArrowKeyNavigation: true,
                $SlideDuration: 300,
                $MinDragOffsetToSlide: 80,
                $SlideSpacing: 3,
                $DisplayPieces: 1,
                $ParkingPosition: 0,
                $FillMode: 2,
                $UISearchMode: 0,
                $PlayOrientation: 2,
                $DragOrientation: 0,

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    // $ChanceToShow: 2,

                    // $ActionMode: 1,
                    // $AutoCenter: 3,
                    // $Lanes: 1,
                    $SpacingX: customX,
                    // $SpacingY: 0,
                    // $DisplayPieces: 4,
                    // $ParkingPosition: 3,
                    // $Orientation: 1,
                    // $DisableDrag: false,
                    $Cols: cols,
                    // $Align: 360
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            function OnMainSliderPark(currentIndex, fromIndex) {
                $.each(nestedSliders, function (index, nestedSlider) {
                    nestedSlider.$Pause();
                });

                setTimeout(function () {
                    nestedSliders[currentIndex];
                });		
            }

            jssor_slider1.$On($JssorSlider$.$EVT_PARK, OnMainSliderPark);
            OnMainSliderPark(0, 0);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end


	    // NAVIGATION BULLETS
	    // $(sliders).each(function(index, el) {
	    //     var count = $('#'+el).find('img').length;
	    //     var cont = $('#'+el).find('img').parent('div');

	    //     $('#'+el).append('<div class="h_bullet_container"><ul></ul></div>');
	    //     for (var i = 0; i < count; i++) {
	    //         $('#'+el).find('.h_bullet_container').find('ul').append('<li><a href="#" data-id="'+i+'"></a></li>');
	    //     };
	    //     $('#'+el).find('.h_bullet_container').find('a').first().addClass('active');
	    //     $('#'+el).find('.h_bullet_container').find('a').click(function(e) {
	    //         e.preventDefault();
	            
	    //         $mcont = $(this).parents('.h_bullet_container').parent('div');
	    //         $slides = $mcont.find('img').parent('div');
	    //         $count = $slides.length;

	    //         $index = '';
	    //         $current = false;
	    //         $id = $(this).data('id');
	    //         $slides.each(function(index, el) {
	    //             if ($(this).css('left') == '0px') {
	    //                 $current = $(this);
	    //                 $index = $(this).index()-1;
	    //             };

	    //             // console.log($(this).index()-1)
	    //         });

	    //        if($id > $index){
	    //             $current.animate({'left' : '-'+bodyWidth+'px'}, 400);
	    //             $slides.eq($id).css('left', bodyWidth+'px');
	    //             $slides.eq($id).animate({'left' : '0px'}, 400);
	    //             if($slides.eq($id).next().length = 1){
	    //                 $slides.eq($id).next().css('left', bodyWidth+'px');
	    //             }else{
	    //                 $slides.eq(0).next().css('left', bodyWidth+'px');
	    //             }
	    //        }else{
	    //             $current.animate({'left' : bodyWidth+'px'}, 400);
	    //             $slides.eq($id).css('left', '-'+bodyWidth+'px');
	    //             $slides.eq($id).animate({'left' : '0px'}, 400);
	    //             if($slides.eq($id).prev().length = 1){
	    //                 $slides.eq($id).prev().css('left', '-'+bodyWidth+'px');
	    //             }else{
	    //                 $slides.eq($count-1).prev().css('left', '-'+bodyWidth+'px');
	    //             }
	    //        }
	    //        $('#'+el).find('.h_bullet_container').find('a').removeClass('active');
	    //        $(this).addClass('active');
	           

	    //     });
	    // })
	});
	</script>
</body>
</html>