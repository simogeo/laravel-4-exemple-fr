@extends('frontend/layouts/default')

@section('content')

	<section class="span12">

	  <div class="row-fluid">
	  	@foreach ($articles as $article)
	    <div class="module">
	      <header>
	        <h3 class="nav-header">{{ $article->titre }}</h3>
	      </header>
	      <p class="module_content">{{ $article->intro }}</p>
	      <br>
		  <p>{{ HTML::link('nav/article/'.$article->id, 'Lire la suite...', array('class' => 'btn btn-medium')) }}</p>
	    </div>
	    @endforeach
	  </div>

	</section>

@stop