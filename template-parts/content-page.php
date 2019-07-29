<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="page-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header>

	<?php the_post_thumbnail( 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'austin' ),
			'after'  => '</div>',
		) );
		?>

	</div>

</article>
