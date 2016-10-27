jQuery(document).ready(function ($) {


            var nestedSliders = [];

            $.each(["sliderh1_container", "sliderh2_container", "sliderh3_container", "sliderh4_container"], function (index, containerId) {
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
                        $ChanceToShow: 0,
                        $AutoCenter: 0,
                        $Steps: 1,
                        $Lanes: 1,
                        $SpacingX: 10,
                        $SpacingY: 0,
                        $Orientation: 1
                    }
                };

                nestedSliders.push(new $JssorSlider$(containerId, nestedSliderOptions));
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
                    $ChanceToShow: 2,

                    $ActionMode: 1,
                    $AutoCenter: 3,
                    $Lanes: 1,
                    $SpacingX: customX,
                    $SpacingY: 0,
                    $DisplayPieces: 9,
                    $ParkingPosition: 0,
                    $Orientation: 1,
                    $DisableDrag: false
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

   //          function ScaleSlider() {
			//     var windowWidth = $(window).width();

			//     if (windowWidth) {
			//         var windowHeight = $(window).height();
			//         var originalWidth = jssor_slider1.$OriginalWidth();
			//         var originalHeight = jssor_slider1.$OriginalHeight();

			//         var scaleWidth = windowWidth;
			//         if (originalWidth / windowWidth > originalHeight / windowHeight) {
			//             scaleWidth = Math.ceil(windowHeight / originalHeight * originalWidth);
			//         }

			//         jssor_slider1.$ScaleWidth(scaleWidth);
			//     }
			//     else
			//         window.setTimeout(ScaleSlider, 30);
			// }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end


	    // NAVIGATION BULLETS
	    $(["sliderh1_container", "sliderh2_container", "sliderh3_container", "sliderh4_container"]).each(function(index, el) {
	        var count = $('#'+el).find('img').length;
	        var cont = $('#'+el).find('img').parent('div');

	        $('#'+el).append('<div class="h_bullet_container"><ul></ul></div>');
	        for (var i = 0; i < count; i++) {
	            $('#'+el).find('.h_bullet_container').find('ul').append('<li><a href="#" data-id="'+i+'"></a></li>');
	        };
	        $('#'+el).find('.h_bullet_container').find('a').first().addClass('active');
	        $('#'+el).find('.h_bullet_container').find('a').click(function(e) {
	            e.preventDefault();
	            
	            $mcont = $(this).parents('.h_bullet_container').parent('div');
	            $slides = $mcont.find('img').parent('div');
	            $count = $slides.length;

	            $index = '';
	            $current = false;
	            $id = $(this).data('id');
	            $slides.each(function(index, el) {
	                if ($(this).css('left') == '0px') {
	                    $current = $(this);
	                    $index = $(this).index()-1;
	                };

	                // console.log($(this).index()-1)
	            });

	           if($id > $index){
	                $current.animate({'left' : '-'+bodyWidth+'px'}, 400);
	                $slides.eq($id).css('left', bodyWidth+'px');
	                $slides.eq($id).animate({'left' : '0px'}, 400);
	                if($slides.eq($id).next().length = 1){
	                    $slides.eq($id).next().css('left', bodyWidth+'px');
	                }else{
	                    $slides.eq(0).next().css('left', bodyWidth+'px');
	                }
	           }else{
	                $current.animate({'left' : bodyWidth+'px'}, 400);
	                $slides.eq($id).css('left', '-'+bodyWidth+'px');
	                $slides.eq($id).animate({'left' : '0px'}, 400);
	                if($slides.eq($id).prev().length = 1){
	                    $slides.eq($id).prev().css('left', '-'+bodyWidth+'px');
	                }else{
	                    $slides.eq($count-1).prev().css('left', '-'+bodyWidth+'px');
	                }
	           }
	           $('#'+el).find('.h_bullet_container').find('a').removeClass('active');
	           $(this).addClass('active');
	           

	        });
	    })
	});