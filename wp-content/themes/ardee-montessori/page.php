<?php
/**
 * Generic page template — used for any WordPress Page that has
 * NOT been assigned one of the "Ardee: ..." page templates
 * (Page Attributes → Template, in the block/classic editor).
 * Renders the page title and editor content inside the shared
 * hero + prose layout, so ad-hoc pages (a policy page, a single
 * announcement, etc.) still match the design system.
 */
get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article class="page">
		<section class="hero on-dark tight">
			<div class="accent-bar" aria-hidden="true"><i></i><i></i><i></i></div>
			<div class="wrap">
				<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span><span><?php the_title(); ?></span></nav>
				<h1 class="display"><?php the_title(); ?></h1>
			</div>
		</section>

		<section class="section">
			<div class="wrap">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="mb-8"><?php the_post_thumbnail( 'large', array( 'style' => 'border-radius:16px;width:100%;height:auto;' ) ); ?></div>
				<?php endif; ?>
				<div class="prose">
					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<section class="close-band">
			<div class="wrap">
				<h2>Begin Your Journey <br><em>at Ardee</em></h2>
				<div class="btn-row"><a class="btn btn-white on-red lg" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Enquire for 2026-27</a><a class="btn btn-outline-light lg" href="https://theardeeschools.com/contact-us/" target="_blank" rel="noopener">Contact Admissions</a></div>
			</div>
		</section>
	</article>
	<?php
endwhile;

get_footer();
