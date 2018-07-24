
@extends('layouts.index')

@section('middlecontent')


<div class="column has-text-centered">
	<article class="message">
	<h1 class="title is-2">
            Media Coverage
        </h1>
	</article>

	<div class="box">
	<h3><strong>AIR Interview</strong></h3>
	<audio controls style="width: 50%;">
	    <!-- <source src="{{ route('audio', 'test.m4a') }}" type="audio/mpeg"> -->
	    <source src="AIR_Interview.m4a" type="audio/mpeg">
	</audio>
	</div>

	<a href="http://www.loksatta.com/vishesha-news/private-rojgar-hami-yojana-1242519/" target="_blank">
	<figure>
	  <img src="loksatta.png">
	</figure>
	</a>
</div>

@endsection
