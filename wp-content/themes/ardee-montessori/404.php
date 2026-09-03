<?php
/**
 * 404 template
 */
get_header(); ?>

<article class="page">
	<section class="hero home on-dark" style="min-height:60vh;">
		<div class="accent-bar" aria-hidden="true"><i></i><i></i><i></i></div>
		<div class="wrap">
			<div class="eyebrow light">404</div>
			<h1 class="display">We couldn't find <em>that page</em>.</h1>
			<p class="lead">The page may have moved, or the link may be out of date. Try the environments, admissions or contact pages below, or head back home.</p>
			<div class="btn-row">
				<a class="btn btn-red lg" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a>
				<a class="btn btn-outline-light lg" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Contact and Visit</a>
			</div>
		</div>
	</section>
</article>

<?php get_footer(); ?>
