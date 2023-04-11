@extends('public.layout')
@section('title', 'Home')
@section('custom-css')

@endsection
@section('body')
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
  <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
      <div class="logo">
        <img src="{{asset('assets/img/logo/logo.png')}}" alt="">
      </div>
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page"
            href="#home"><i class="fa fa-home"></i> Home</a></li>

        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#"><img src="{{asset('assets/img/navIcons/about.png')}}" width="24px" alt=""> About</a></li>
        <li class="dropdown"><a class="nav-link fw-medium" href="#"><img src="{{asset('assets/img/navIcons/projects.png')}}" width="24px" alt="">  Projects<small><i
                class="bi bi-chevron-down ms-1"></i></small></a>
          <ul>
            <li><a href="#">Project Land Offers</a></li>
            <li><a href="#">Prospective Projects</a></li>
            <li><a href="#">New Proposed Projects</a></li>
            <li><a href="#">Project under Execution</a></li>
            <li style="border-bottom: none;"><a href="#">Completed Projects</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="nav-link fw-medium" href="#"><img src="{{asset('assets/img/navIcons/goods.png')}}" width="24px" alt="">  Goods<small><i
                class="bi bi-chevron-down ms-1"></i></small></a>
          <ul>
            <li><a href="#">Building Civil Goods & Materials</a></li>
            <li><a href="#">EMP Goods & Materials</a></li>
            <li><a href="#">Interior Design Goods & Materials</a></li>
            <li><a href="#">Exterior Design Goods & Materials</a></li>
            <li><a href="#">Campus Design Goods & Materials</a></li>
            <li><a href="#">Miscellaneous Goods & Materials</a></li>
            <li><a href="#">Asthetically Pleasing Goods & Materials</a></li>
            <li><a href="#">Environmentally Sustainable Goods & Materials</a></li>
            <li><a href="#">Physically Challenged Goods & Materials</a></li>
            <li style="border-bottom: none;"><a href="#">House keeping Goods &
                Materials</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="nav-link fw-medium" href="#"><img src="{{asset('assets/img/navIcons/projects.png')}}" width="24px" alt=""> Services <small><i
                class="bi bi-chevron-down ms-0"></i></small></a>
          <ul>
            <li><a href="#">Building Services</a></li>
            <li><a href="#">EMP Services</a></li>
            <li><a href="#">Interior Design Services</a></li>
            <li><a href="#">Exterior Design Services</a></li>
            <li><a href="#">Campus Design Services</a></li>
            <li><a href="#">Building Services</a></li>
            <li><a href="#">Miscellaneous Services</a></li>
            <li><a href="#">Asthetically Pleasing Services</a></li>
            <li><a href="#">Environmentally Sustainable Services</a></li>
            <li><a href="#">Physically Challenged Services</a></li>
            <li><a href="#">Financial Services</a></li>
            <li><a href="#">House Keeping Services</a></li>
            <li style="border-bottom: none;"><a href="#">Senior Citizen Aids &
                Medically Challenged Services</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="nav-link fw-medium" href="#"><img src="{{asset('assets/img/navIcons/sustainable.png')}}" width="24px" alt=""> RHBP <small><i
                class="bi bi-chevron-down ms-0"></i></small> </a>
          <ul>
            <li><a href="#">Sustainable Environmental Initiative</a></li>
            <li style="border-bottom: none;"><a href="#">Sustainable Social
                Initiative</a></li>
          </ul>
        </li>
        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#testimonial"><img src="{{asset('assets/img/navIcons/contact.png')}}" width="24px" alt=""> Contact</a>
        </li>
      </ul>
      <form class="ps-lg-5">
        <button class="btn btn-lg btn-primary rounded-pill order-0" type="submit">Get Started<i
            class="fa fa-angle-right ms-2"></i></button>
      </form>
    </div>
  </div>
</nav>

<section class="py-1" id="home">
  <div class="bg-holder"
    style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
  </div>

  <section class="py-0" id="home">
    <div class="bg-holder"
      style="background-image:{{url('(assets/img/illustrations/hero-bg.png)')}};background-position:bottom;background-size:cover;">
    </div>
  </section>
  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center py-8">
      <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end">
        <img class="img-fluid" src="assets/img/bg/heronew.png" width="480" alt="" />
      </div>
      <div class="col-md-7 col-lg-6 text-center text-md-start"><span
          class="badge bg-light rounded-pill text-dark align-items-center d-flex flex-row-reverse justify-content-end mx-auto mx-md-0 ps-0 w-75 w-sm-75 w-md-75 w-xl-75 mb-3">best
          construction and real estate platform<img class="img-fluid float-start me-3"
            src="assets/img/illustrations/arrow-right.png" alt="" /></span>
        <h1 class="mb-4 display-3 fw-bold lh-sm">Best app for your <br class="d-block d-lg-none d-xl-block" />modern
          lifestyle</h1>
        <p class="mt-3 mb-4 fs-1">Increase productivity with a simple to-do app. app for <br
            class="d-none d-lg-block" />managing your personal budgets.</p>
        <a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Know more <i
            class="fa fa-angle-right ms-1"></i></a>
        <a class="btn btn-link ps-md-4 shadow-none" href="#" role="button"><i class="fa fa-download me-1"></i> Download
          our
          app</a>
      </div>
    </div>
  </div>
  </section>

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5" style="background:#f6f6f6;">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4"
          src="assets/img/illustrations/call-to-action.png" width="550" alt="" /></div>
      <div class="col-md-6 text-center text-md-start offset-md-1">
        <h6 class="fw-bold fs-4 display-3 lh-sm">Know more about <br> Porebaas</h6>
        <p class="my-4 pe-xl-5"> The rise of mobile devices transforms the way we consume information entirely and the
          Lorem ipsum dolor Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi cumque illo iure a
          perferendis. Neque totam quos possimus necessitatibus vero.sit amet consectetur adipisicing elit. Nostrum ea
          laudantium corporis possimus sequi pariatur porro, sapiente repellendus non ut.
          world's most elevant channels such as Facebook.</p>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cupiditate asperiores sequi ut nesciunt? Ad vero consectetur laboriosam earum impedit!</p> -->
        <a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Know more <i
            class="fa fa-angle-right ms-2"></i></a>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

  <div class="container">
    <div class="row justify-content-center mb-6">
      <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
        <h6 class="fw-bold fs-4 display-3 lh-sm">Our Projects</h6>
        <p class="mb-0">The rise of mobile devices transforms the way we consume information entirely and the world's
          most elevant channels such as Facebook.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-6">
        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/app.png" width="90"
            alt="" />
          <h5 class="fw-bold">Project Land Offers</h5>
          <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
          </p>
        </div>
      </div>
      <div class="col-md-4 mb-6">
        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/time-award.png"
            width="90" alt="" />
          <h5 class="fw-bold">Prospective Projects</h5>
          <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
          </p>
        </div>
      </div>
      <div class="col-md-4 mb-6">
        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/cloud.png" width="90"
            alt="" />
          <h5 class="fw-bold">New Proposed Projects</h5>
          <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
          </p>
        </div>
      </div>
      <div class="col-md-4 mb-6">
        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/customization.png"
            width="90" alt="" />
          <h5 class="fw-bold">Projects under Execution</h5>
          <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
          </p>
        </div>
      </div>
      <div class="col-md-4 mb-6">
        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/ux.png" width="90"
            alt="" />
          <h5 class="fw-bold">Completed Projects</h5>
          <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

  <div class="container">
    <div class="row align-items-center mb-6">
      <div class="col-md-5 col-lg-4 offset-lg-1">
        <h1 class="fw-bold lh-base">Goods of us which you should explore</h1>
      </div>
      <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam et, alias exercitationem
          recusandae repudiandae maiores quam, modi praesentium possimus id error quas natus doloribus amet sunt iusto
          vitae, sint deserunt?</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3 offset-lg-1 mb-4">
        <div class="py-4">
          <img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" />
        </div>
        <h5 class="fw-bold text-dark">Building Civil Goods & Materials</h5>
        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
        </p>
      </div>
      <div class="col-md-6 col-lg-3 offset-lg-1 mb-4">
        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" /></div>
        <h5 class="fw-bold text-dark">EMP Goods & Materials</h5>
        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
        </p>
      </div>
      <div class="col-md-3 col-lg-3 offset-lg-1 mb-4">
        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" /></div>
        <h5 class="fw-bold text-dark">Interior Design Goods & Materials</h5>
        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
        </p>
      </div>
      <div class="col-md-3 col-lg-3 offset-lg-1 mb-4">
        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" /></div>
        <h5 class="fw-bold text-dark">Exterior Design Goods & Materials</h5>
        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
        </p>
      </div>
      <div class="col-md-3 col-lg-3 offset-lg-1 mb-4">
        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" /></div>
        <h5 class="fw-bold text-dark">Campus Design Goods & Materials</h5>
        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
        </p>
      </div>
      <div class="col-md-3 col-lg-3 offset-lg-1 mb-4">
        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" />
        </div>
        <h5 class="fw-bold text-dark">Asthetically Pleasing Goods & Materials</h5>
        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.
        </p>
      </div>

      <div class="col-md-4" style="margin-left: 86px;">
        <a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">See more <i
          class="fa fa-angle-right ms-2"></i></a>
       </div>



    </div>
  
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<section class="py-5" id="features">
  <div class="container-lg">
    <div class="row align-items-center">
      <div class="col-md-4 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid"
          src="assets/img/illustrations/feature-bg.png" width="450" alt="" /></div>
      <div class="col-md-8 col-lg-6 px-sm-5 px-md-0">
        <h6 class="fw-bold fs-4 display-3 lh-sm">Services that we offer</h6>
        <p class="my-4">Increase productivity with a simple to-do app. app for <br class="d-none d-xl-block" />managing
          your personal budgets.</p>
    
          <div class="row">
       
            <div class="col-md-6">
              <div class="d-flex align-items-center mb-5">
                <div class="px-4">
                  <div class=""><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" />
                  <h5 class="fw-bold text-dark">Building Services</h5>
                  <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br
                      class="d-none d-xl-block"> news your blood tests</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center mb-5">
              <div class="px-4">
                <div class=""><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" />
                <h5 class="fw-bold text-dark">EMP Services</h5>
                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br
                    class="d-none d-xl-block"> news your blood tests</p>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
       
          <div class="col-md-6">
            <div class="d-flex align-items-center mb-5">
              <div class="px-4">
                <div class=""><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" />
                <h5 class="fw-bold text-dark">Interior Design Services</h5>
                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br
                    class="d-none d-xl-block"> news your blood tests</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex align-items-center mb-5">
            <div class="px-4">
              <div class=""><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" />
              <h5 class="fw-bold text-dark">Exterior Design Services</h5>
              <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br
                  class="d-none d-xl-block"> news your blood tests</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-4 ms-3">
        <a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">See more <i
          class="fa fa-angle-right ms-2"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-6">

  <div class="container">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 order-md-1 text-center text-md-start"><img class="img-fluid mb-4"
            src="assets/img/illustrations/ultimate-feature.png" alt="" /></div>
        <div class="col-md-6 text-center text-md-start">
          <h6 class="fw-bold fs-4 display-3 lh-sm">Responsible Human Business Practices (RHBP)</h6>
          <p class="my-4 pe-xl-5"> The rise of mobile devices transforms the way we consume information entirely.</p>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-4">
                <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" />
                </div>
                <h5 class="fw-bold text-undefined">Sustainable Environmentally Initiative</h5>
                <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample blood
                  tests.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-4">
                <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/support.png" width="90" alt="" />
                </div>
                <h5 class="fw-bold text-undefined">Sustainable Social Initiative</h5>
                <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood
                  tests.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<section class="py-6">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-5 order-md-0 text-center text-md-start z-index-2 cta-image"><img
          class="img-fluid mb-4 mb-md-0" src="assets/img/phone.png" width="850" alt="" /></div>
      <div class="col-md-5 col-lg-7 text-center text-md-start">
        <h1 class="display-5 fw-bold lh-sm">Download our App now</h1>
        <p class="my-4"> The rise of mobile devices transforms the way we consume information entirely and the world's
          most elevant channels such as Facebook. lorem20</p>
        <div class="d-flex justify-content-center d-md-inline-block"><a class="pe-2 pe-sm-3 pe-md-4" href="!#"><img
              src="assets/img/illustrations/google-play.png" width="160" alt="" /></a><a href="!#"><img
              src="assets/img/illustrations/app-store.png" width="160" alt="" /></a></div>
      </div>
    </div>
  </div>
</section>



<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="padding-top:30px;">
  <div class="container" data-aos="fade-up">

    <div class="section-header" style="text-align: center;">
      <h1 class="display-5 fw-bold lh-sm">Contact us</h1>
      <p>Just leave your email with us and we’ll get back to you shortly!</p>
    </div>

    <div class="mb-3">
    </div><!-- End Google Maps -->

    <div class="row">

      <div class="col-md-8">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message <i class="fa fa-angle-right ms-2"></i></button>
          </div>
        </form>
      </div>
      <div class="col-md-4 mt-5">
        <iframe style="border:0; width: 100%; height: 280px;"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14320.478299638753!2d91.75028011750034!3d26.192788235084212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a598b93b51809%3A0xf86a35ba3aa94b2e!2sUzan%20Bazar%2C%20Guwahati%2C%20Assam!5e0!3m2!1sen!2sin!4v1672729393410!5m2!1sen!2sin"
          frameborder="0" allowfullscreen></iframe>
      </div>

    </div>
    <!--End Contact Form -->

  </div>
</section><!-- End Contact Section -->

@endsection

@section('custom-js')

@endsection