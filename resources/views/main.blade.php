@extends('layouts.index')

@section('middlecontent')

<div class="hero-body is-hidden-mobile " style=" background-image: linear-gradient(rgba(0, 0, 0, 0.49),rgba(0, 0, 0, 0.89)),url('index.jpg'); 
	background-size:100% 100%;
	background-attachment:fixed;">
	<div class="container has-text-centered">
		<div><img src="/logo.png"></div>
	</div>
</div>

<div class="container">
<div class="tile is-ancestor">
  <div class="tile is-parent is-hidden-desktop">
  </div>	
  <div class="tile is-parent has-text-centered is-hidden-desktop">
		  <img src="/logo.png">
  </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-light">
  <h1 class="title has-text-centered"><span class="icon"><i class="fa fa-tasks"></i></span> Action</h1>
   <p>Active participation to solve various social issues using democratic, non-violent and constitutional means</p> 
   </article>
    </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-light">
  <h1 class="title has-text-centered"><span class="icon"><i class="fa fa-refresh"></i></span> Reconciliation</h1>
    <p>Become a constructive mediator between the Govt and people. Help beneficial Govt schemes reach people and convey people’s problems to the corresponding Govt authorities.</p>
    </article>
    </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-light">
  <h1 class="title has-text-centered"><span class="icon"><i class="fa fa-book"></i></span> Knowledge</h1>
   <p>Study, analyze and research about social issues in various domains and support people who work towards the same. Using the knowledge thus acquired, guide deprived people to find sustainable solutions to their problems.</p> 
   </article>
  </div>
</div>
</div>

<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">

<a target="_blank" rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a>
<br />
<span class="is-size-7">This work is licensed under a <a target="_blank" rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.
</span>
    </div>
  </div>
</footer>


@endsection
