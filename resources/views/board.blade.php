@extends('layouts.index')

@section('middlecontent')

<div class="column has-text-centered">
	<article class="message"> <h1 class="title is-2">TRUSTEES AND BOARD MEMBERS</h1></article>
</div>

<div id="app">

<div class="columns">
	<div class="column is-half is-offset-one-quarter ">
		<member image="{{ asset('storage/members/Makarand.jpg') }}" 
			name="Mr. Makarand Gajanan Dixit"
			qualification="B.E Computer , M.A History"
			designation="Executive Director">
		</member>
	</div>
</div>

<div class="columns ">
	<div class="column is-half">
		<member image="{{ asset('storage/members/Tushar.jpg') }}" 
			name="Mr. Tushar Paranjape"
			qualification="B.E.E&TC , Film Writer Assistant Professor FTII"
			designation="Trustee and Treasurer">
		</member>
	</div>
	<div class="column is-half">
		<member image="{{ asset('storage/members/Aniruddha.jpg') }}" 
			name="Mr. Aniruddha Ganesh Chandwankar"
			qualification="B.Com"
			designation="Hon. Trustee">
		</member>
	</div>
</div>

<div class="columns">
	<div class="column is-half">
		<member image="{{ asset('storage/members/Sonia.jpg') }}" 
			name="Dr. Sonia Chaubal Tamhane"
			qualification="BPTh (India) , MSc. Exercise Science(USA)"
			designation="Hon. Trustee">
		</member>
	</div>
	<div class="column is-half">
		<member image="{{ asset('storage/members/Shailesh.jpg') }}" 
			name="Mr. Shaileshkumar Jambotkar (IRS)"
			qualification="B.E Mechanical"
			designation="Hon. Trustee">
		</member>
	</div>
</div>

<div class="columns">
	<div class="column is-half">
		<member image="{{ asset('storage/members/Sanket.jpg') }}" 
			name="Mr. Sanket Kharkar"
			qualification="B.E. Computer"
			designation="Member">
		</member>
	</div>
	<div class="column is-half">
		<member image="{{ asset('storage/members/Ashish.jpg') }}" 
			name="Mr. Ashish Dabhade"
			qualification="B.Com"
			designation="Member">
		</member>
	</div>
</div>



</div>

@endsection
