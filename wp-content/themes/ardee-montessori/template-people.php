<?php
/* Template Name: Ardee: About */
get_header(); ?>

<article class="page" data-page="about">

<section class="hero on-dark">
	<div class="accent-bar" aria-hidden="true"><i></i><i></i><i></i></div>

	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span><span>About</span></nav>
		<div class="eyebrow light">About The Ardee Schools</div>
		<h1 class="display">A School Shaped to <em>Inspire</em> the Change.</h1>
		<p class="lead">For over two decades, The Ardee Schools have brought together certified Montessori educators, globally benchmarked K-12 practice, and a leadership team committed to the transformational power of education.</p>
	</div>
</section>

<div class="anchor-bar"><div class="wrap">
	<a href="#leadership">Leadership</a><a href="#how-we-began">How We Began</a><a href="#faculty">The Faculty</a><a href="#psa">PSA</a><a href="#feedback">Parent Feedback</a><a href="#campuses">Our Campuses</a>
</div></div>

<!-- ============ LEADERSHIP (slider, 6 people) ============ -->
<section class="section" id="leadership">
	<div class="wrap">
		<div class="eyebrow">Leadership</div>

		<div class="g2 top ls-grid">
			<div class="ls-media fade-up">
				<?php
				$ls_images = array(
					get_template_directory_uri() . '/assets/img/Ashok-varma.jpeg',
					get_template_directory_uri() . '/assets/img/sv.png',
					get_template_directory_uri() . '/assets/img/chandama.png',
					get_template_directory_uri() . '/assets/img/puri.jpeg',
					get_template_directory_uri() . '/assets/img/arman.png',
					get_template_directory_uri() . '/assets/img/imaan.png',
				);
				$ls_names = array( 'Mr. Ashok Varma', 'Ms. Shefali Varma', 'Ms. Chanda Raisinghani', 'Mr. Arjun Puri', 'Mr. Armaan Varma', 'Mr. Imaan Varma' );
				foreach ( $ls_images as $i => $src ) : ?>
				<div class="ls-img-layer" data-index="<?php echo $i; ?>" style="opacity:<?php echo $i === 0 ? '1' : '0'; ?>;transform:<?php echo $i === 0 ? 'scale(1) translateY(0)' : 'scale(.96) translateY(24px)'; ?>;z-index:<?php echo count( $ls_images ) - $i; ?>;">
					<?php if ( $src ) : ?>
						<?php ardee_placeholder( 'portrait', esc_html( $ls_names[ $i ] ), '', $src ); ?>
					<?php else : ?>
						<?php ardee_placeholder( 'portrait', 'Image placeholder · 1200 by 1500, portrait', 'Formal portrait, three-quarter view, soft daylight' ); ?>
					<?php endif; ?>
				</div>
				<?php endforeach; ?>

				<div class="ls-mission">
					<div class="ls-mission-icon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
					</div>
					<div><div class="ls-mission-label">Mission</div><div id="lsMission" class="ls-mission-text">Education as a transformative force</div></div>
				</div>
			</div>

			<div class="fade-up d1 ls-content">
				<span id="lsRole" class="chip red">FOUNDER, THE ARDEE GROUP &amp; THE ARDEE SCHOOLS</span>
				<h2 id="lsName" class="title" style="margin:22px 0 20px">Mr. Ashok Varma</h2>
				<div id="lsBio" class="prose"><p>Mr. Ashok Varma, the former Chairman of The Ardee group and former President of The Fore School of Management, exhibited a profound commitment to education, aligning with the visionary ideals that inspired the founding of The Ardee School more than two decades ago. His leadership and dedication played a pivotal role in shaping the educational landscape and bringing about a transformative shift in the traditional education system, guided by the vision of "Be the change you want to see," as advocated by Gandhiji.</p></div>
				<div class="ls-controls">
					<button id="lsNextBtn" type="button" class="btn btn-ghost">Next
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ============ HOW WE BEGAN ============ -->
<section class="section off" id="how-we-began">
	<div class="wrap g2 top">
		<div class="fade-up">
			<div class="head"><div class="eyebrow">How We Began</div><h2 class="title">Two Decades of <em>Purposeful</em> Education.</h2><p class="lead">From a single Montessori house to a growing network of Montessori and K-12 campuses across North India and Goa.</p></div>
			<?php ardee_placeholder( 'wide', 'Image placeholder · 1600 by 1000, landscape', 'Archive photograph of an early Ardee School event or classroom, warm documentary tone' ); ?>
		</div>
		<div class="fade-up d1">
			<div class="timeline">
				<div class="tl">
					<time>2003</time>
					<div class="h4">Flagship Montessori House in New Delhi</div>
					<p>The Ardee School was established with a clear vision to deliver a values led, globally minded education, beginning with a strong Montessori foundation.</p>
				</div>
				<div class="tl">
					<time>2007</time>
					<div class="h4">Cambridge Curriculum Introduced</div>
					<p>The school expanded to offer a comprehensive K&ndash;12 Cambridge pathway, thoughtfully integrating the National Curriculum of England with globally benchmarked practices.</p>
				</div>
				<div class="tl">
					<time>2017</time>
					<div class="h4">A State of the Art School</div>
					<p>The Ardee School's green campus was recognised among North India's finest, reflecting a commitment to architecture that enhances both learning and wellbeing.</p>
				</div>
				<div class="tl">
					<time>Today</time>
					<div class="h4">A Growing Presence in India</div>
					<p>The Ardee School now operates multiple campuses, including dedicated Montessori settings and K&ndash;12 schools in New Friends Colony, Munirka, Gurugram, Noida and Goa.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ============ FACULTY ============ -->
<?php
/**
 * Resolves an image reference for use in ardee_placeholder().
 * - Full URLs (http/https) are returned as-is.
 * - Relative paths like '/assets/img/foo.jpg' are prefixed with the
 *   theme's own URL, so they resolve inside wp-content/themes/ardee/...
 *   instead of against the site root.
 * Add this once near the top of the template (or in functions.php).
 */
if ( ! function_exists( 'ardee_resolve_img' ) ) {
	function ardee_resolve_img( $path ) {
		if ( empty( $path ) ) {
			return '';
		}
		if ( preg_match( '#^https?://#i', $path ) ) {
			return $path;
		}
		return get_template_directory_uri() . $path;
	}
}
?>

<?php
/**
 * Resolves an image reference for use in ardee_placeholder().
 * - Full URLs (http/https) are returned as-is.
 * - Relative paths like '/assets/img/foo.jpg' are prefixed with the
 *   theme's own URL, so they resolve inside wp-content/themes/ardee/...
 *   instead of against the site root.
 * Add this once near the top of the template (or in functions.php).
 */
if ( ! function_exists( 'ardee_resolve_img' ) ) {
	function ardee_resolve_img( $path ) {
		if ( empty( $path ) ) {
			return '';
		}
		if ( preg_match( '#^https?://#i', $path ) ) {
			return $path;
		}
		return get_template_directory_uri() . $path;
	}
}
?>

<section class="section blue on-dark" id="faculty">
	<div class="wrap">
		<div class="head"><div class="eyebrow light">The Leadership Team</div><h2 class="title">Among the Finest <em>Educators</em> in India.</h2><p class="lead">Mentors are appointed for their depth of knowledge, strength of character, and their ability to inspire intellectual curiosity and high standards of achievement.</p></div>

		<?php
		// LEADERSHIP TEAM (4) — to add a real photo, paste its URL into 'img' below.
		// Local upload example: '/assets/img/sunjeet-kaur.jpg' (relative to the theme folder)
		// External URL example: 'https://example.com/photo.jpg'
		$faculty_leads = array(
			array( 'name' => 'Ms. Sunjeet Kaur',  'role' => 'Head of School',                     'img' => '/assets/img/sunjeet-kaur.jpg' ),
			array( 'name' => 'Ms. Sunpritt Dang', 'role' => 'Head of Ardee Montessori Houses',     'img' => '/assets/img/sd.jpeg' ),
			array( 'name' => 'Mr. Ankit Sharma',  'role' => 'Chief Technology Officer',            'img' => '/assets/img/An.jpg' ),
			array( 'name' => 'Mr. Sunny Singh',   'role' => 'Head of HR',                          'img' => '/assets/img/sunny.jpeg' ),
		);
		?>
		<div class="people g4">
			<?php foreach ( $faculty_leads as $i => $p ) : ?>
			<div class="person fade-up d<?php echo $i % 4; ?>">
				<?php ardee_placeholder( 'square', $p['name'], $p['role'], ardee_resolve_img( $p['img'] ) ); ?>
				<b><?php echo esc_html( $p['name'] ); ?></b>
				<span><?php echo esc_html( $p['role'] ); ?></span>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="head mt-12" style="margin-bottom:24px"><div class="eyebrow light">The Mentors</div><h3 class="h3" style="color:#fff">Guiding every <em style="color:rgba(255,255,255,.6)">environment</em>.</h3></div>

		<?php
		// MENTORS (5) — same idea: paste a photo path/URL into 'img' to replace the placeholder.
		$faculty_mentors = array(
			array( 'name' => 'Mr. Arjun Puri',      'role' => 'Chief Operating Officer', 'img' => '' ),
			array( 'name' => 'Ms. Mandeera Bora',   'role' => 'Head of Secondary',       'img' => '' ),
			array( 'name' => 'Mr. Aviral Rishi',    'role' => 'Academic Convenor',       'img' => '' ),
			array( 'name' => 'Ms. Pooja Bhatia',    'role' => 'Head of Primary',         'img' => '' ),
			array( 'name' => 'Ms. Khushboo Abbot',  'role' => 'Head of Pre-Primary',     'img' => '' ),
		);
		?>
		<div class="people g5">
			<?php foreach ( $faculty_mentors as $i => $p ) : ?>
			<div class="person fade-up d<?php echo $i % 4; ?>">
				<?php ardee_placeholder( 'square', $p['name'], $p['role'], ardee_resolve_img( $p['img'] ) ); ?>
				<b><?php echo esc_html( $p['name'] ); ?></b>
				<span><?php echo esc_html( $p['role'] ); ?></span>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ PSA ============ -->
<section class="section off" id="psa">
	<div class="wrap g2 top">
		<div class="fade-up">
			<div class="head"><div class="eyebrow">PSA</div><h2 class="title">Parent <em>Ambassadors</em>.</h2></div>
			<div class="prose">
				<p>The Ardee Parent Ambassadors community strengthens the partnership between school, student and home. It brings together parents and mentors in a shared commitment to enrich the educational journey of every child.</p>
				<p>At its core, the initiative is designed to foster collaboration, trust, and a sense of belonging, ensuring that the school experience extends beyond the classroom into a thriving, supportive community.</p>
			</div>
			<div class="g3 mt-8">
				<div class="tile"><div class="h4" style="font-size:16px">Parents</div><p>Active participation in school events and governance.</p></div>
				<div class="tile"><div class="h4" style="font-size:16px">Students</div><p>Student-led initiatives and community building.</p></div>
				<div class="tile"><div class="h4" style="font-size:16px">Mentors</div><p>Mentors are chosen for their expertise, integrity, and ability to inspire curiosity and excellence.</p></div>
			</div>
		</div>
		<div class="fade-up d1">
			<?php ardee_placeholder( 'std', 'Image placeholder · 1200 by 900, landscape', 'Parents and mentors together at a school community event, candid, warm light' ); ?>
		</div>
	</div>
</section>

<!-- ============ PARENT FEEDBACK (testimonial carousel) ============ -->
<section class="section" id="feedback">
	<div class="wrap">
		<div class="head"><div class="eyebrow">Parent's Feedback</div><h2 class="title">What Ardee <em>Families</em> Say.</h2><p class="lead">The Ardee community is built on trust, shared values, and meaningful partnerships with families.</p></div>

		<div class="tb-wrap fade-up">
			<div style="overflow:hidden;border-radius:16px;">
				<div id="tbTrack" class="tb-track">
					<?php
					$testimonials = array(
						array( 'quote' => "Gabriel's curiosity has grown remarkably&mdash;he's been asking thoughtful questions about time, space, light, and shadows, clearly connecting classroom learning with real-world observations.", 'name' => 'Remen, Ardee Parent' ),
						array( 'quote' => "The school's commitment to air quality, safety and the physical environment shows how deeply they care about our children's wellbeing.", 'name' => 'Ardee Parent' ),
						array( 'quote' => 'Your attention to detail and the care you bring to everything stand out. Despite the challenges of Berry B, you handle it with patience, dedication, and positivity.', 'name' => 'Priyanka, Ardee Parent' ),
						array( 'quote' => "Thank you for your loving message and for everything you've done for Year 4A. Most of all, thank you for always being there for Aarav &amp; Anorra&mdash;it's been a pleasure knowing you, and a comfort to all the parents knowing their Class Mentor always has their back.", 'name' => 'Pranjala &amp; Viraj Vadehra' ),
						array( 'quote' => "These little hearts are leaving a piece of themselves behind in Year 4 as they bid farewell and walk into Year 5 with beautiful memories, confidence and gratitude. Thank you for all the love and guidance, dear Ms Jyoti.", 'name' => 'Nandini' ),
						array( 'quote' => "As we look back on the year, we feel so grateful that Aaruhi and Aariana had you as their mentors&mdash;thank you for the warmth, patience, encouragement, and love you gave both of them.", 'name' => 'Runika Goyal' ),
						array( 'quote' => 'It was a spectacular showcase! Thank you, mentors and the whole sports team, for your endless patience, perseverance, evening practices, teamwork and believing in every child.', 'name' => 'Karishma Gaurav Chhabra' ),
						array( 'quote' => 'As the academic year comes to an end, I wanted to take a moment to thank you once again for all the love, care, and support you have given Avvanya throughout the year. It truly means a lot to me as a parent.', 'name' => 'Sonam Kumar Dayal Gaurav Chhabra' ),
					);
					foreach ( $testimonials as $t ) : ?>
					<div class="tb-slide">
						<div class="card white" style="height:100%">
							<p style="font-style:italic"><?php echo $t['quote']; ?></p>
							<div class="card-foot"><?php echo $t['name']; ?></div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<button id="tbPrev" type="button" class="tb-arrow tb-arrow-prev" aria-label="Previous testimonial">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
			</button>
			<button id="tbNext" type="button" class="tb-arrow tb-arrow-next" aria-label="Next testimonial">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
			</button>
		</div>
		<div id="tbDots" class="tb-dots"></div>
	</div>
</section>

<!-- ============ CAMPUSES ============ -->
<section class="section off" id="campuses">
	<div class="wrap">
		<div class="head"><div class="eyebrow">The Ardee Schools</div><h2 class="title">Five <em>Campuses</em>.</h2><p class="lead">From our founding campus in Sujan Singh Park to our growing presence in New Friends Colony, Goa, Munirka, Noida and Gurugram, each Ardee school reflects a unified commitment to thoughtful education, intellectual curiosity, and enduring excellence.</p></div>

		<div class="g3">
			<div class="campus-card fade-up d0">
				<div class="campus-media"><?php ardee_placeholder( 'portrait', 'Shri Ashok Varma, Founder', '', get_template_directory_uri() . '/assets/img/delhi.jpg' ); ?></div>
				<small>Flagship Campus</small>
				<b>New Friends Colony</b>
				<span>New Friends Colony<br>New Delhi &ndash; 110025</span>
				<span>contactus_nfc@theardeeschool.com</span>
			</div>
			<div class="campus-card fade-up d1">
				<div class="campus-media"><?php ardee_placeholder( 'portrait', 'Shri Ashok Varma, Founder', '', get_template_directory_uri() . '/assets/img/munrikaa.jpeg' ); ?></div>
				<small>Campus</small>
				<b>Munirka</b>
				<span>The Ardee Montessori House, Munirka<br>14, A, New Delhi &ndash; 110067</span>
				<span>contactusmunirka@ardeemontessorihouse.com</span>
			</div>
			<div class="campus-card fade-up d2">
				<div class="campus-media"><?php ardee_placeholder( 'portrait', 'Shri Ashok Varma, Founder', '', get_template_directory_uri() . '/assets/img/ggnn.jpeg' ); ?></div>
				<small>Campus</small>
				<b>Gurugram</b>
				<span>The Ardee Montessori House, Gurugram<br>Gate No. 3, South Wing, The Ardee City</span>
				<span>contactusgurugram@ardeemontessorihouse.com</span>
			</div>
			<div class="campus-card fade-up d0">
				<div class="campus-media"><?php ardee_placeholder( 'portrait', 'Shri Ashok Varma, Founder', '', get_template_directory_uri() . '/assets/img/noidaa.jpg' ); ?></div>
				<small>Campus</small>
				<b>Noida</b>
				<span>The Ardee Montessori House, Noida<br>Lotus Boulevard, Sector 100, Noida &ndash; 201301</span>
				<span>contactusnoida@ardeemontessorihouse.com</span>
			</div>
			<div class="campus-card fade-up d1">
				<div class="campus-media"><?php ardee_placeholder( 'portrait', 'Shri Ashok Varma, Founder', '', get_template_directory_uri() . '/assets/img/goaa.jpg' ); ?></div>
				<small>Campus</small>
				<b>Goa</b>
				<span>Sangolda, Bardez, Goa &ndash; 403522</span>
				<span>contactusgoa@theardeeschool.com</span>
			</div>
		</div>
	</div>
</section>

<section class="cta-band">
	<div class="wrap">
		<div><h2>Meet the people <em>behind Ardee</em>.</h2><p>Our leadership, mentors and faculty are the heart of every campus. A tour is the best introduction to them.</p></div>
		<div class="btn-row"><a class="btn btn-white lg" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Book a Tour</a><a class="btn btn-outline-light lg" href="<?php echo esc_url( ardee_link( 'admissions' ) ); ?>">The Admissions Journey</a></div>
	</div>
</section>
<section class="close-band">
	<div class="wrap">
		<h2>Begin Your Journey <br><em>at Ardee</em></h2>
		<div class="btn-row"><a class="btn btn-white on-red lg" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Enquire for 2026-27</a><a class="btn btn-outline-light lg" href="https://theardeeschools.com/contact-us/" target="_blank" rel="noopener">Contact Admissions</a></div>
	</div>
</section>

</article>

<style>
/* ---- Leadership slider ---- */
.ls-grid{align-items:stretch}
.ls-media{position:relative;aspect-ratio:3/4;max-height:640px}
.ls-img-layer{position:absolute;inset:0;border-radius:20px;overflow:hidden;transition:opacity .6s ease,transform .6s ease}
.ls-img-layer .ph{position:absolute;inset:0;border-radius:20px;width:100%;height:100%}
.ls-img-layer img{width:100%;height:100%;object-fit:cover}
.ls-mission{position:absolute;left:20px;right:20px;bottom:20px;z-index:50;background:var(--blue);border-radius:14px;padding:16px 18px;display:flex;align-items:center;gap:14px}
.ls-mission-icon{width:38px;height:38px;border-radius:10px;background:rgba(255,255,255,.14);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.ls-mission-label{font-size:10px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.5);margin-bottom:2px}
.ls-mission-text{font-size:13px;font-weight:600;color:#fff}
.ls-content{min-height:420px;height:100%;display:flex;flex-direction:column}
.ls-controls{margin-top:auto;padding-top:24px;border-top:1px solid var(--border)}
#lsRole,#lsName,#lsBio,#lsMission{transition:opacity .3s ease,transform .3s ease}
@media (max-width:768px){.ls-media{max-height:440px}.ls-grid{align-items:start}.ls-content{height:auto}}

/* ---- Testimonial carousel ---- */
.tb-wrap{position:relative}
.tb-track{display:flex;transition:transform .45s cubic-bezier(.4,0,.2,1)}
.tb-slide{flex-shrink:0;box-sizing:border-box;padding:0 10px}
.tb-arrow{position:absolute;top:50%;transform:translateY(-50%);width:42px;height:42px;border-radius:50%;border:1px solid var(--border);background:#fff;display:flex;align-items:center;justify-content:center;color:var(--blue);cursor:pointer;box-shadow:0 4px 14px rgba(13,42,66,.1);transition:background .2s,color .2s}
.tb-arrow:hover{background:var(--blue);color:#fff}
.tb-arrow-prev{left:-14px}
.tb-arrow-next{right:-14px}
@media (max-width:640px){.tb-arrow{display:none}}
.tb-dots{display:flex;justify-content:center;gap:6px;margin-top:24px}
.tb-dots button{border:none;cursor:pointer;height:6px;border-radius:3px;padding:0;transition:width .25s,background .25s}

/* ---- Faculty grid: force 4-across / 5-across (overrides .people's default 3-col grid) ---- */
#faculty .people.g4{grid-template-columns:repeat(4,1fr)}
#faculty .people.g5{grid-template-columns:repeat(5,1fr)}
@media (max-width:1024px){
	#faculty .people.g4{grid-template-columns:repeat(2,1fr)}
	#faculty .people.g5{grid-template-columns:repeat(3,1fr)}
}
@media (max-width:640px){
	#faculty .people.g4,#faculty .people.g5{grid-template-columns:repeat(2,1fr)}
}
@media (max-width:420px){
	#faculty .people.g4,#faculty .people.g5{grid-template-columns:1fr}
}
#faculty .person .ph{margin-bottom:0}
#faculty .people.g4,#faculty .people.g5{gap:16px}
#faculty .ph::after{content:"";position:absolute;left:0;right:0;bottom:0;height:50%;background:linear-gradient(to top, rgba(13,42,66,.5) 0%, rgba(13,42,66,0) 100%);pointer-events:none}
#faculty .ph figcaption{gap:2px;left:12px;right:12px;bottom:12px}
#faculty .ph-tag{background:transparent;padding:0;color:#fff;font-size:11px;letter-spacing:1px}
#faculty .ph-brief{background:transparent;padding:0;color:rgba(255,255,255,.8);font-size:10.5px;max-width:none}

/* ---- Campus card media ---- */
.campus-media{margin:-24px -24px 18px;border-radius:20px 20px 0 0;overflow:hidden}
.campus-media .ph{border-radius:20px 20px 0 0;min-height:0;aspect-ratio:16/10}
</style>

<script>
(function(){
	/* fade-up + anchor spy */
	var obs = new IntersectionObserver(function(entries){
		entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('visible'); obs.unobserve(e.target); } });
	}, { threshold:0.1, rootMargin:'0px 0px -40px 0px' });
	document.querySelectorAll('.fade-up').forEach(function(el){ obs.observe(el); });

	var spy = new IntersectionObserver(function(entries){
		entries.forEach(function(e){
			if(!e.isIntersecting) return;
			document.querySelectorAll('.anchor-bar a').forEach(function(l){ l.classList.remove('active'); });
			var link = document.querySelector('.anchor-bar a[href="#' + e.target.id + '"]');
			if(link) link.classList.add('active');
		});
	}, { rootMargin:'-30% 0px -60% 0px' });
	document.querySelectorAll('section[id]').forEach(function(s){ spy.observe(s); });
})();

(function(){
	/* Leadership slider */
	var imgLayers = Array.from(document.querySelectorAll('.ls-img-layer'));
	if(!imgLayers.length) return;
	var elRole = document.getElementById('lsRole'),
	    elName = document.getElementById('lsName'),
	    elBio  = document.getElementById('lsBio'),
	    elMission = document.getElementById('lsMission'),
	    nextBtn = document.getElementById('lsNextBtn'),
	    count = imgLayers.length,
	    current = 0;

	var leaders = [
		{ role:"FOUNDER, THE ARDEE GROUP & THE ARDEE SCHOOLS", name:"Mr. Ashok Varma", mission:"Education as a transformative force",
		  bio:["Mr. Ashok Varma, the former Chairman of The Ardee group and former President of The Fore School of Management, exhibited a profound commitment to education, aligning with the visionary ideals that inspired the founding of The Ardee School more than two decades ago. His leadership and dedication played a pivotal role in shaping the educational landscape and bringing about a transformative shift in the traditional education system, guided by the vision of \"Be the change you want to see,\" as advocated by Gandhiji."] },
		{ role:"CHAIRPERSON, THE ARDEE GROUP & THE ARDEE SCHOOLS", name:"Ms. Shefali Varma", mission:"Nurturing every child&rsquo;s potential",
		  bio:["An alumna of Delhi University and Parsons School of Design, New York, Shefali Varma is the driving force behind the development of The Ardee schools into the country's most respected Montessori and K-12 institutions. A committed educationist who believes in the transformational power of education, Shefali is a life member of the top-ranked FORE School of Management. She also serves as an executive member on the Board of IIM, Lucknow and as a member of the FICCI, CII and CREDAI, and actively contributes to women and child welfare initiatives of several NGOs.",
		         "\"It is easy to look at progressive education that is the norm in top schools today and assume that this is the best it can be and should be&hellip;it is not&hellip;and it is time for us to redefine what we call best. That, in itself, is education."] },
		{ role:"PRESIDENT, THE ARDEE SCHOOLS", name:"Ms. Chanda Raisinghani", mission:"Innovation meets academic rigour",
		  bio:["An alumna of the London Montessori Center and the North America Montessori Society, Chanda Raisinghani's long and successful career with The Ardee Schools began in 2003 when she facilitated the launch of the group's flagship Ardee Montessori at Sujan Singh Park, Delhi. For over 20 years under her leadership, the five schools have earned an excellent reputation for providing globally benchmarked early childhood education and K-12 care. A highly-respected national education leader and strong advocate of continuous professional development of teachers, in 1999 she founded The Ardee Teacher Training Centre. She has also served as a member of the apex National Council of Teacher Education (NCTE), Delhi.",
		         "\"Adaptability, perseverance and determination tags the Ardee students as active global citizens with higher order thinking who use imagination to see the possibility in the circumstance."] },
		{ role:"COO, THE ARDEE GROUP & THE ARDEE SCHOOLS", name:"Mr. Arjun Puri", mission:"Inspiring innovation through learning",
		  bio:["Arjun Puri is an educator, institution-builder, and storyteller whose career has been shaped by a belief that meaningful leadership begins with people, purpose, and possibility.<br>A graduate of the University of St Andrews, Arjun began his professional journey in banking with Merrill Lynch in London before returning to India to pursue work with deeper social impact. Since then, his path has taken him through rural development at ITC, higher education at O.P. Jindal Global University, and leadership roles at Woodstock School and the Aga Khan Academy Hyderabad. He currently serves as Chief Operating Officer of The Ardee Group, where he works across school and organisation culture, strategy, communications,community engagement and new initiatives & projects.<br>At the heart of Arjun’s work is a passion for building institutions that are not only excellent, but deeply human, places where relationships matter, kindness carries weight, and every young person feels seen."] },
		{ role:"DIRECTOR", name:"Mr. Armaan Varma", mission:"Excellence through purposeful learning",
		  bio:["Leads the sports vertical of the Ardee group, Ardee Racquet Club, while driving new initiatives and growth opportunities across The Ardee Group &amp; The Ardee Schools."] },
		{ role:"DIRECTOR", name:"Mr. Imaan Varma", mission:"Every child deserves to be known",
		  bio:["Imaan represents a new generation of leadership at the Ardee Group, carrying forward its legacy while building for the future. As Brand Custodian, he is driving the Group’s evolution into technology-led education, with a belief that artificial intelligence and understand data can fundamentally transform how a child’s potential is understood and nurtured.<br>His focus is on creating intelligent systems that turn everyday learning into meaningful insight - helping schools, educators and families understand not only where a child stands today, but where they can go tomorrow."] }
	];

	function goTo(idx){
		if(idx === current && idx !== 0) return;
		current = idx;
		var person = leaders[idx];
		imgLayers.forEach(function(layer, i){
			var active = (i === idx);
			layer.style.opacity   = active ? '1' : '0';
			layer.style.transform = active ? 'scale(1) translateY(0)' : 'scale(.96) translateY(24px)';
			layer.style.zIndex    = active ? count + 1 : count - i;
		});
		[elRole, elName, elBio, elMission].forEach(function(el){ el.style.opacity = '0'; el.style.transform = 'translateY(10px)'; });
		setTimeout(function(){
			elRole.innerHTML    = person.role;
			elName.textContent  = person.name;
			elMission.innerHTML = person.mission;
			elBio.innerHTML = '';
			person.bio.forEach(function(p){ var el = document.createElement('p'); el.innerHTML = p; elBio.appendChild(el); });
			[elRole, elName, elBio, elMission].forEach(function(el){ el.style.opacity = '1'; el.style.transform = 'translateY(0)'; });
		}, 230);
	}
	if(nextBtn){ nextBtn.addEventListener('click', function(){ goTo((current + 1) % count); }); }
})();

(function(){
	/* Testimonial carousel */
	var track = document.getElementById('tbTrack'), dotsWrap = document.getElementById('tbDots');
	if(!track) return;
	function perView(){ var w = window.innerWidth; return w < 640 ? 1 : w < 1024 ? 2 : 3; }
	var origSlides = Array.from(track.querySelectorAll('.tb-slide')), total = origSlides.length, pv = perView(), current = 0, autoInt, isAnimating = false;

	function buildClones(){
		Array.from(track.querySelectorAll('.tb-clone')).forEach(function(el){ el.remove(); });
		pv = perView();
		origSlides.slice(0, pv).forEach(function(s){ var c = s.cloneNode(true); c.classList.add('tb-clone'); track.appendChild(c); });
		origSlides.slice(-pv).forEach(function(s){ var c = s.cloneNode(true); c.classList.add('tb-clone'); track.insertBefore(c, track.firstChild); });
		Array.from(track.children).forEach(function(s){ s.style.width = (100 / pv) + '%'; });
		track.style.transition = 'none'; current = 0; setTranslate(pv, false);
	}
	function setTranslate(pos, animate){
		var slideW = track.parentElement.offsetWidth / pv;
		track.style.transition = animate ? 'transform .45s cubic-bezier(.4,0,.2,1)' : 'none';
		track.style.transform = 'translateX(-' + (pos * slideW) + 'px)';
	}
	function realPos(){ return current + pv; }
	function go(n, fromAuto){
		if(isAnimating) return;
		isAnimating = true; current = n; setTranslate(realPos(), true);
		setTimeout(function(){
			if(current >= total){ current = 0; setTranslate(realPos(), false); }
			else if(current < 0){ current = total - 1; setTranslate(realPos(), false); }
			isAnimating = false; updateDots();
		}, 460);
		if(!fromAuto) startAuto();
	}
	function updateDots(){
		var a = ((current % total) + total) % total;
		Array.from(dotsWrap.children).forEach(function(d, i){
			d.style.width = i === a ? '18px' : '8px';
			d.style.background = i === a ? 'var(--blue)' : 'rgba(25,66,100,.2)';
		});
	}
	function buildDots(){
		dotsWrap.innerHTML = '';
		for(var i = 0; i < total; i++){
			var d = document.createElement('button');
			d.style.width = i === 0 ? '18px' : '8px';
			d.style.background = i === 0 ? 'var(--blue)' : 'rgba(25,66,100,.2)';
			(function(idx){ d.addEventListener('click', function(){ go(idx); }); })(i);
			dotsWrap.appendChild(d);
		}
	}
	function startAuto(){ clearInterval(autoInt); autoInt = setInterval(function(){ go(current + 1, true); }, 4200); }

	var tx = 0;
	track.addEventListener('touchstart', function(e){ tx = e.touches[0].clientX; clearInterval(autoInt); }, { passive:true });
	track.addEventListener('touchend', function(e){
		var d = tx - e.changedTouches[0].clientX;
		if(Math.abs(d) > 40){ go(d > 0 ? current + 1 : current - 1); } else { startAuto(); }
	}, { passive:true });

	document.getElementById('tbPrev').addEventListener('click', function(){ go(current - 1); });
	document.getElementById('tbNext').addEventListener('click', function(){ go(current + 1); });
	track.addEventListener('mouseenter', function(){ clearInterval(autoInt); });
	track.addEventListener('mouseleave', startAuto);

	var rt;
	window.addEventListener('resize', function(){ clearTimeout(rt); rt = setTimeout(function(){ buildClones(); buildDots(); startAuto(); }, 150); });

	buildClones(); buildDots(); startAuto();
})();
</script>

<?php get_footer(); ?>