@extends('layout.main')

@section('content')

<div id="ABdev_header_spacer"></div>

<section id="title_breadcrumbs_bar">
	<div class="container">
		<div class="row">
			<div class="span12 center_aligned">
				<div class="breadcrumbs">
					<a href="/">Home</a> / <span class="current">Contact</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="vozx_section_dd section_with_header">
	<header>
		<div class="vozx_container">
			<h3>NEEM CONTACT OP MET MIJ</h3>
			<p>Wilt u contact opnemen met mij? Dat kan via het formulier hier onder!</p>
		</div>
	</header>
	@if(Session::has('success'))
		<div class="vozx_container">
			<div class="vozx_column_dd_span12">
				<div class="vozx_alert_success">
					<i class="icon-check"></i> <strong>Gelukt!</strong> {{ Session::get('success') }} <br />
					<a class="vozx_alert_box_close" title="Close">✕</a>
				</div>
			</div>
		</div>
	@endif
	@if($errors->any())
		<div class="vozx_container">
			<div class="vozx_column_dd_span12">
				<div class="vozx_alert_error">
					@foreach($errors->all() as $error)
					<i class="icon-times"></i> <strong>Oops!</strong> {{ $error }} <br />
					@endforeach
					<a class="vozx_alert_box_close" title="Close">✕</a>
				</div>
			</div>
		</div>
	@endif
	<div class="vozx_section_content">
		<div class="vozx_container">
			<div class="vozx_column_dd_span8 padding_right20 vozx-animo" data-animation="fadeInLeft" data-duration="1000" data-delay="200">
				<div class="vozxcf" id="vozxcf-wrapper" dir="ltr">
					{!! Form::open(array('action' => 'ContactController@send', 'method' => 'post', 'class' => 'contact-form')) !!}
						<div class="row">
							<div class="span4">
								<span class="your-name">
									<input type="text" name="naam" size="40" class="vozxcf-text" placeholder="UW NAAM (VERPLICHT)" value="{{ Input::old('naam') }}">
								</span>
							</div>
							<div class="span4">
								<span class="your-email">
									<input type="email" name="email" size="40" class="vozxcf-text vozxcf-email vozxcf-validates-as-email" placeholder="UW EMAIL (VERPLICHT)" value="{{ Input::old('email') }}">
								</span>
							</div>
							<div class="span4">
								<span class="your-subject">
									<input type="text" name="onderwerp" size="40" class="vozxcf-text" placeholder="ONDERWERP (VERPLICHT)" value="{{ Input::old('onderwerp') }}">
								</span>
							</div>
						</div>
						<p>
							<span class="your-message">
								<textarea name="bericht" cols="40" rows="10" class="vozxcf-textarea" placeholder="BERICHT (VERPLICHT)" value="{{ Input::old('bericht') }}"></textarea>
							</span>
						</p>
						<div class="left_aligned">
							<input type="submit" value="VERSTUUR BERICHT" class="vozxcf-submit float_none">
						</div>
					{!! Form::close() !!}
					<div class="vozxcf-response-output vozxcf-display-none"></div>
				</div>
			</div>
			<div class="vozx_column_dd_span4 vozx-animo" data-animation="fadeInRight" data-duration="1000" data-delay="200">
				<h6>
					<span>INFORMATIE</span>
				</h6>
				<div class="vozx_service_box vozx_service_box_round_text_aside_middle">
					<div class="vozx_service_box_header">
						<div class="vozx_icon_boxed">
							<i class="icon-map-marker"></i>
						</div>
					</div>
					<p>Rotterdam, Delft, Den Haag</p>
				</div>
				<div class="vozx_service_box vozx_service_box_round_text_aside_middle">
					<div class="vozx_service_box_header">
						<div class="vozx_icon_boxed">
							<i class="icon-envelope"></i>
						</div>
					</div>
					<p>
						<a href="mailto:blackhole@ab-themes.com">mace@macemuilman.nl</a>
					</p>
				</div>
				<div class="vozx_follow_us">
					<a class="vozx_socialicon vozx_socialicon_facebook vozx_tooltip" data-gravity="s" href="#" target="_blank" title="Volg mij op Facebook!">
						<i class="ci_icon-facebook"></i>
					</a>
					<a class="vozx_socialicon vozx_socialicon_twitter vozx_tooltip" data-gravity="s" href="#" target="_blank" title="Volg mij op Twitter!">
						<i class="ci_icon-twitter"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

@stop