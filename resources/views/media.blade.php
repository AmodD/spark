@extends('layouts.index')

@section('middlecontent')

<main id="main">

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About</h2>
          <p>Media Coverage</p>
        </div>
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/media/radio.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Interview of SPARK trustees on <strong> All India Radio (AIR) </strong></a></h5>
                <p class="font-italic text-center">broadcasted on 12th June 2018</p>
                <audio controls style="width: 100%;">
                  <!-- <source src="{{ route('audio', 'test.m4a') }}" type="audio/mpeg"> -->
                  <source src="assets/media/AIR_Interview.m4a" type="audio/mpeg">
                </audio>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
               <a href="http://www.loksatta.com/vishesha-news/private-rojgar-hami-yojana-1242519/" target="_blank">
                  <img src="assets/media/loksatta.png" class="img-fluid" alt="">
               </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="http://www.loksatta.com/vishesha-news/private-rojgar-hami-yojana-1242519/" target="_blank">रोजगार हमीचा ‘प्रायव्हेट’प्रयत्न</a></h5>
                <p class="font-italic text-center">Published on May 27th 2016</p>
                <p class="card-text">
				</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection
