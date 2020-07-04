
<header class="header wrapper">
	<div class="header-left">
		<div class="logo">
			<img src="<?php echo esc_attr( get_template_directory_uri() . '/assets/src/images/Bitmap.png' ); ?>" alt="bitmap">
		</div>
		<h1>Productly</h1>
	</div>
	<div class="header-right">
	<nav class="navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header-menu',
				'menu_class'     => 'main-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			)
		);
		?>
	</nav>
	<button class="button1">
		<a href="#" target="_blank">Sign In</a>
	</button>
	<button class="button2">
		<a href="#" target="_blank">Sign Up</a>
		</button>
	</div>
	</header>
