
@extends('layouts.index')

@section('middlecontent')

  <div class="hero-body" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.49),rgba(0, 0, 0, 0.89)),url('index.jpg');">
    <div class="container has-text-centered">
	<div >
		  <img src="/logo.png">
	</div>
      </div>
    </div>

<div class="tile is-ancestor">
  <div class="tile is-parent">
    <article class="tile is-child notification is-light">
  <h1 class="title has-text-centered"><span class="icon"><i class="fa fa-tasks"></i></span> Action</h1>
	      <p>One of the objectives of SPARK is to create awareness and sensitivity about various issues in society, educate people about scientific and professional approaches of resolving critical issues in the society. We realize that the current approach of development has created a great divide between the cities and villages and we aim to bridge this divide by creating new opportunities.</p>
    </article>
    </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-light">
  <h1 class="title has-text-centered"><span class="icon"><i class="fa fa-refresh"></i></span> Reconciliation</h1>
	      <p>We believe in empowering people rather than aiding them. Our experience tells us that many of the issues we face persist because of the lack of dialogue between administration and the society. We want to establish that dialogue. We believe that our country can develop and come over the inequality issues if disadvantaged sections of society will also get an equal chance to raise their concerns and come forward.</p>
    </article>
    </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-light">
  <h1 class="title has-text-centered"><span class="icon"><i class="fa fa-book"></i></span> Knowledge</h1>
	      <p>SPARK focuses on multiple issues which need immediate attention. SPARK promotes collective efforts for community development and encourages participation of various sections of society to make the development process more inclusive. SPARK will undertake all necessary actions that are democratic, non-violent in nature and are inclined towards the philosophy expressed in Constitution of India.</p>
    </article>
  </div>
</div>


@endsection
