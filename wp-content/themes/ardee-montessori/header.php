<?php
/**
 * The header for the Ardee Montessori House theme.
 * Outputs everything up to the opening of #content.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'ardee-site' ); ?> data-site="<?php bloginfo( 'name' ); ?>">
<?php wp_body_open(); ?>
<div id="site">
<a class="skip" href="#content"><?php esc_html_e( 'Skip to content', 'ardee-montessori' ); ?></a>

<header id="site-header">
	<div class="header-inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>, home">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="amark" aria-hidden="true">A</span>
				<span class="wordmark"><b>The Ardee <em>Montessori House</em></b><small><?php bloginfo( 'name' ); ?></small></span>
			<?php endif; ?>
		</a>

		<nav aria-label="Primary">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_id'        => 'primary-menu',
					'menu_class'     => '',
					'walker'         => new Ardee_Nav_Walker(),
				) );
				?>
			<?php else : ?>
				<ul id="primary-menu">
					<li class="has-sub">
						<button type="button" aria-haspopup="true" aria-expanded="false">About</button>
						<ul class="sub-menu">
							<li><a href="<?php echo esc_url( ardee_link( 'philosophy' ) ); ?>">Our Philosophy</a></li>
							<li><a href="<?php echo esc_url( ardee_link( 'ardeeology' ) ); ?>">Ardeeology</a></li>
							<li><a href="<?php echo esc_url( ardee_link( 'people' ) ); ?>">Our People</a></li>
						</ul>
					</li>
					<li><a href="<?php echo esc_url( ardee_link( 'environments' ) ); ?>">Environments</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'day' ) ); ?>">A Day at the House</a></li>
					<li class="has-sub">
						<button type="button" aria-haspopup="true" aria-expanded="false">Admissions</button>
						<ul class="sub-menu">
							<li><a href="<?php echo esc_url( ardee_link( 'admissions' ) ); ?>">The Admissions Journey</a></li>
							<li><a href="<?php echo esc_url( ardee_link( 'admissions/dates' ) ); ?>">Key Dates and Fees</a></li>
							<li><a href="<?php echo esc_url( ardee_link( 'admissions/faq' ) ); ?>">Frequently Asked Questions</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<button type="button" aria-haspopup="true" aria-expanded="false">Parents</button>
						<ul class="sub-menu">
							<li><a href="<?php echo esc_url( ardee_link( 'parents' ) ); ?>">Parent Partnership</a></li>
							<li><a href="<?php echo esc_url( ardee_link( 'safety' ) ); ?>">Safety and Wellbeing</a></li>
						</ul>
					</li>
					<li><a href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Contact and Visit</a></li>
				</ul>
			<?php endif; ?>
		</nav>

		<div class="header-right">
			<a href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>" class="apply-btn">Enquire Now</a>
			<button id="menuBtn" aria-label="Open menu" aria-controls="drawer" aria-expanded="false"><span></span><span></span><span></span></button>
		</div>
	</div>
</header>

<div id="drawer-overlay"></div>
<aside id="drawer" aria-label="Menu">
	<div class="drawer-header">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>, home">
			<span class="amark" aria-hidden="true">A</span>
			<span class="wordmark"><b>The Ardee <em>Montessori House</em></b><small><?php bloginfo( 'name' ); ?></small></span>
		</a>
		<button class="drawer-close" aria-label="Close menu">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
		</button>
	</div>
	<div class="drawer-rule"></div>
	<nav class="drawer-nav" aria-label="Mobile">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
		<span class="drawer-parent">About</span>
		<div class="drawer-sub">
			<a href="<?php echo esc_url( ardee_link( 'philosophy' ) ); ?>">Our Philosophy</a>
			<a href="<?php echo esc_url( ardee_link( 'ardeeology' ) ); ?>">Ardeeology</a>
			<a href="<?php echo esc_url( ardee_link( 'people' ) ); ?>">Our People</a>
		</div>
		<a href="<?php echo esc_url( ardee_link( 'environments' ) ); ?>">Environments</a>
		<a href="<?php echo esc_url( ardee_link( 'day' ) ); ?>">A Day at the House</a>
		<span class="drawer-parent">Admissions</span>
		<div class="drawer-sub">
			<a href="<?php echo esc_url( ardee_link( 'admissions' ) ); ?>">The Admissions Journey</a>
			<a href="<?php echo esc_url( ardee_link( 'admissions/dates' ) ); ?>">Key Dates and Fees</a>
			<a href="<?php echo esc_url( ardee_link( 'admissions/faq' ) ); ?>">Frequently Asked Questions</a>
		</div>
		<span class="drawer-parent">Parents</span>
		<div class="drawer-sub">
			<a href="<?php echo esc_url( ardee_link( 'parents' ) ); ?>">Parent Partnership</a>
			<a href="<?php echo esc_url( ardee_link( 'safety' ) ); ?>">Safety and Wellbeing</a>
		</div>
		<a href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Contact and Visit</a>
	</nav>
	<div class="drawer-rule"></div>
	<div class="drawer-portals">
		<div class="drawer-portals-label">The Ardee Schools</div>
		<a class="plain" href="https://theardeeschools.com/" target="_blank" rel="noopener">The Ardee Schools group site</a>
		<a class="plain" href="https://nfctheardeeschools.com/" target="_blank" rel="noopener">The Ardee School, New Friends Colony</a>
		<a class="plain" href="https://goatheardeeschools.com/" target="_blank" rel="noopener">The Ardee School, Goa</a>
		<a class="plain" href="https://munirkatheardeeschools.com/" target="_blank" rel="noopener">The Ardee Montessori House, Munirka</a>
		<a class="plain" href="https://gurugramtheardeeschools.com/" target="_blank" rel="noopener">The Ardee Montessori House, Gurugram</a>
		<a class="drawer-apply" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Enquire for 2026-27</a>
	</div>
</aside>

<main id="content">
