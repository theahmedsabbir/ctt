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
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend') }}/images/slider1.png" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('frontend')}}/images/slider1.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
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
                  style="z-index: 5; white-space: nowrap; font-weight:700;margin-top:35px;font-size:25px;text-transform: capitalize;font-weight: 500!important;">We Currently Have <span style="color:#FEFF41">3000+</span> Students Working In <span style="color:#FEFF41">Bangladesh & Other Countries</span>
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
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;margin-top:80px;">

                  	<form action="">
                        <div id="myOverlay" class="overlay">
                            <div class="overlay-content">
                              <form action="action_page.php">
                                <input type="text" placeholder="Search Here.." name="search" class="searchInput">
                                <button type="submit" class="searchbtn">Search</button>
                              </form>
                            </div>
                          </div>
                  	</form>
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
                gridheight:[700,550,500,450],
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

    {{-- about us --}}



    <!-- Section: marquee -->
    <section id="courses" class="bg-theme-white">
      <marquee class="container-fluid marquee">
      	<a class="" href="{{ url('/notice') }}">There is no such alternative.</a>
      	<a class="" href="{{ url('/notice') }}">There is no such alternative.</a>
      	<a class="" href="{{ url('/notice') }}">There is no such alternative.</a>
      	<a class="" href="{{ url('/notice') }}">There is no such alternative.</a>
      	<a class="" href="{{ url('/notice') }}">There is no such alternative.</a>
      </marquee>
    </section>

    <!-- Section: about us -->
    <section id="courses" class="aboutUs">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">ABOUT CTT</h2>
              <p class="text-uppercase mb-0">OUR HISTORY & PRESENT</p>
			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
			</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
        	<div class="col-md-8">
        		<div class="left">
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        			<br>
        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="right">
        			<img src="{{ asset('frontend/images/logo-round.png') }}" alt="" class="img-fluid">
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <section id="courses" class="why-ctt">
        <div class="container pb-40">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="why-should">Why Should You Choose CTT ?</h2>
              </div>
            </div>
          </div>
          <div class="row mtli-row-clearfix mt-ctt-l">
              <div class="col-md-12">
                  <div class="row">
                        <div class="col-md-4">
                            <div class="round">
                                <img src="{{ asset('/frontend/images/Vector.png') }}" class="ctt-img" />
                            </div>
                            <div class="export">Expert</div>
                            <span class="export">Instructors</span>
                            <p class="">
                                Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="round">
                                <img src="{{ asset('/frontend/images/Vector (1).png') }}" class="ctt-img1" />
                            </div>
                            <div class="export">Popular</div>
                            <span class="export" style="margin-left: 39px;">Courses</span>
                            <p class="">
                                Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="round" style="margin-left: 30px;">
                                <img src="{{ asset('/frontend/images/Vector (2).png') }}" class="ctt-img2" />
                            </div>
                                <div class="export-3">Modern</div>
                                <span class="export-33" style="margin-left: 61px;">Laboratory</span>
                                <p class="export-333">
                                    Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                                </p>
                            </div>
                        </div>
                  </div>
              </div>
              <div class="col-md-12" style="margin-left: 85px;">
                <div class="row">
                      <div class="col-md-4">
                          <div class="round">
                              <img src="{{ asset('/frontend/images/Vector (3).png') }}" class="ctt-img3" />
                          </div>
                          <div class="export">Hostel</div>
                          <span class="export" style="margin-left: 39px;">Facilites</span>
                          <p class="">
                              Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                          </p>
                      </div>
                      <div class="col-md-4">
                          <div class="round">
                              <img src="{{ asset('/frontend/images/Vector (4).png') }}" class="ctt-img4" />
                          </div>
                          <div class="export">Popular</div>
                          <span class="export" style="margin-left: 39px;">Courses</span>
                          <p class="">
                              Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                          </p>
                      </div>
                      <div class="col-md-4">
                          <div class="round">
                              <img src="{{ asset('/frontend/images/Vector (5).png') }}" class="ctt-img5" />
                          </div>
                              <div class="export" style="margin-left: 60px;">Job</div>
                              <span class="export">Opportunities</span>
                              <p class="">
                                  Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> Fermentum mattis est ac rutrum.
                              </p>
                          </div>
                      </div>
                </div>
            </div>
          </div>
        </div>
      </section>


      <section id="technology" class="">
        <div class="container">
          <div class="row mtli-row-clearfix">
              <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 computer">
                        <a href="#">
                            <img src="{{ asset('frontend/images/23090163.png') }}" alt="" class="image" style="border-radius: 10px;">
                            <div class="middle">
                                <div class="text">Computer Technology</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 electrical">
                        <a href="#">
                            <img src="{{ asset('frontend/images/Electrical lab2 1.png') }}" alt="" class="image" style="border-radius: 10px;">
                            <div class="middle">
                                <div class="text">Electrical Technology</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 civil">
                        <a href="#">
                        <img src="{{ asset('frontend/images/20191102_110304.png') }}" alt="" class="image" style="border-radius: 10px;">
                        <div class="middle">
                            <div class="text">Civil Technology</div>
                        </div>
                        </a>
                    </div>
                  </div>
                  <div class="row" style="margin-top: 25px;">
                    <div class="col-md-4 power">
                        <a href="#">
                            <img src="{{ asset('frontend/images/23090144.png') }}" alt="" class="image" style="border-radius: 10px;">
                            <div class="middle">
                                <div class="text">Power Technology</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 machanical">
                        <a href="#">
                        <img src="{{ asset('frontend/images/Machanical lab 1.png') }}" alt="" class="image" style="border-radius: 10px;">
                        <div class="middle">
                            <div class="text">Machanical Technology</div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 taxtile">
                        <a href="#">
                        <img src="{{ asset('frontend/images/Machanical lab 1.png') }}" alt="" class="image" style="border-radius: 10px;">
                        <div class="middle">
                            <div class="text">Taxtile Technology</div>
                        </div>
                        </a>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </section>


    <!-- Section: chairman -->
    <section id="courses" class="chairman">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">CHAIRMAN’S MESSAGE</h2>
              <p class="text-uppercase mb-0">MESSAGE FROM OUR HONOURABLE CHAIRMAN</p>
			  <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
			</div>
          </div>
        </div>


        <div class="row mtli-row-clearfix">
            <div class="owl-carousel-1col" data-dot="false">
                <div class="item">
		        	<div class="col-md-4">
		        		<div class="left">
		        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
		        			<br>
		        			<h3 class="name">Mohammad Abu Nasir</h3>
		        			<h3 class="title">PhD <br>Chairman</h3>
		        		</div>
		        	</div>
		        	<div class="col-md-8">
		        		<div class="right">
		        			<img src="{{ asset('frontend/images/chairman.png') }}" alt="" class="img-fluid">
		        		</div>
		        	</div>
                </div>
{{--                 <div class="item">
                    <div class="course-single-item style2 text-center mb-40">
                        <div class="course-thumb">
                            <img class="img-fullwidth" alt="" src="images/course/sm2.jpg" />
                            <div class="price-tag">$460</div>
                        </div>
                        <div class="course-details border-1px clearfix p-15 pt-15">
                            <div class="course-top-part">
                                <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20 mb-30">Nural Networking Course</h4></a>
                            </div>
                            <div class="author-thumb">
                                <img src="images/course/xs3.jpg" width="54" alt="" class="img-circle img-thumbnail" />
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
                </div> --}}
            </div>
        </div>
      </div>
    </section>

    <section id="courses" class="chairman">
        <div class="container">
          <div class="section-title">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase title">OUR ACHIEVEMENTS</h2>
                <p class="text-uppercase mb-0">OUR ACHIEVEMENTS & FAME</p>
                <img src="{{ asset('frontend/images/line.png') }}" alt="" class="line">
              </div>
            </div>
          </div>

          <div class="row mtli-row-clearfix">
              <div class="owl-carousel-1col" data-dot="false">
                  <div class="item">
                      <div class="col-md-6">
                          <div class="left">
                              <img src="{{ asset('frontend/images/achivement.png') }}" alt="" class="img-fluid">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="right">
                              <h2 style="font-size: 22px;">BEST INSTITUTION FOR ENGINEERING DIPLOMA</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                    <div class="col-md-6">
                        <div class="left">
                            <img src="{{ asset('frontend/images/slider1.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <h2 style="font-size: 22px;">BEST INSTITUTION FOR ENGINEERING DIPLOMA</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, dignissim eget platea dictumst cursus velit. Leo vulputate id augue sem non ut nisl cursus consectetur. Pharetra a aenean in varius sed tortor ipsum. Placerat scelerisque magna volutpat augue montes, in diam. Enim, eu et scelerisque sit volutpat risus in lectus massa. Volutpat scelerisque pellentesque sed tellus euismod lorem ut.</p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </section>

    {{-- number section --}}
    <section class="parallax layer-overlay overlay-theme-colored-9 number" data-bg-img="images/bg/bg1.jpg" data-parallax-ratio="0.4">
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
</div>
@endsection

@section('page-js')

@endsection
