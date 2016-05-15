<header id="ABdev_main_header" class="clearfix default">
	<div>
		<div class="container">
			<div id="logo">
				<a href="/">
					<img src="images/logo_mace.png" style="width:90px;padding:0px;" alt="VozX">
			    </a>
			</div>
			<nav>
				<ul>
					<li class="menu-item-has-children @if(Request::is('/')) current-menu-item @endif">
						<a href="/"><span>Home</span></a>
					</li>
					<li class="menu-item-has-children @if(Request::is('over')) current-menu-item @endif">
						<a href="/over"><span>Over mij</span></a>
					</li>
					<li class="menu-item-has-children @if(Request::is('portfolio')) current-menu-item @endif">
						<a href="/portfolio"><span>Portfolio</span></a>
					</li>
					<li class="menu-item-has-children @if(Request::is('contact')) current-menu-item @endif">
						<a href="/contact"><span>Contact</span></a>
					</li>
				</ul>
			</nav>
			<div id="ABdev_menu_toggle"><i class="ci_icon-navicon"></i></div>
		</div>
	</div>
</header>