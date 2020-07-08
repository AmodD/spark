@extends('layouts.index')

@section('middlecontent')

<div class="container">
<div class="column has-text-centered">
	<article class="message"> <h1 class="title is-2">Trustees And Board Members</h1></article>
</div>

<div id="app">

<div class="columns">
	<div class="column is-half is-offset-one-quarter">
		<member image="{{ asset('storage/member/Makarand.jpg') }}" 
			name="Mr. Makarand Gajanan Dixit"
			qualification="B.E Computer , M.A History"
			designation="Executive Director">
		</member>
	</div>
</div>

<div class="columns ">

	<div class="column is-half">
		<member image="{{ asset('storage/member/Sonia.jpg') }}" 
			name="Dr. Sonia Chaubal Tamhane"
			qualification="BPTh (India) , MSc. Exercise Science(USA)"
			designation="Hon. Trustee">
		</member>
	</div>
        
        <div class="column is-half">
		<member image="{{ asset('storage/member/Tushar.jpg') }}" 
			name="Mr. Tushar Paranjape"
			qualification="B.E.E&TC , Film Writer, Assistant Professor FTII"
			designation="Trustee and Treasurer">
		</member>
	</div>

</div>

<div class="columns">
	<div class="column is-half">
		<member image="{{ asset('storage/member/Sanket.jpg') }}" 
			name="Mr. Sanket Kharkar"
			qualification="B.E. Computer"
			designation="Member">
		</member>
	</div>
	<div class="column is-half">
		<member image="{{ asset('storage/member/Ashish.jpg') }}" 
			name="Mr. Ashish Dabhade"
			qualification="B.Com"
			designation="Member">
		</member>
	</div>
</div>



</div>
</div>
@endsection
