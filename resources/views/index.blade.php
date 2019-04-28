@extends('layout.main')

@section('content')

<div id="ABdev_header_spacer"></div>

<section class="vozx_section_dd aligncenter white_text vozx-parallax" data-background_image="images/background_1.jpg" data-parallax="0.6">
		<div class="vozx_section_content">
			<div class="vozx_container">
				<div class="vozx_column_dd_span12 vozx-animo" data-animation="fadeIn" data-duration="1000" data-delay="200">
					<h2><span><strong></strong></span></h2>
					<h3 class="light"><span></span></h3>
				</div>
			</div>
		</div>
</section>

<section class="vozx_section_dd section_with_header">
	<header>
		<div class="vozx_container">
			<h3>MACE MUILMAN</h3>
		</div>
	</header>
	<div class="vozx_section_content">
		<div class="vozx_container">
			<div class="vozx_column_dd_span6 ">
				<div class="vozx-animo " data-animation="fadeIn" data-duration="1000" data-delay="0">
					<img src="images/profiel_foto.jpg" alt="">
				</div>
			</div>
			<div class="vozx_column_dd_span6 info vozx-animo" data-animation="fadeInRight" data-duration="1000" data-delay="200">
				<h3>
					<span>MACE MUILMAN</span>
				</h3>
				<p>Mijn naam is Mace, ik ben {{ $age }} jaar, ik woon in Delft en ben werkzaam bij <a target="_blank" href="http://moodles.nl">MOODLES</a> / <a target="_blank" href="http://verloning.nl">VERLONING.NL</a> als software engineer.</p>
				<span class="clear spacer_responsive_hide_mobile spacer_responsive_hide_tablet spacer_25"></span>
				<div class="more_space">
					<p>
						<strong>Werkgever/functie:</strong> Software engineer bij <a target="_blank" href="http://moodles.nl">MOODLES</a> / <a target="_blank" href="http://verloning.nl">VERLONING.NL</a><br />
						<strong>Werk ervaring:</strong> {{ $experience }} jaar<br />
						<strong>Favoriete tools:</strong> Laravel, PHP, Docker, Node.js, Javascript, Vue.js, Vuex, MariaDB<br />
						<strong>Favoriete OS:</strong> Manjaro Linux<br />
						<strong>Extra's:</strong> Anglia level proficiency (extra engels diploma)<br />
					</p>
				</div>
				<span class="clear spacer_responsive_hide_mobile spacer_responsive_hide_tablet spacer_15"></span>
				<h6>
					<span>SOCIAL MEDIA</span>
				</h6>
				<span class="clear spacer_15"></span>
				<div class="vozx_follow_us">
					<a class="vozx_socialicon vozx_socialicon_facebook vozx_tooltip" data-gravity="s" href="https://www.facebook.com/mace.muilman" target="_blank" title="Volg mij op Facebook!">
						<i class="ci_icon-facebook"></i>
					</a>
					<a class="vozx_socialicon vozx_socialicon_twitter vozx_tooltip" data-gravity="s" href="https://twitter.com/Mace95" target="_blank" title="Volg mij op Twitter!">
						<i class="ci_icon-twitter"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>		
</section>

<section class="vozx_section_dd darken white_text vozx-parallax" data-background_image="images/code1.png" data-parallax="0.6">
	<div class="vozx_section_content">
		<div class="vozx_container">
			<div class="vozx_column_dd_span12 vozx-animo" data-animation="fadeIn" data-duration="1000" data-delay="200">
				<blockquote class="vozx_blockquote vozx_blockquote_wide ">
					<p class="quotation_mark">&lsquo;&lsquo;</p>
					<p>&rsquo;We don't make mistakes, just happy little accidents.&lsquo;<small>BOB ROSS</small></p>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<section class="vozx_section_dd darken smaller_headline no_padding_bottom vozx-parallax section_with_header" data-background_image="images/code2.png" data-parallax="0.6">
</section>

@include('partials/toolbelt')

<section class="vozx_section_dd no_padding_bottom section_with_header">
	<header>
		<div class="vozx_container">
			<h3>CURRICULUM VITAE</h3>
		</div>
	</header>
	<div class="vozx_section_content">
		<div class="vozx_container">
			<div class="vozx_column_dd_span12 ">
				<div class="vozx-tabs vozx-tabs-position-top  vozx-tabs-boxed  ui-tabs ui-widget ui-widget-content ui-corner-all" data-selected="1" data-break_point="568" data-effect="slide">
					<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
						<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tab-1" aria-labelledby="ui-id-67" aria-selected="true" aria-expanded="true">
							<a href="#tab-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-67">PERSONALIA</a>
						</li>
						<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-2" aria-labelledby="ui-id-68" aria-selected="false" aria-expanded="false">
							<a href="#tab-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-68">OPLEIDINGEN</a>
						</li>
						<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-3" aria-labelledby="ui-id-69" aria-selected="false" aria-expanded="false">
							<a href="#tab-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-69">ERVARING</a>
						</li>
						<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-4" aria-labelledby="ui-id-70" aria-selected="false" aria-expanded="false">
							<a href="#tab-4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-70">OVERIGE</a>
						</li>
					</ul>
					<div class="vozx-tabs-wrapper">
						<div id="tab-1" aria-labelledby="ui-id-67" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false">
							<div class="vozx-table ">
								<table>
									<tbody>
										<tr>
											<th colspan="2">PERSONALIA</th>
										</tr>
										<tr>
											<td><strong>Naam</strong></td>
											<td>Mace Muilman</td>
										</tr>
										<tr>
											<td><strong>E-mail</strong></td>
											<td>mace@macemuilman.nl</td>
										</tr>
										<tr>
											<td><strong>Geboortedatum</strong></td>
											<td>03-07-1995</td>
										</tr>
										<tr>
											<td><strong>Nationaliteit</strong></td>
											<td>Nederlandse</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div id="tab-2" aria-labelledby="ui-id-68" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
							<div class="vozx-table ">
								<table>
									<tbody>
										<tr>
											<th>VAN / TOT</th>
											<th>OPLEIDING</th>
											<th>SCHOOL</th>
											<th>DIPLOMA</th>
										</tr>
										<tr>
											<td>2011 / 2014</td>
											<td>MediaTechnologie (MediaDevelopment)</td>
											<td>Grafisch Lyceum Rotterdam</td>
											<td>Ja</td>
										</tr>
										<tr>
											<td>2007 / 2011</td>
											<td>VMBO-T</td>
											<td>Stanislas College Pijnacker</td>
											<td>Ja</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div id="tab-3" aria-labelledby="ui-id-69" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
							<div class="vozx-table ">
								<table>
									<tbody>
										<tr>
											<th>VAN / TOT</th>
											<th>FUNCTIE</th>
											<th>BEDRIJF</th>
										</tr>
										<tr>
											<td>2013 / Heden</td>
											<td>Developer</td>
											<td><a target="_blank" href="http://moodles.nl">Moodles</a></td>
										</tr>
										<tr>
											<td>2011 / 2014</td>
											<td>Vulploegmedewerker</td>
											<td>Jumbo Supermarkten</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div id="tab-4" aria-labelledby="ui-id-70" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
							<div class="vozx-table ">
								<table>
									<tbody>
										<tr>
											<th>CURSUSSEN</th>
										</tr>
										<tr>
											<td>Anglia (Extra Engels Examen) Level : Proficiency</td>
										</tr>
										<tr>
											<td>Certified Microsoft Technology Associate (MTA)</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="vozx-table ">
								<table>
									<tbody>
										<tr>
											<th>TAAL</th>
											<th>NIVEAU</th>
										</tr>
										<tr>
											<td>Nederlands</td>
											<td>Goed</td>
										</tr>
										<tr>
											<td>Engels</td>
											<td>Goed</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="vozx_section_dd section_with_header">
	<header>
		<div class="vozx_container">
			<h3>NEEM CONTACT OP</h3>
			<p>Vragen of opmerkingen? Neem contact op!</p>
		</div>
	</header>
	<div class="vozx_section_content">
		<div class="vozx_container">
			<div class="vozx_column_dd_span12 vozx-animo" data-animation="fadeInDown" data-duration="1000" data-delay="400">
				<div class="vozx_service_box vozx_service_box_unboxed_square">
					<div class="vozx_service_box_header">
						<a href="mailto:contact@macemuilman.nl" target="_self" class="vozx_icon_boxed white_icon">
							<i class="icon-envelope"></i>
						</a>
						<a href="#" target="_self">
							<h3>mace@macemuilman.nl</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

@stop