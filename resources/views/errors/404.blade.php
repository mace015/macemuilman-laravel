@extends('layout/main')

@section('content')
	
	<div id="ABdev_header_spacer"></div>

	<section id="headline_breadcrumbs_bar" style="background-image:url('images/background_1.jpg')">
		<div class="container">
			<div class="row">
				<div class="span12 center_aligned">
					<h2><span class="black">Oops! </span> Er is iets fout gegaan!</h2>
				</div>
			</div>
		</div>
	</section>

	<div>
		<section id="page404" class="container">
			<p class="big_404">404</p>
			<p class="big_404_text">Het lijkt er op dat de pagina die u probeerde te bezoeken niet gevonden kan worden.</p>
			<p class="big_404_text"><a href="{{ URL::previous() }}">Klik hier om terug te gaan</a></p>
		</section>

	</div>
@stop