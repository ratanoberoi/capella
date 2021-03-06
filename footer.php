<?php
/**
 * Footer tempalate.
 *
 * @package capella
 */
?>

<footer class="footer">

<?php wp_footer(); ?>
</body>	
<div class="footer wrapper" >
	<div class="row">
		<div class="columns large-4 medium-4 small-12 large-expand">
			<div class="logos">
				<div class="logo1">
					<img src="<?php echo esc_attr( get_template_directory_uri() . '/assets/src/images/Bitmap.png'); ?>"
						alt="bitmap">
				</div>		
				<div class="logo2">
					<div class="footer-left">
						<img src="<?php echo esc_attr( get_template_directory_uri() . '/assets/src/images/Productly.png' ); ?>"
						alt="Productly">
					</div>
				</div>
			</div>
		</div>
		<div class="columns large-2 medium-2 small-12 large-expand">
			<div class="quick links">	
				<h1>Quick Links</h1>
				<ol>About Us</ol>
				<ol>Blog</ol>
				<ol>Contact</ol>
				<ol>FAQ</ol>
			</div>
		</div>
		<div class="columns large-2 medium-2 small-12 large-expand">
			<div class="legal stuff">	
				<h2>Legal Stuff</h2>
				<ol>Disclamer</ol>
				<ol>Financing</ol>
				<ol>Privacy Policy</ol>
				<ol>Terms of Service</ol>
			</div>
		</div>
		<div class="columns large-4 medium-4 small-12 large-expand">
			<h3>knowing you're always on the best energy deal.</h3>
			<div class="phonenumber">
				<input type="tel" placeholder="Enter your phone Number">
			</div>
			<button class="footer-button">
               	<a href="#">Sign up Now</a>
			</button>
							
		</div>
	</div>
</div>

</footer>

</html>
