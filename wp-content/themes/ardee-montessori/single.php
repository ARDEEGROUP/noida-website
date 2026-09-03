<?php
/**
 * Single blog post template (Group News / updates, if used).
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
				<div class="eyebrow light"><?php echo esc_html( get_the_date() ); ?></div>
				<h1 class="display"><?php the_title(); ?></h1>
			</div>
		</section>

		<section class="section">
			<div class="wrap">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="mb-8"><?php the_post_thumbnail( 'large', array( 'style' => 'border-radius:16px;width:100%;height:auto;' ) ); ?></div>
				<?php else : ?>
					<div class="mb-8"><?php ardee_placeholder( 'wide', 'Featured image placeholder', get_the_title() ); ?></div>
				<?php endif; ?>
				<div class="prose">
					<?php the_content(); ?>
				</div>

				<?php if ( comments_open() || get_comments_number() ) : ?>
					<div class="mt-10"><?php comments_template(); ?></div>
				<?php endif; ?>
			</div>
		</section>
	</article>
	<?php
endwhile;

get_footer();
