<?php if ( ! is_front_page() ): ?>
	</section><!--end page content area-->
<?php endif; ?>

<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => 'd-flex footer-menu',
				) );
				?>
			</div>

			<div class="col-md-6">
				<p class="text-right m-0 text-white">
					<?php printf( '&copy; Copyright %s. All Rights Reserved By <a href="%s"><strong>%s</strong></a>', date( 'Y' ), get_bloginfo('url'), get_bloginfo( 'name' ) ); ?>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>


</html>
