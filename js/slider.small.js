var nestedSliders_small = [];

            $.each(["slider_small_1_container", "slider_small_2_container", "slider_small_3_container", "slider_small_4_container"], function (index, containerId) {
                var nestedSliderOptions_small = {
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

                nestedSliders_small.push(new $JssorSlider$(containerId, nestedSliderOptions_small));
            });

            var options_small = {
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

            var jssor_slider1_small = new $JssorSlider$("slider_small_1_container", options_small);

            function OnMainSliderPark_small(currentIndex, fromIndex) {
                $.each(nestedSliders_small, function (index, nestedSlider) {
                    nestedSlider.$Pause();
                });

                setTimeout(function () {
                    nestedSliders_small[currentIndex];
                });     
            }

            jssor_slider1_small.$On($JssorSlider$.$EVT_PARK, OnMainSliderPark_small);
            OnMainSliderPark_small(0, 0);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider_small() {
                bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1_small.$SetScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider_small, 30);
            }

            ScaleSlider_small();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider_small);
            }


        // NAVIGATION BULLETS
        $(["slider_small_1_container", "slider_small_2_container", "slider_small_3_container", "slider_small_4_container"]).each(function(index, el) {
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