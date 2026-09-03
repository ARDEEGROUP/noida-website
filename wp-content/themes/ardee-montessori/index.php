<?php
/**
 * Fallback template. Used for any request that doesn't match a
 * more specific template (search results, generic pages without
 * one of the Ardee: ... templates assigned, blog listings, etc).
 */
get_header(); ?>

<article class="page">
	<section class="hero on-dark tight">
		<div class="accent-bar" aria-hidden="true"><i></i><i></i><i></i></div>
		<div class="wrap">
			<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></nav>
			<h1 class="display">
				<?php
				if ( is_search() ) {
					printf( 'Search results for &ldquo;%s&rdquo;', esc_html( get_search_query() ) );
				} elseif ( is_home() && ! is_front_page() ) {
					single_post_title();
				} else {
					echo esc_html( wp_get_document_title() );
				}
				?>
			</h1>
		</div>
	</section>

	<section class="section">
		<div class="wrap">
			<?php if ( have_posts() ) : ?>
				<div class="g3">
					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<div class="card white fade-up">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="card-img"><?php the_post_thumbnail( 'medium_large' ); ?></div>
							<?php else : ?>
								<div class="card-img"><?php ardee_placeholder( 'std', 'Image placeholder', get_the_title() ); ?></div>
							<?php endif; ?>
							<h3 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo wp_trim_words( get_the_excerpt(), 22 ); ?></p>
							<a class="card-link" href="<?php the_permalink(); ?>">Read more</a>
						</div>
						<?php
					endwhile;
					?>
				</div>
				<div class="btn-row mt-10">
					<?php the_posts_pagination(); ?>
				</div>
			<?php else : ?>
				<div class="prose">
					<p>Nothing has been published here yet.</p>
				</div>
			<?php endif; ?>
		</div>
	</section>
</article>

<?php get_footer(); ?>
