@extends('layouts.index')

@section('middlecontent')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    <div><img src="/logo.png"></div>
    <h2>Society for People’s Action Reconciliation and Knowledge</h2>
    <a href="/perspective" class="btn-get-started">Know more</a>
  </div>
</section><!-- End Hero -->

<!-- ======= About Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">
    <marquee>
      <div class="tags has-text-centered">
      <span class="tag is-primary is-medium">Igniting Humanity</span>
      <span class="tag is-danger is-medium">Nurturing Sensitivity</span>
      <span class="tag is-primary is-medium">Creating Awareness</span>
      <span class="tag is-danger is-medium">Uniting People</span>
      <span class="tag is-primary is-medium">Reforming Society</span>
      <span class="tag is-danger is-medium">Transforming India</span>
      </div>
    </marquee>

      <div class="section-title">
        <p>About Us</p>
      </div>
      
      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Society for People’s Action Reconciliation and Knowledge</h3>
          <p class="font-italic">
            SPARK is a non-profit, non-governmental organization working towards establishing a strong platform for 
            mobilizing people, driving their strength and channelizing their efforts for achieving sustainable growth and 
            transformation of society. We at SPARK are committed to principles of democracy, sustainability, social justice and equality.
          </p>
        </div>
      </div>

      <div class="row center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-12 col-md-6 align-content-center">
           <video width="540" controls>
            <source src="assets/media/Spark-Intro.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
      </div>

      <div class="col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>Action</h4>
                <p>Active participation to solve various social issues using democratic, non-violent and constitutional means</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-donate-heart"></i>
                <h4>Reconciliation</h4>
                <p>Become a constructive mediator between the Govt and people. Help beneficial Govt schemes 
                  reach people and convey people’s problems to the corresponding Govt authorities.</p>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-book"></i>
                <h4>Knowledge</h4>
                <p>Study, analyze and research about social issues in various domains and support people who work towards the same. 
                  Using the knowledge thus acquired, guide deprived people to find sustainable solutions to their problems.</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>
  </div>
</section><!-- End Why Us Section -->

@endsection
