<?php
/* Template Name: Ardee: Contact and Visit */
get_header(); ?>

<article class="page" data-page="contact">

<section class="hero on-dark">
	<div class="accent-bar" aria-hidden="true"><i></i><i></i><i></i></div>

	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span><span>Contact and Visit</span></nav>
		<div class="eyebrow light">Contact and Visit</div>
		<h1 class="display">Start a <em>conversation</em>.</h1>
		<p class="lead">Whether you are exploring admissions, scheduling a visit or have a general enquiry, our team responds within 24 hours, Monday to Friday.</p>
	</div>
</section>

<section class="section">
	<div class="wrap contact-grid">
		<div class="fade-up">
			<div class="head"><div class="eyebrow">Enquiry</div><h2 class="title">We would love to <em>hear from you</em>.</h2></div>

			<?php if ( isset( $_GET['enquiry'] ) && $_GET['enquiry'] === 'sent' ) : ?>
				<div class="panel mb-6" style="border-color:#1e4f78;background:rgba(25,66,100,.06)">
					<p style="margin:0">Thank you — your enquiry has been sent. Our team will be in touch within 24 hours, Monday to Friday.</p>
				</div>
			<?php endif; ?>

			<?php
			/**
			 * If you've installed Contact Form 7, WPForms or Gravity
			 * Forms, replace the line below with that plugin's
			 * shortcode, e.g. [contact-form-7 id="123" title="Enquiry"].
			 * The [ardee_form] fallback below posts to admin-post.php
			 * and emails the site admin - fine for launch, but a form
			 * plugin gives you spam protection and a submissions log.
			 */
			echo do_shortcode( '[ardee_form]' );
			?>
		</div>
		<div class="fade-up d1">
			<div class="panel">
				<div class="panel-label"><?php bloginfo( 'name' ); ?></div>
				<div class="info-list">
					<div><b>Address</b><span><?php echo nl2br( esc_html( get_theme_mod( 'ardee_address', "The Ardee Montessori House, Noida Lotus Boulevard, Sector 100 Noida 201301" ) ) ); ?></span></div>
					<div><b>Telephone</b><span><a href="tel:18001027333">180010ARDEE (18001027333)</a></span></div>
					<div><b>Email</b><span><a href="mailto:<?php echo esc_attr( get_theme_mod( 'ardee_email', 'contactusnoida@ardeemontessorihouse.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ardee_email', 'contactusnoida@ardeemontessorihouse.com' ) ); ?></a></span></div>
					<div><b>Hours</b><span>Monday to Friday, 8:30 AM to 3:00 PM Indian Standard Time (IST)</span></div>
					<div><b>Head of School</b><span>Ms. Sunjeet Kaur</span></div>
					<div><b>Group</b><span><a href="tel:18001027333">180010ARDEE (18001027333)</a><br><a href="https://theardeeschools.com/contact-us/" target="_blank" rel="noopener">theardeeschools.com/contact-us</a></span></div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<section class="section off">
	<div class="wrap g2 top">
		<div class="fade-up">
			<div class="head"><div class="eyebrow">Visit</div><h2 class="title">In person, <em>or from home</em>.</h2><p class="lead">School tours are offered both virtually and in person. The virtual tour shows the prepared environments as they are; the visit shows them in use.</p></div>
			<div class="btn-row"><a class="btn btn-blue" href="#top">Book a Tour</a><a class="btn btn-ghost" href="https://my.matterport.com/show/?m=igBGNTJpU95" target="_blank" rel="noopener">Take the Virtual Tour</a></div>
			<div class="info-list mt-8">
				<div><b>Tours</b><span>Monday To Saturday</span></div>
				<div><b>Open mornings</b><span>8:30 AM to 3:30 PM</span></div>
				<div><b>Directions</b><span>Lotus Boulevard, Sector 100 Noida</span></div>
			</div>
		</div>
	<div class="fade-up d1">
    <div class="ph std" style="background:none;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.800167886082!2d77.36622037570665!3d28.545725588017074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce75832001661%3A0xd51756c8a894bde7!2sArdee%20Montessori%20House%2C%20Noida!5e0!3m2!1sen!2sin!4v1788758467244!5m2!1sen!2sin"
            style="width:100%;height:100%;border:0;border-radius:16px;"
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
        </iframe>
    </div>
</div>
	</div>
</section>

<section class="section">
	<div class="wrap">
		<div class="head"><div class="eyebrow">The Ardee Schools</div><h2 class="title">Every campus, <em>one family</em>.</h2><p class="lead">The Ardee Schools span campuses across India, each offering a consistent educational experience rooted in the Cambridge curriculum, Montessori philosophy, and a shared commitment to nurturing the whole child.</p></div>
		<div class="g3 fade-up">
			<a class="campus-card" href="https://theardeeschools.com/" target="_blank" rel="noopener"><small>Group</small><b>The Ardee Schools</b><span>The group landing page for all five campuses, the Teacher Training Centre and group news.</span><span class="card-link">theardeeschools.com</span></a>
			<a class="campus-card" href="https://nfctheardeeschools.com/" target="_blank" rel="noopener"><small>Kindergarten to Class 12 (K-12)</small><b>The Ardee School, New Friends Colony</b><span>The flagship campus in New Delhi: Pure Montessori through to Cambridge International Advanced Levels (A Levels).</span><span class="card-link">nfctheardeeschools.com</span></a>
			<a class="campus-card" href="https://goatheardeeschools.com/" target="_blank" rel="noopener"><small>Kindergarten to Class 12 (K-12)</small><b>The Ardee School, Goa</b><span>The coastal campus at Sangolda, Bardez: Pure Montessori through to Cambridge A Levels.</span><span class="card-link">goatheardeeschools.com</span></a>
			<a class="campus-card" href="https://munirkatheardeeschools.com/" target="_blank" rel="noopener"><small>Montessori House</small><b>The Ardee Montessori House, Munirka</b><span>Munirka, New Delhi. Children from 8 months to 6 years.</span><span class="card-link">Visit the Munirka site</span></a>
			<div class="campus-card current"><small>Montessori House &middot; this campus</small><b><?php bloginfo( 'name' ); ?></b><span>Sector 100, Noida, Uttar Pradesh. Children from 8 months to 6 years.</span></div>
			<a class="campus-card" href="https://gurugramtheardeeschools.com/" target="_blank" rel="noopener"><small>Montessori House</small><b>The Ardee Montessori House, Gurugram</b><span>The Ardee City, Gurugram, Haryana. Children from 18 months to 3 years.</span><span class="card-link">Visit the Gurugram site</span></a>
		</div>
		<div class="btn-row mt-10"><a class="btn btn-ghost" href="https://theardeeschools.com/wp-content/themes/ardee/images/prospectus-2024-2025-munirka-noida.pdf" target="_blank" rel="noopener">Montessori Prospectus</a><a class="btn btn-ghost" href="https://theardeeschools.com/blogs/" target="_blank" rel="noopener">Group News</a></div>
	</div>
</section>

<section class="close-band">
	<div class="wrap">
		<h2>Begin Your Journey <br><em>at Ardee</em></h2>
		<div class="btn-row"><a class="btn btn-white on-red lg" href="#content">Enquire for 2026-27</a><a class="btn btn-outline-light lg" href="https://theardeeschools.com/contact-us/" target="_blank" rel="noopener">Contact Admissions</a></div>
	</div>
</section>

</article>

<?php get_footer(); ?>
