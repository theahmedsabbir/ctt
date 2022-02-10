@extends('frontend.template.master')

@section('page-css')
	
@endsection

@section('content')

<div class="main-content">

    <!-- Section: inner-header -->
    @include('frontend.includes.inner-header', ['title' => 'Contact Us', 'breadcrumb' => 'Contact'])

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-50 pb-70">
        <div class="row pt-10">
          <div class="col-md-5">
            <h4 class="mt-0 mb-30 line-bottom-theme-colored-2">Find Our Location</h4>
            <!-- Google Map HTML Codes --><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.404917414497!2d90.41427741482066!3d24.016782284458742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755da4c3c5a8899%3A0x8779cddb7e03f358!2sCentre%20for%20Technology%20Transfer%20(CTT)!5e0!3m2!1sen!2sbd!4v1643567542605!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom-theme-colored-2">Interested in discussing?</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="http://html.kodesolution.live/j/learnpro/v4.0/demo/includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group mb-30">
                <textarea id="form_message" name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-default bg-hover-theme-colored mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-colored2 bg-hover-theme-colored">Reset</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
              <h4>Call Us</h4>
              <h6 class="text-gray">Phone: 01743336006, 01322833605, 01685941931, 01818188205</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
              <h4>Address</h4>
              <h6 class="text-gray">BIDC Road, DUET, Gazipur</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
              <h4>Email</h4>
              <h6 class="text-gray">info@cttedu.org</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-facebook font-36 mb-10 text-theme-colored2"></i>
              <h4>Facebook</h4>
              <h6 class="text-gray"><a href="http://www.facebook.com/cttpolytechnic">www.facebook.com/cttpolytechnic</a></h6>
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