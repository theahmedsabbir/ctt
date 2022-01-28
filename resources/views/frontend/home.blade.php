@extends('frontend.template.master')

@section('page-css')
	
@endsection

@section('content')


<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-theme-colored-6" data-stellar-background-ratio="0.5" data-bg-img="{{ asset('frontend')}}/images/bg/bg14.jpg">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container pt-200 pb-200">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="pt-90 pb-30">
                                <p class="text-white font-20 mt-15 mb-0">
                                    Already we have <span data-animation-duration="2000" data-value="1240" class="animate-number text-theme-colored2 font-20">0</span> members are registered with online courses.
                                </p>
                                <h1 class="text-white text-uppercase font-52 font-weight-800 mt-0 mb-0">Try <span class="text-theme-colored2">Online </span>Course Now!</h1>
                                <!-- Mailchimp Subscription Form Starts Here -->
                                <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-15 mb-15 pt-5">
                                    <div class="input-group">
                                        <input value="" name="EMAIL" placeholder="Find Course" class="form-control input-lg input-circled font-16" data-height="48px" id="mce-EMAIL-footer" style="height: 45px;" type="email" />
                                        <span class="input-group-btn">
                                            <button data-height="48px" class="btn btn-theme-colored2 btn-circled text-white btn-xs m-0 font-14" type="submit"><i class="fa fa-search font-20 pr-15 pl-15"></i></button>
                                        </span>
                                    </div>
                                </form>
                                <!-- Mailchimp Subscription Form Validation-->
                                <script type="text/javascript">
                                    $("#mailchimp-subscription-form-footer").ajaxChimp({
                                        callback: mailChimpCallBack,
                                        url: "//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;amp;amp;id=49d6d30e1e",
                                    });

                                    function mailChimpCallBack(resp) {
                                        // Hide any previous response text
                                        var $mailchimpform = $("#mailchimp-subscription-form-footer"),
                                            $response = "";
                                        $mailchimpform.children(".alert").remove();
                                        if (resp.result === "success") {
                                            $response =
                                                '&amp;lt;div class="alert alert-success"&amp;gt;&amp;lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&amp;gt;&amp;lt;span aria-hidden="true"&amp;gt;&amp;amp;times;&amp;lt;/span&amp;gt;&amp;lt;/button&amp;gt;' +
                                                resp.msg +
                                                "&amp;lt;/div&amp;gt;";
                                        } else if (resp.result === "error") {
                                            $response =
                                                '&amp;lt;div class="alert alert-danger"&amp;gt;&amp;lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&amp;gt;&amp;lt;span aria-hidden="true"&amp;gt;&amp;amp;times;&amp;lt;/span&amp;gt;&amp;lt;/button&amp;gt;' +
                                                resp.msg +
                                                "&amp;lt;/div&amp;gt;";
                                        }
                                        $mailchimpform.prepend($response);
                                    }
                                </script>
                                <!-- Mailchimp Subscription Form Ends Here -->
                                <a class="btn btn-transparent btn-default btn-circled btn-lg mt-15 mr-15 pr-40 pl-40" href="#">Start a Free Trail Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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