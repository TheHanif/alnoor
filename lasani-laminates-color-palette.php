<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Al-Noor Lasani- Lasani Laminates- Color Palette</title>

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
						<a href="high-gloss.html" class="dropdown-toggle">High Gloss<b class="caret"></b></a>
						<span class="toggle" data-toggle="dropdown"></span>
						<ul class="dropdown-menu">
							<li><a href="high-gloss-color-palette.php" target="_self">Color Palette</a></li>
						</ul>
					</li>
                     <li class="dropdown">
						<a href="lasani-laminates.html" class="dropdown-toggle" style="color: #ffac4c; background-color: transparent; text-shadow: 0 1px 1px #000;">Lasani Laminates<b class="caret"></b></a>
						<span class="toggle" data-toggle="dropdown"></span>
						<ul class="dropdown-menu">
							<li class="active"><a href="lasani-laminates-color-palette.php" target="_self">Color Palette</a></li>
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
	            <div id="sliderh1_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2001/slide1-phone.jpg" /><div class="caption">2001</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2001/slide1.jpg" /><div class="caption">2001</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2001/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh2_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2002/slide1-phone.jpg" /><div class="caption">2002</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2002/slide1.jpg" /><div class="caption">2002</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2002/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh3_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2005/slide1-phone.jpg" /><div class="caption">2005</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2005/slide1.jpg" /><div class="caption">2005</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2005/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh4_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2006/slide1-phone.jpg" /><div class="caption">2006</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2006/slide1.jpg" /><div class="caption">2006</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2006/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh5_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2009/slide1-phone.jpg" /><div class="caption">2009</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2009/slide1.jpg" /><div class="caption">2009</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2009/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh6_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2010/slide1-phone.jpg" /><div class="caption">2010</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2010/slide1.jpg" /><div class="caption">2010</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2010/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh7_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2011/slide1-phone.jpg" /><div class="caption">2011</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2011/slide1.jpg" /><div class="caption">2011</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2011/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh8_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2012/slide1-phone.jpg" /><div class="caption">2012</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2012/slide1.jpg" /><div class="caption">2012</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2012/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh9_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2014/slide1-phone.jpg" /><div class="caption">2014</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2014/slide1.jpg" /><div class="caption">2014</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2014/thumb.jpg" /></div>
	        </div><!-- / slide -->
            
            <div>
	            <div id="sliderh10_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2015/slide1-phone.jpg" /><div class="caption">2015</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2015/slide1.jpg" /><div class="caption">2015</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2015/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh11_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2017/slide1-phone.jpg" /><div class="caption">2017</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2017/slide1.jpg" /><div class="caption">2017</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2017/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh12_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2018/slide1-phone.jpg" /><div class="caption">2018</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2018/slide1.jpg" /><div class="caption">2018</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2018/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh13_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2019/slide1-phone.jpg" /><div class="caption">2019</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2019/slide1.jpg" /><div class="caption">2019</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2019/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh14_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2021/slide1-phone.jpg" /><div class="caption">2021</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2021/slide1.jpg" /><div class="caption">2021</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2021/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh15_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2022/slide1-phone.jpg" /><div class="caption">2022</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2022/slide1.jpg" /><div class="caption">2022</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2022/thumb.jpg" /></div>
	        </div><!-- / slide -->
           <div>
	            <div id="sliderh16_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2023/slide1-phone.jpg" /><div class="caption">2023</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2023/slide1.jpg" /><div class="caption">2023</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2023/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh17_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2024/slide1-phone.jpg" /><div class="caption">2024</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2024/slide1.jpg" /><div class="caption">2024</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2024/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh18_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2025/slide1-phone.jpg" /><div class="caption">2025</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2025/slide1.jpg" /><div class="caption">2025</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2025/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh19_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2026/slide1-phone.jpg" /><div class="caption">2026</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2026/slide1.jpg" /><div class="caption">2026</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2026/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh20_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2050/slide1-phone.jpg" /><div class="caption">2050</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2050/slide1.jpg" /><div class="caption">2050</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2050/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh21_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2051/slide1-phone.jpg" /><div class="caption">2051</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2051/slide1.jpg" /><div class="caption">2051</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2051/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh22_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2052/slide1-phone.jpg" /><div class="caption">2052</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2052/slide1.jpg" /><div class="caption">2052</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2052/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh23_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2053/slide1-phone.jpg" /><div class="caption">2053</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2053/slide1.jpg" /><div class="caption">2053</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2053/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh24_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2055/slide1-phone.jpg" /><div class="caption">2055</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2055/slide1.jpg" /><div class="caption">2055</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2055/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh25_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2056/slide1-phone.jpg" /><div class="caption">2056</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2056/slide1.jpg" /><div class="caption">2056</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2056/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh26_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2058/slide1-phone.jpg" /><div class="caption">2058</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2058/slide1.jpg" /><div class="caption">2058</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2058/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh27_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2059/slide1-phone.jpg" /><div class="caption">2059</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2059/slide1.jpg" /><div class="caption">2059</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2059/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh28_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2060/slide1-phone.jpg" /><div class="caption">2060</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2060/slide1.jpg" /><div class="caption">2060</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2060/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh29_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2061/slide1-phone.jpg" /><div class="caption">2061</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2061/slide1.jpg" /><div class="caption">2061</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2061/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh30_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2065/slide1-phone.jpg" /><div class="caption">2065</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2065/slide1.jpg" /><div class="caption">2065</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2065/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh31_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2074/slide1-phone.jpg" /><div class="caption">2074</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2074/slide1.jpg" /><div class="caption">2074</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2074/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh32_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2079/slide1-phone.jpg" /><div class="caption">2079</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2079/slide1.jpg" /><div class="caption">2079</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2079/thumb.jpg" /></div>
	        </div><!-- / slide -->
         <div>
	            <div id="sliderh33_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2086/slide1-phone.jpg" /><div class="caption">2086</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2086/slide1.jpg" /><div class="caption">2086</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2086/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh34_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2088/slide1-phone.jpg" /><div class="caption">2088</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2088/slide1.jpg" /><div class="caption">2088</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2088/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh35_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2090/slide1-phone.jpg" /><div class="caption">2090</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2090/slide1.jpg" /><div class="caption">2090</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2090/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh36_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/2099/slide1-phone.jpg" /><div class="caption">2099</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/2099/slide1.jpg" /><div class="caption">2099</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/2099/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh37_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3001/slide1-phone.jpg" /><div class="caption">3001</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3001/slide1.jpg" /><div class="caption">3001</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3001/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh38_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3002/slide1-phone.jpg" /><div class="caption">3002</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3002/slide1.jpg" /><div class="caption">3002</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3002/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh39_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3005/slide1-phone.jpg" /><div class="caption">3005</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3005/slide1.jpg" /><div class="caption">3005</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3005/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh40_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3007/slide1-phone.jpg" /><div class="caption">3007</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3007/slide1.jpg" /><div class="caption">3007</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3007/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh41_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3014/slide1-phone.jpg" /><div class="caption">3014</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3014/slide1.jpg" /><div class="caption">3014</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3014/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh42_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3015/slide1-phone.jpg" /><div class="caption">3015</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3015/slide1.jpg" /><div class="caption">3015</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3015/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh43_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3027/slide1-phone.jpg" /><div class="caption">3027</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3027/slide1.jpg" /><div class="caption">3027</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3027/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh44_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3028/slide1-phone.jpg" /><div class="caption">3028</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3028/slide1.jpg" /><div class="caption">3028</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3028/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh45_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3029/slide1-phone.jpg" /><div class="caption">3029</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3029/slide1.jpg" /><div class="caption">3029</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3029/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh46_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3034/slide1-phone.jpg" /><div class="caption">3034</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3034/slide1.jpg" /><div class="caption">3034</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3034/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh47_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3042/slide1-phone.jpg" /><div class="caption">3042</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3042/slide1.jpg" /><div class="caption">3042</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3042/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh48_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3044/slide1-phone.jpg" /><div class="caption">3044</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3044/slide1.jpg" /><div class="caption">3044</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3044/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh49_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3045/slide1-phone.jpg" /><div class="caption">3045</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3045/slide1.jpg" /><div class="caption">3045</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3045/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh50_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3052/slide1-phone.jpg" /><div class="caption">3052</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3052/slide1.jpg" /><div class="caption">3052</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3052/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh51_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3054/slide1-phone.jpg" /><div class="caption">3054</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3054/slide1.jpg" /><div class="caption">3054</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3054/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh52_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3057/slide1-phone.jpg" /><div class="caption">3057</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3057/slide1.jpg" /><div class="caption">3057</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3057/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh53_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3060/slide1-phone.jpg" /><div class="caption">3060</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3060/slide1.jpg" /><div class="caption">3060</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3060/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh54_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3062/slide1-phone.jpg" /><div class="caption">3062</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3062/slide1.jpg" /><div class="caption">3062</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3062/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh55_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3064/slide1-phone.jpg" /><div class="caption">3064</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3064/slide1.jpg" /><div class="caption">3064</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3064/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh56_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3066/slide1-phone.jpg" /><div class="caption">3066</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3066/slide1.jpg" /><div class="caption">3066</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3066/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh57_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3070/slide1-phone.jpg" /><div class="caption">3070</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3070/slide1.jpg" /><div class="caption">3070</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3070/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh58_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3071/slide1-phone.jpg" /><div class="caption">3071</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3071/slide1.jpg" /><div class="caption">3071</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3071/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh59_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3072/slide1-phone.jpg" /><div class="caption">3072</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3072/slide1.jpg" /><div class="caption">3072</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3072/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh60_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3073/slide1-phone.jpg" /><div class="caption">3073</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3073/slide1.jpg" /><div class="caption">3073</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3073/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh61_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3074/slide1-phone.jpg" /><div class="caption">3074</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3074/slide1.jpg" /><div class="caption">3074</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3074/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh62_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3075/slide1-phone.jpg" /><div class="caption">3075</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3075/slide1.jpg" /><div class="caption">3075</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3075/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh63_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3076/slide1-phone.jpg" /><div class="caption">3076</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3076/slide1.jpg" /><div class="caption">3076</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3076/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh64_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3077/slide1-phone.jpg" /><div class="caption">3077</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3077/slide1.jpg" /><div class="caption">3077</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3077/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh65_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3078/slide1-phone.jpg" /><div class="caption">3078</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3078/slide1.jpg" /><div class="caption">3078</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3078/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh66_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3080/slide1-phone.jpg" /><div class="caption">3080</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3080/slide1.jpg" /><div class="caption">3080</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3080/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh67_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3081/slide1-phone.jpg" /><div class="caption">3081</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3081/slide1.jpg" /><div class="caption">3081</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3081/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh68_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3082/slide1-phone.jpg" /><div class="caption">3082</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3082/slide1.jpg" /><div class="caption">3082</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3082/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh69_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3083/slide1-phone.jpg" /><div class="caption">3083</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3083/slide1.jpg" /><div class="caption">3083</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3083/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh70_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3084/slide1-phone.jpg" /><div class="caption">3084</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3084/slide1.jpg" /><div class="caption">3084</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3084/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh71_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3086/slide1-phone.jpg" /><div class="caption">3086</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3086/slide1.jpg" /><div class="caption">3086</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3086/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh72_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3087/slide1-phone.jpg" /><div class="caption">3087</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3087/slide1.jpg" /><div class="caption">3087</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3087/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh73_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3088/slide1-phone.jpg" /><div class="caption">3088</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3088/slide1.jpg" /><div class="caption">3088</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3088/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh74_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3090/slide1-phone.jpg" /><div class="caption">3090</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3090/slide1.jpg" /><div class="caption">3090</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3090/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh75_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3091/slide1-phone.jpg" /><div class="caption">3091</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3091/slide1.jpg" /><div class="caption">3091</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3091/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh76_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3092/slide1-phone.jpg" /><div class="caption">3092</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3092/slide1.jpg" /><div class="caption">3092</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3092/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh77_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3093/slide1-phone.jpg" /><div class="caption">3093</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3093/slide1.jpg" /><div class="caption">3093</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3093/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh78_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3094/slide1-phone.jpg" /><div class="caption">3094</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3094/slide1.jpg" /><div class="caption">3094</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3094/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh79_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3095/slide1-phone.jpg" /><div class="caption">3095</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3095/slide1.jpg" /><div class="caption">3095</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3095/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh80_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/3096/slide1-phone.jpg" /><div class="caption">3096</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/3096/slide1.jpg" /><div class="caption">3096</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/3096/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh81_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4000/slide1-phone.jpg" /><div class="caption">4000</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4000/slide1.jpg" /><div class="caption">4000</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4000/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh82_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4001/slide1-phone.jpg" /><div class="caption">4001</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4001/slide1.jpg" /><div class="caption">4001</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4001/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh83_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4003/slide1-phone.jpg" /><div class="caption">4003</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4003/slide1.jpg" /><div class="caption">4003</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4003/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh84_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4004/slide1-phone.jpg" /><div class="caption">4004</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4004/slide1.jpg" /><div class="caption">4004</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4004/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh85_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4005/slide1-phone.jpg" /><div class="caption">4005</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4005/slide1.jpg" /><div class="caption">4005</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4005/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh86_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4006/slide1-phone.jpg" /><div class="caption">4006</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4006/slide1.jpg" /><div class="caption">4006</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4006/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh87_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4008/slide1-phone.jpg" /><div class="caption">4008</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4008/slide1.jpg" /><div class="caption">4008</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4008/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh88_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4009/slide1-phone.jpg" /><div class="caption">4009</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4009/slide1.jpg" /><div class="caption">4009</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4009/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh89_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4011/slide1-phone.jpg" /><div class="caption">4011</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4011/slide1.jpg" /><div class="caption">4011</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4011/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh90_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4012/slide1-phone.jpg" /><div class="caption">4012</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4012/slide1.jpg" /><div class="caption">4012</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4012/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh91_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4013/slide1-phone.jpg" /><div class="caption">4013</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4013/slide1.jpg" /><div class="caption">4013</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4013/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh92_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4014/slide1-phone.jpg" /><div class="caption">4014</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4014/slide1.jpg" /><div class="caption">4014</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4014/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh93_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4015/slide1-phone.jpg" /><div class="caption">4015</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4015/slide1.jpg" /><div class="caption">4015</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4015/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh94_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4017/slide1-phone.jpg" /><div class="caption">4017</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4017/slide1.jpg" /><div class="caption">4017</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4017/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh95_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4018/slide1-phone.jpg" /><div class="caption">4018</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4018/slide1.jpg" /><div class="caption">4018</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4018/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh96_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4019/slide1-phone.jpg" /><div class="caption">4019</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4019/slide1.jpg" /><div class="caption">4019</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4019/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh97_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4020/slide1-phone.jpg" /><div class="caption">4020</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4020/slide1.jpg" /><div class="caption">4020</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4020/thumb.jpg" /></div>
	        </div><!-- / slide -->
            <div>
	            <div id="sliderh98_container" class="slider" style="position: relative; top: 0px; left: 0px; width: 1200px; height: 480px;">

	                <!-- Slides Container -->
	                <div u="slides" class="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 480px; overflow: hidden;">
	                 <?php if ($detect->isMobile() || $detect->isTablet()) {  ?>
					    <div><img u="image" src="images/cataloge/laminates/4021/slide1-phone.jpg" /><div class="caption">4021</div></div>
					<?php }else { ?>
					    <div><img u="image" src="images/cataloge/laminates/4021/slide1.jpg" /><div class="caption">4021</div></div>
   
					<?php } ?>
	                </div>

	                <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb05" style="right:16px;bottom:26px" data-autocenter="1">
			            <!-- bullet navigator item prototype -->
			            <div data-u="prototype"></div>
			        </div>
	                <!-- Bullet Navigator Skin End -->

	            </div>
                <div u="thumb"><img src="images/cataloge/laminates/4021/thumb.jpg" /></div>
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
        		"sliderh1_container",
        		"sliderh2_container",
        		"sliderh3_container",
        		"sliderh4_container",
        		"sliderh5_container",
        		"sliderh6_container",
        		"sliderh7_container",
        		"sliderh8_container",
        		"sliderh9_container",
        		"sliderh10_container",
        		"sliderh11_container",
        		"sliderh12_container",
        		"sliderh13_container",
        		"sliderh14_container",
        		"sliderh15_container",
        		"sliderh16_container",
        		"sliderh17_container",
        		"sliderh18_container",
        		"sliderh19_container",
        		"sliderh20_container",
				"sliderh21_container",
        		"sliderh22_container",
        		"sliderh23_container",
        		"sliderh24_container",
        		"sliderh25_container",
        		"sliderh26_container",
        		"sliderh27_container",
        		"sliderh28_container",
        		"sliderh29_container",
        		"sliderh30_container",
        		"sliderh31_container",
        		"sliderh32_container",
        		"sliderh33_container",
        		"sliderh34_container",
        		"sliderh35_container",
        		"sliderh36_container",
				"sliderh37_container",
        		"sliderh38_container",
        		"sliderh39_container",
        		"sliderh40_container",
        		"sliderh41_container",
        		"sliderh42_container",
        		"sliderh43_container",
				"sliderh44_container",
        		"sliderh45_container",
        		"sliderh46_container",
        		"sliderh47_container",
        		"sliderh48_container",
        		"sliderh49_container",
        		"sliderh50_container",
				"sliderh51_container",
        		"sliderh52_container",
        		"sliderh53_container",
        		"sliderh54_container",
        		"sliderh55_container",
        		"sliderh56_container",
        		"sliderh57_container",
        		"sliderh58_container",
        		"sliderh59_container",
        		"sliderh60_container",
				"sliderh61_container",
        		"sliderh62_container",
        		"sliderh63_container",
        		"sliderh64_container",
        		"sliderh65_container",
        		"sliderh66_container",
        		"sliderh67_container",
        		"sliderh68_container",
        		"sliderh69_container",
        		"sliderh70_container",
				"sliderh71_container",
        		"sliderh72_container",
        		"sliderh73_container",
        		"sliderh74_container",
        		"sliderh75_container",
        		"sliderh76_container",
        		"sliderh77_container",
        		"sliderh78_container",
        		"sliderh79_container",
        		"sliderh80_container",
				"sliderh81_container",
        		"sliderh82_container",
        		"sliderh83_container",
        		"sliderh84_container",
        		"sliderh85_container",
        		"sliderh86_container",
        		"sliderh87_container",
        		"sliderh88_container",
        		"sliderh89_container",
        		"sliderh90_container",
				"sliderh91_container",
        		"sliderh92_container",
        		"sliderh93_container",
        		"sliderh94_container",
        		"sliderh95_container",
        		"sliderh96_container",
        		"sliderh97_container",
        		"sliderh98_container"
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