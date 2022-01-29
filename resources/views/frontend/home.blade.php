@extends('frontend.template.master')

@section('page-css')
	
@endsection

@section('content')


<div class="main-content">
    <!-- Section: home -->

    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px;padding-top:0px; margin-top:0px; margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend') }}/images/bg/bg1.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('frontend')}}/images/bg/bg1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['24','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['400','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['1243','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;margin-top:40px;font-size:25px;text-transform: capitalize;font-weight: 500!important;">We Currently Have <span style="color:#FEFF41">3000+</span> Students Working In <span style="color:#FEFF41">Bangladesh & Other Countries</span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['70','16',18',16']"
                  data-lineheight="['28','24','24','24']"
                  data-fontweight="['500','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;margin-top:32px;">Get The <span style="color:#41FF6B">Best Training</span> To <br><span style="line-height: 100px;">Start <span style="color: #FEFF41">Career</span></span>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-5" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;margin-top:40px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Our Service</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Get a Quote</a>
                </div>
              </li>

              <!-- SLIDE 2 -->
{{--               <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend') }}/images/bg/bg2.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('frontend')}}/images/bg/bg2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Welcome To<span class="text-theme-colored2"> Learpro</span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">We provides always our best educational services for our all students <br> and  always try to achieve our students trust and satisfaction
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Our Service</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Get a Quote</a>
                </div>
              </li> --}}

              <!-- SLIDE 3 -->
{{--               <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend') }}/images/bg/bg3.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('frontend')}}/images/bg/bg3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Leading<span class="text-theme-colored2"> University</span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">We provides always our best educational services for our all students <br> and  always try to achieve our students trust and satisfaction
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Our Service</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Get a Quote</a>
                </div>
              </li> --}}
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.2);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"{{ asset('frontend/js/revolution-slider/js/') }}",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:5000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"hermes",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:''
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[680,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->

      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-course-thumb mb-sm-30">
                                    <img class="border-radius-8px img-fullwidth" src="{{asset('frontend')}}/images/course/online-course1.jpg" alt="" />
                                    <div class="overlay-shade"></div>
                                    <div class="course-info">
                                        <a href="#"><h5 class="text-white font-16 font-weight-600 mb-5">Software Development</h5></a>
                                        <p>Over 78 Courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-course-thumb">
                                    <img class="border-radius-8px img-fullwidth" src="{{asset('frontend')}}/images/course/online-course2.jpg" alt="" />
                                    <div class="overlay-shade"></div>
                                    <div class="course-info">
                                        <a href="#"><h5 class="text-white font-16 font-weight-600 mb-5">Web Development</h5></a>
                                        <p>Over 78 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-6">
                                <div class="single-course-thumb mb-sm-30">
                                    <img class="border-radius-8px img-fullwidth" src="{{asset('frontend')}}/images/course/online-course3.jpg" alt="" />
                                    <div class="overlay-shade"></div>
                                    <div class="course-info">
                                        <a href="#"><h5 class="text-white font-16 font-weight-600 mb-5">Graphics Design</h5></a>
                                        <p>Over 78 Courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-course-thumb">
                                    <img class="border-radius-8px img-fullwidth" src="{{asset('frontend')}}/images/course/online-course4.jpg" alt="" />
                                    <div class="overlay-shade"></div>
                                    <div class="course-info">
                                        <a href="#"><h5 class="text-white font-16 font-weight-600 mb-5">Business</h5></a>
                                        <p>Over 78 Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-course-thumb mt-sm-30">
                            <img class="border-radius-8px img-fullwidth" src="{{asset('frontend')}}/images/course/online-course5.jpg" alt="" />
                            <div class="overlay-shade"></div>
                            <div class="course-info">
                                <a href="#"><h5 class="text-white font-16 font-weight-600 mb-5">Graphics Design</h5></a>
                                <p>Over 78 Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Why Choose Us -->
    <section class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('frontend')}}/images/bg/bg2.jpg" data-parallax-ratio="0.4">
        <div class="container pt-30 pb-0">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fullwidth" src="{{asset('frontend')}}/images/photos/1.png" alt="" />
                </div>
                <div class="col-md-7 pt-20">
                    <div class="row mtli-row-clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2 class="text-white">Why <span class="text-theme-colored2">Choose</span> Us?</h2>
                            <div class="double-line-bottom-theme-colored-2 mb-30"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-box left media p-0 mb-40">
                                <a class="media-left pull-left flip mr-20" href="#"><i class="pe-7s-note2 text-theme-colored2 font-weight-600"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading text-white heading mb-10">Popular Courses</h4>
                                    <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-box left media p-0 mb-40">
                                <a class="media-left pull-left flip mr-20" href="#"><i class="pe-7s-notebook text-theme-colored2 font-weight-600"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading text-white heading mb-10">Modern Book Library</h4>
                                    <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-box left media p-0 mb-40">
                                <a class="media-left pull-left flip mr-20" href="#"><i class="pe-7s-diamond text-theme-colored2 font-weight-600"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading text-white heading mb-10">Qualified Teachers</h4>
                                    <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-box left media p-0 mb-40">
                                <a class="media-left pull-left flip mr-20" href="#"><i class="pe-7s-bell text-theme-colored2 font-weight-600"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading text-white heading mb-10">Update Notification</h4>
                                    <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-box left media p-0 mb-40">
                                <a class="media-left pull-left flip mr-20" href="#"><i class="pe-7s-musiclist text-theme-colored2 font-weight-600"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading text-white heading mb-10">Entertainment Facilities</h4>
                                    <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="icon-box left media p-0 mb-40">
                                <a class="media-left pull-left flip mr-20" href="#"><i class="pe-7s-global text-theme-colored2 font-weight-600"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading text-white heading mb-10">24/7 Online Support</h4>
                                    <p>Lorem ipsum dolor sit ametcon sectet uradipis icing elitCum consec tetur sectet uradipis icing consec tetur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses">
        <div class="container pb-40">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase title">Popular <span class="text-theme-colored2">Courses</span></h2>
                        <p class="text-uppercase mb-0">Choose Your Desired Course</p>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>
                </div>
            </div>
            <div class="row mtli-row-clearfix">
                <div class="owl-carousel-4col" data-nav="true">
                    <div class="item">
                        <div class="course-single-item style2 text-center mb-40">
                            <div class="course-thumb">
                                <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/course/sm1.jpg" />
                                <div class="price-tag">$460</div>
                            </div>
                            <div class="course-details border-1px clearfix p-15 pt-15">
                                <div class="course-top-part">
                                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20 mb-30">Nural Networking Course</h4></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="{{asset('frontend')}}/images/course/xs3.jpg" width="54" alt="" class="img-circle img-thumbnail" />
                                </div>
                                <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                            </div>
                            <div class="course-meta bg-silver-deep">
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single-item style2 text-center mb-40">
                            <div class="course-thumb">
                                <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/course/sm2.jpg" />
                                <div class="price-tag">$460</div>
                            </div>
                            <div class="course-details border-1px clearfix p-15 pt-15">
                                <div class="course-top-part">
                                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20 mb-30">Nural Networking Course</h4></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="{{asset('frontend')}}/images/course/xs3.jpg" width="54" alt="" class="img-circle img-thumbnail" />
                                </div>
                                <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                            </div>
                            <div class="course-meta bg-silver-deep">
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single-item style2 text-center mb-40">
                            <div class="course-thumb">
                                <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/course/sm3.jpg" />
                                <div class="price-tag">$460</div>
                            </div>
                            <div class="course-details border-1px clearfix p-15 pt-15">
                                <div class="course-top-part">
                                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20 mb-30">Nural Networking Course</h4></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="{{asset('frontend')}}/images/course/xs3.jpg" width="54" alt="" class="img-circle img-thumbnail" />
                                </div>
                                <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                            </div>
                            <div class="course-meta bg-silver-deep">
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="course-single-item style2 text-center mb-40">
                            <div class="course-thumb">
                                <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/course/sm4.jpg" />
                                <div class="price-tag">$460</div>
                            </div>
                            <div class="course-details border-1px clearfix p-15 pt-15">
                                <div class="course-top-part">
                                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20 mb-30">Nural Networking Course</h4></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="{{asset('frontend')}}/images/course/xs3.jpg" width="54" alt="" class="img-circle img-thumbnail" />
                                </div>
                                <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                            </div>
                            <div class="course-meta bg-silver-deep">
                                <ul class="list-inline">
                                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Team -->
    <section id="team" class="bg-silver-deep">
        <div class="container pb-40">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase title">Qualified <span class="text-theme-colored2">Teachers</span></h2>
                        <p class="text-uppercase mb-0">We Have Highly Qualified Teachers</p>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>
                </div>
            </div>
            <div class="row mtli-row-clearfix">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                        <div class="team-thumb">
                            <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/team/1.jpg" />
                            <div class="team-overlay"></div>
                            <ul class="styled-icons team-social icon-sm">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details">
                            <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Jhon Anderson</h4>
                            <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Civil Engineer</h6>
                            <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                        <div class="team-thumb">
                            <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/team/2.jpg" />
                            <div class="team-overlay"></div>
                            <ul class="styled-icons team-social icon-sm">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details">
                            <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Jhon Anderson</h4>
                            <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Civil Engineer</h6>
                            <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                        <div class="team-thumb">
                            <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/team/3.jpg" />
                            <div class="team-overlay"></div>
                            <ul class="styled-icons team-social icon-sm">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details">
                            <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Jhon Anderson</h4>
                            <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Civil Engineer</h6>
                            <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                        <div class="team-thumb">
                            <img class="img-fullwidth" alt="" src="{{asset('frontend')}}/images/team/4.jpg" />
                            <div class="team-overlay"></div>
                            <ul class="styled-icons team-social icon-sm">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details">
                            <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Jhon Anderson</h4>
                            <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Civil Engineer</h6>
                            <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start Funfacts Section-->
    <section class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('frontend')}}/images/bg/bg1.jpg" data-parallax-ratio="0.4">
        <div class="container pt-70 pb-90">
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                        <div class="funfact text-center">
                            <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>
                            <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                            <h5 class="text-white text-uppercase mb-0">Graduate Students</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Pricing -->
    <section id="pricing">
        <div class="container pt-70">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase title">Course <span class="text-theme-colored2">Pricing</span></h2>
                        <div class="double-line-bottom-theme-colored-2 mt-20"></div>
                        <p class="text-uppercase">Choose Your Desired Pricing Plan</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                        <div class="pricing-table bg-silver-deep text-center maxwidth400 pt-10">
                            <h2 class="package-type text-uppercase line-bottom-centered mb-50">Premium</h2>
                            <h2 class="price text-theme-colored2 font-opensans font-weight-400 font-64 bg-white pt-10 pb-20 mb-0"><span class="font-36 currency">$</span>220 <span class="font-16 text-black">/ Month</span></h2>
                            <ul class="list price-list theme-colored text-left flip check-circle mt-0 mb-20">
                                <li>Garden Care &amp; Lawn Moving</li>
                                <li>Forest Planting</li>
                                <li>Free Rubbish Removal</li>
                                <li>24 Hours Service</li>
                            </ul>
                            <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup Now</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                        <div class="pricing-table bg-silver-deep text-center maxwidth400 pt-10">
                            <h2 class="package-type text-uppercase line-bottom-centered mb-50">Gold</h2>
                            <h2 class="price text-theme-colored2 font-opensans font-weight-400 font-64 bg-white pt-10 pb-20 mb-0"><span class="font-36 currency">$</span>280 <span class="font-16 text-black">/ Month</span></h2>
                            <ul class="list price-list theme-colored text-left flip check-circle mt-0 mb-20">
                                <li>Garden Care &amp; Lawn Moving</li>
                                <li>Forest Planting</li>
                                <li>Free Rubbish Removal</li>
                                <li>24 Hours Service</li>
                            </ul>
                            <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup Now</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
                        <div class="pricing-table bg-silver-deep text-center maxwidth400 pt-10">
                            <h2 class="package-type text-uppercase line-bottom-centered mb-50">Silver</h2>
                            <h2 class="price text-theme-colored2 font-opensans font-weight-400 font-64 bg-white pt-10 pb-20 mb-0"><span class="font-36 currency">$</span>340 <span class="font-16 text-black">/ Month</span></h2>
                            <ul class="list price-list theme-colored text-left flip check-circle mt-0 mb-20">
                                <li>Garden Care &amp; Lawn Moving</li>
                                <li>Forest Planting</li>
                                <li>Free Rubbish Removal</li>
                                <li>24 Hours Service</li>
                            </ul>
                            <a class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat" href="#">Signup Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Testimonials -->
    <section class="parallax Divider layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('frontend')}}/images/bg/bg7.jpg" data-parallax-ratio="0.4">
        <div class="container pt-70 pb-30">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-uppercase text-white title">What <span class="text-theme-colored2">People </span>Say</h2>
                        <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>
                        <p class="text-uppercase mb-0">Student and Parents Opinion</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="owl-carousel-2col boxed" data-dots="true">
                        <div class="item">
                            <div class="testimonial pt-10">
                                <div class="thumb pull-left mb-0 mr-0">
                                    <img class="img-thumbnail img-circle" alt="" src="{{asset('frontend')}}/images/testimonials/1.jpg" width="110" />
                                </div>
                                <div class="testimonial-content">
                                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial pt-10">
                                <div class="thumb pull-left mb-0 mr-0">
                                    <img class="img-thumbnail img-circle" alt="" src="{{asset('frontend')}}/images/testimonials/2.jpg" width="110" />
                                </div>
                                <div class="testimonial-content">
                                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial pt-10">
                                <div class="thumb pull-left mb-0 mr-0">
                                    <img class="img-thumbnail img-circle" alt="" src="{{asset('frontend')}}/images/testimonials/3.jpg" width="110" />
                                </div>
                                <div class="testimonial-content">
                                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial pt-10">
                                <div class="thumb pull-left mb-0 mr-0">
                                    <img class="img-thumbnail img-circle" alt="" src="{{asset('frontend')}}/images/testimonials/1.jpg" width="110" />
                                </div>
                                <div class="testimonial-content">
                                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: blog -->
    <section id="blog">
        <div class="container pb-40">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i>Latest <span class="text-theme-colored2">News</span></h2>
                        <div class="owl-carousel-2col owl-nav-top" data-nav="true">
                            <div class="item">
                                <article class="post clearfix mb-30">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{asset('frontend')}}/images/blog/1.jpg" alt="" class="img-responsive img-fullwidth" />
                                        </div>
                                        <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600">28</li>
                                                <li class="font-12 text-white text-uppercase">Feb</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="entry-content p-15">
                                        <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                            <div class="media-body pl-0">
                                                <div class="event-content pull-left flip">
                                                    <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                        <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                        <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti
                                            <a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="post clearfix mb-30">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{asset('frontend')}}/images/blog/2.jpg" alt="" class="img-responsive img-fullwidth" />
                                        </div>
                                        <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600">28</li>
                                                <li class="font-12 text-white text-uppercase">Feb</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="entry-content p-15">
                                        <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                            <div class="media-body pl-0">
                                                <div class="event-content pull-left flip">
                                                    <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                        <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                        <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti
                                            <a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="post clearfix mb-30">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{asset('frontend')}}/images/blog/3.jpg" alt="" class="img-responsive img-fullwidth" />
                                        </div>
                                        <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600">28</li>
                                                <li class="font-12 text-white text-uppercase">Feb</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="entry-content p-15">
                                        <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                            <div class="media-body pl-0">
                                                <div class="event-content pull-left flip">
                                                    <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                        <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                        <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti
                                            <a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="post clearfix mb-30">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{asset('frontend')}}/images/blog/4.jpg" alt="" class="img-responsive img-fullwidth" />
                                        </div>
                                        <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600">28</li>
                                                <li class="font-12 text-white text-uppercase">Feb</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="entry-content p-15">
                                        <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                            <div class="media-body pl-0">
                                                <div class="event-content pull-left flip">
                                                    <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                        <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                        <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti
                                            <a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i>Frequently Asked <span class="text-theme-colored2">Questions</span></h3>
                        <div
                            class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2"
                            id="accordion6"
                            role="tablist"
                            aria-multiselectable="true"
                        >
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headin1">
                                    <h6 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                                            Why LearnPro University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Why LearnPro University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Why LearnPro University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Why LearnPro University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading5">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            Why LearnPro University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored2">
        <div class="container pt-10 pb-10">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section: Clients -->
                    <div class="owl-carousel-6col clients-logo transparent text-center">
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w1.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w2.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w3.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w4.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w5.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w6.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w3.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w4.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w5.png" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('frontend')}}/images/clients/w6.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end main-content -->
</div>



@endsection

@section('page-js')
	
@endsection