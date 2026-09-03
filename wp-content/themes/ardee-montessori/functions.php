<?php
/**
 * Ardee Montessori House theme functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once get_template_directory() . '/inc/class-ardee-nav-walker.php';
require_once get_template_directory() . '/inc/customizer.php';

/* ---------------------------------------------------------
   Theme setup
--------------------------------------------------------- */
function ardee_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu (desktop pill nav)', 'ardee-montessori' ),
		'mobile'  => __( 'Mobile Menu (drawer)', 'ardee-montessori' ),
		'footer-about'      => __( 'Footer · About the House', 'ardee-montessori' ),
		'footer-admissions' => __( 'Footer · Admissions', 'ardee-montessori' ),
		'footer-group'      => __( 'Footer · The Ardee Schools', 'ardee-montessori' ),
	) );
}
add_action( 'after_setup_theme', 'ardee_setup' );

/* ---------------------------------------------------------
   Assets
   Design tokens & layout live in style.css (the theme
   stylesheet, ported directly from the approved design).
   Tailwind CSS is loaded as an additional utility layer so
   new sections, page-builder blocks or custom template work
   can be built quickly with Tailwind classes without fighting
   the base styles.
--------------------------------------------------------- */
function ardee_assets() {
	wp_enqueue_style( 'ardee-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap', array(), null );

	// Base design-system stylesheet (this theme's style.css)
	wp_enqueue_style( 'ardee-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Tailwind utility layer (CDN build; swap for a compiled build in production)
	wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false );
	wp_add_inline_script( 'tailwindcss', "tailwind.config = { corePlugins: { preflight: false }, theme: { extend: { colors: { ardeeblue: '#194264', ardeeblueDeep:'#0d2a42', ardeered:'#992723', ardeeoff:'#f7f6f3' }, fontFamily: { serif: ['Cormorant Garamond','Georgia','serif'], sans: ['DM Sans','Helvetica Neue','Arial','sans-serif'] } } } };" );

	// Front-end behaviour: sticky header, mobile drawer, submenus, fade-in on scroll
	wp_enqueue_script( 'ardee-site', get_template_directory_uri() . '/assets/js/site.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'ardee_assets' );

/* ---------------------------------------------------------
   Internal link helper.
   The original static build used hash-routing (#/philosophy,
   #/environments/nido, etc). This helper resolves that same
   shorthand to a real WordPress permalink, so template files
   can keep using ardee_link('philosophy') and it will follow
   whatever slug/page you actually publish it under - including
   in-page anchors, e.g. ardee_link('environments/nido').
--------------------------------------------------------- */
function ardee_link( $path ) {
	$path = trim( $path, '/' );
	if ( $path === '' || $path === 'home' ) {
		return home_url( '/' );
	}
	$parts  = explode( '/', $path, 2 );
	$slug   = $parts[0];
	$anchor = isset( $parts[1] ) ? '#' . $parts[1] : '';

	$page = get_page_by_path( $slug );
	if ( $page ) {
		return get_permalink( $page ) . $anchor;
	}
	// Fallback: guess the pretty-permalink path even if the page doesn't exist yet
	return home_url( '/' . $slug . '/' ) . $anchor;
}

/* ---------------------------------------------------------
   Reusable image-placeholder block.
   Mirrors the .ph component in style.css: a soft blue-grid
   placeholder card with a "shot brief" caption describing the
   photography still needed. Swap $image_id for a real
   attachment ID (or pass an $image_url) once photography is
   supplied and it renders a normal responsive <img> instead.
--------------------------------------------------------- */
function ardee_placeholder( $ratio = 'std', $tag = 'Image placeholder', $brief = '', $image = 0 ) {
	$ratio_class = 'ph ' . esc_attr( $ratio );

	if ( $image ) {
		$src = is_numeric( $image ) ? wp_get_attachment_image_url( $image, 'large' ) : esc_url( $image );
		if ( $src ) {
			printf(
				'<figure class="%1$s" style="background:#e9eff4;"><img src="%2$s" alt="%3$s" style="width:100%%;height:100%%;object-fit:cover;border-radius:16px;display:block;"></figure>',
				esc_attr( $ratio_class ),
				esc_url( $src ),
				esc_attr( $brief ? $brief : $tag )
			);
			return;
		}
	}
	?>
	<figure class="<?php echo esc_attr( $ratio_class ); ?>">
		<figcaption>
			<span class="ph-tag"><?php echo esc_html( $tag ); ?></span>
			<?php if ( $brief ) : ?><span class="ph-brief"><?php echo esc_html( $brief ); ?></span><?php endif; ?>
		</figcaption>
	</figure>
	<?php
}

/* ---------------------------------------------------------
   Fallback [ardee_form] shortcode for the Contact and Visit
   template. Replace with Contact Form 7 / WPForms / Gravity
   Forms output for real submission handling - just drop the
   plugin's shortcode into the Contact page template in place
   of [ardee_form].
--------------------------------------------------------- */
function ardee_form_shortcode() {
	ob_start();
	?>
	<form class="form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<input type="hidden" name="action" value="ardee_enquiry">
		<?php wp_nonce_field( 'ardee_enquiry', 'ardee_enquiry_nonce' ); ?>
		<label>First name<input type="text" name="first_name" autocomplete="given-name" required></label>
		<label>Last name<input type="text" name="last_name" autocomplete="family-name" required></label>
		<label>Email<input type="email" name="email" autocomplete="email" required></label>
		<label>Phone<input type="tel" name="phone" autocomplete="tel" required></label>
		<label>Child's date of birth<input type="date" name="dob"></label>
		<label>Enquiry type
			<select name="type">
				<option>Admissions</option>
				<option>Schedule a Visit</option>
				<option>Prospectus</option>
				<option>Careers</option>
				<option>Other</option>
			</select>
		</label>
		<label class="full">Message<textarea name="message"></textarea></label>
		<div class="full btn-row">
			<button class="btn btn-red lg" type="submit">Send Enquiry</button>
			<span class="small">Response within 24 hours, Monday to Friday.</span>
		</div>
	</form>
	<?php
	return ob_get_clean();
}
add_shortcode( 'ardee_form', 'ardee_form_shortcode' );

/**
 * Basic admin-post handler for the fallback form above.
 * Sends a plain email to the site admin. Replace with a form
 * plugin for spam protection, validation and CRM integration.
 */
function ardee_handle_enquiry() {
	if ( ! isset( $_POST['ardee_enquiry_nonce'] ) || ! wp_verify_nonce( $_POST['ardee_enquiry_nonce'], 'ardee_enquiry' ) ) {
		wp_die( 'Security check failed.' );
	}
	$to      = get_option( 'admin_email' );
	$subject = 'New enquiry from ' . get_bloginfo( 'name' );
	$lines   = array();
	foreach ( array( 'first_name', 'last_name', 'email', 'phone', 'dob', 'type', 'message' ) as $field ) {
		if ( ! empty( $_POST[ $field ] ) ) {
			$lines[] = ucfirst( str_replace( '_', ' ', $field ) ) . ': ' . sanitize_text_field( wp_unslash( $_POST[ $field ] ) );
		}
	}
	wp_mail( $to, $subject, implode( "\n", $lines ) );
	wp_safe_redirect( add_query_arg( 'enquiry', 'sent', wp_get_referer() ?: home_url( '/' ) ) );
	exit;
}
add_action( 'admin_post_ardee_enquiry', 'ardee_handle_enquiry' );
add_action( 'admin_post_nopriv_ardee_enquiry', 'ardee_handle_enquiry' );

/* ---------------------------------------------------------
   Widget area for the footer's fourth column, if a site owner
   wants to manage it from Appearance → Widgets instead of code.
--------------------------------------------------------- */
function ardee_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column', 'ardee-montessori' ),
		'id'            => 'footer-1',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'ardee_widgets_init' );
