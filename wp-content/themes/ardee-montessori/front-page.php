<?php
/**
 * Front page template — Home
 * (WordPress will use this automatically once a static front
 * page is set under Settings → Reading, OR assign the
 * "Ardee: Home" template found in page-home-template.php to
 * any page if you prefer to keep front-page.php generic.)
 */
get_header(); ?>

<article class="page" data-page="home">

<section class="hero home on-dark">
	<div class="accent-bar" aria-hidden="true"><i></i><i></i><i></i></div>
	<div class="hero-note">
		<b>Hero image placeholder · 2400 by 1350, landscape</b>
		<span>Wide establishing shot of the Noida House main environment at the start of the work cycle, children choosing materials from low open shelves, morning light through large windows, landscape 2400 by 1350</span>
	</div>
	<div class="wrap">
		<div class="eyebrow light">The Ardee Montessori House &middot; Noida</div>
		<h1 class="display">A Pure Montessori Start, <em>the Ardee Way</em>.</h1>
		<p class="lead">A dedicated Montessori House for children from 8 months to 6 years, part of The Ardee Schools: a family of five campuses that began as a single Montessori House in New Delhi in 2003 and now carries children from their first prepared environment through to Cambridge International Advanced Levels (A Levels).</p>
		<div class="btn-row">
			<a class="btn btn-red lg" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Enquire Now
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
			</a>
			<a class="btn btn-outline-light lg" href="<?php echo esc_url( ardee_link( 'environments' ) ); ?>">Explore the Environments</a>
		</div>
		<div class="hero-facts">
			<div><b>8 months to 6 years</b><span>Ages</span></div>
			<div><b>9:00 AM to 1:30 PM</b><span>Hours</span></div>
			<div><b>4</b><span>Environments</span></div>
			<div><b>2003</b><span>Part of a group established</span></div>
		</div>
	</div>
</section>

<section class="section">
	<div class="wrap g2">
		<div class="fade-up">
			<div class="eyebrow">Welcome to the House</div>
			<h2 class="title">The House at <em>Noida</em>.</h2>
			<div class="prose">
				<p>A dedicated Montessori House for the early years, thoughtfully built on Dr. Montessori's planes of development. Featuring internationally standardised Montessori apparatus, carefully prepared environments, and child-led discovery designed to nurture independence, concentration, and joyful learning.</p>
				<p>Set on Lotus Boulevard in Sector 100, the Noida House pairs the intimacy of a Montessori environment with the expansive, future-ready infrastructure the prospectus describes: room for children to move, to garden, and to grow into the next stage without changing what they have come to trust.</p>
			</div>
			<blockquote class="quote"><p>At Ardee Montessori House, each child is met with respect, trust, and a prepared environment that supports their natural growth.</p><cite>The Ardee Montessori Houses prospectus</cite></blockquote>
			<div class="btn-row"><a class="btn btn-blue" href="<?php echo esc_url( ardee_link( 'philosophy' ) ); ?>">Our Philosophy</a><a class="btn btn-ghost" href="<?php echo esc_url( ardee_link( 'ardeeology' ) ); ?>">Read Ardeeology</a></div>
		</div>
		<div class="fade-up d1">
			<?php ardee_placeholder( 'std', 'Image placeholder · 1600 by 1200, landscape', "A mentor kneeling at a child's eye level during a presentation of the pink tower on a floor mat, soft window light from the left, shelves of sensorial material in focus behind, no direct eye contact with camera" ); ?>
		</div>
	</div>
</section>

<section class="section off tight">
	<div class="wrap">
		<div class="head"><div class="eyebrow">At a glance</div><h2 class="title">Noida, <em>in brief</em>.</h2></div>
		<div class="g4 fade-up">
			<div class="tile"><h4 class="h4">Ages</h4><p>The House serves children from 8 months to 6 years, from NIDO to the final year.</p></div>
			<div class="tile"><h4 class="h4">Hours</h4><p>9:00 AM to 1:30 PM, Monday to Friday.</p></div>
			<div class="tile"><h4 class="h4">Certified Montessori mentors</h4><p>Trained and certified Montessori educators support each child through observation and gentle guidance rather than instruction.</p></div>
			<div class="tile"><h4 class="h4">Daily parent communication</h4><p>Photos, updates and classroom observations reach families through a daily parent communication app.</p></div>
		</div>
	</div>
</section>

<section class="section">
	<div class="wrap">
		<div class="head"><div class="eyebrow">How we educate</div><h2 class="title">Authentic Montessori, <em>the Ardee way</em>.</h2><p class="lead">The Houses follow the Montessori method as Dr. Maria Montessori set it down, carried by the convictions of a school group that opened its first campus as a Montessori House in 2003. Three pages explain how.</p></div>
		<div class="g3">
			<div class="fade-up"><div class="card"><div class="label">The method</div><h3 class="h3">Our Philosophy</h3><p>Prepared environments, authentic apparatus and certified mentors who observe before they guide. The planes of development, the areas of learning, and what changes when a child is trusted to work.</p><a class="card-link" href="<?php echo esc_url( ardee_link( 'philosophy' ) ); ?>">Read Our Philosophy</a></div></div>
			<div class="fade-up d1"><div class="card"><div class="label">The Ardee way</div><h3 class="h3">Ardeeology</h3><p>Where Ardee began, the three understandings at the centre of its education, the mentor's role, and the continuum that runs from the first environment to Cambridge A Levels.</p><a class="card-link" href="<?php echo esc_url( ardee_link( 'ardeeology' ) ); ?>">Read Ardeeology</a></div></div>
			<div class="fade-up d2"><div class="card"><div class="label">By age</div><h3 class="h3">Environments and Programmes</h3><p>NIDO, Red, Blue and the Early Years Foundation Stage (EYFS): each a community prepared for one stage of development, with its own materials, rhythm and mentor.</p><a class="card-link" href="<?php echo esc_url( ardee_link( 'environments' ) ); ?>">See the Environments</a></div></div>
		</div>
	</div>
</section>

<section class="section off">
	<div class="wrap">
		<div class="head"><div class="eyebrow">Environments</div><h2 class="title">A community for <em>every stage</em>.</h2><p class="lead">The House serves children from 8 months to 6 years. Each stage of development has its own prepared room, its own apparatus and its own daily rhythm.</p></div>
		<div class="g4">
			<div class="fade-up d0"><div class="card"><div class="label">from 8 months</div><h3 class="h3">NIDO</h3><p>The youngest members of the House, welcomed with their parents into a calm, orderly nest prepared for first movement, first language and first independence.</p><div class="card-foot">The infant and toddler community</div><a class="card-link" href="<?php echo esc_url( ardee_link( 'environments/nido' ) ); ?>">Read more</a></div></div>
			<div class="fade-up d1"><div class="card"><div class="label">from 2 years</div><h3 class="h3">Red</h3><p>Independent two-year-olds refining fine and gross motor movement through purposeful activity in a prepared environment built around confidence and a love of learning.</p><div class="card-foot">Foundation Montessori</div><a class="card-link" href="<?php echo esc_url( ardee_link( 'environments/red' ) ); ?>">Read more</a></div></div>
			<div class="fade-up d2"><div class="card"><div class="label">from 3 years</div><h3 class="h3">Blue</h3><p>A mixed-age community in which children exercise freedom appropriate to their growing sense of responsibility, and in which self-discipline emerges from within.</p><div class="card-foot">The Children's House</div><a class="card-link" href="<?php echo esc_url( ardee_link( 'environments/blue' ) ); ?>">Read more</a></div></div>
			<div class="fade-up d3"><div class="card"><div class="label">from 5 years</div><h3 class="h3">EYFS</h3><p>The final year of the House, in which Montessori work is mapped to the Early Years Foundation Stage (EYFS) and children are prepared for Cambridge Primary at The Ardee School.</p><div class="card-foot">Early Years Foundation Stage</div><a class="card-link" href="<?php echo esc_url( ardee_link( 'environments/eyfs' ) ); ?>">Read more</a></div></div>
		</div>
	</div>
</section>

<section class="section">
	<div class="wrap g2">
		<div class="fade-up">
			<?php ardee_placeholder( 'std', 'Image placeholder · 1600 by 1200, landscape', 'A three-year-old carrying a tray with a small jug and glass across the environment during the work cycle, other children working on mats in the background, natural light, shallow depth of field' ); ?>
		</div>
		<div class="fade-up d1">
			<div class="eyebrow">A day at the House</div>
			<h2 class="title">Structure that a child <em>can trust</em>.</h2>
			<p class="lead">The day runs from 9:00 AM to 1:30 PM. It opens with a greeting at the door, gives way to a long, uninterrupted work cycle, moves outdoors to the sandpit and the gardening patches, gathers around a freshly prepared meal, and closes calmly with families.</p>
			<div class="timeline mt-8">
				<div class="tl"><span class="when num">9:00 AM</span><h4 class="h4">Arrival and greeting</h4><p>Each child is greeted by name at the door of the environment, removes their own shoes and chooses their first work.</p></div>
				<div class="tl"><span class="when">Mid-morning</span><h4 class="h4">The work cycle and the outdoors</h4><p>Presentations, independent work, practical life and time in the outdoor play zone.</p></div>
				<div class="tl"><span class="when num">1:30 PM</span><h4 class="h4">Departure</h4><p>A calm handover, with the day's observations shared through the parent communication app.</p></div>
			</div>
			<div class="btn-row mt-8"><a class="btn btn-blue" href="<?php echo esc_url( ardee_link( 'day' ) ); ?>">See the full day</a></div>
		</div>
	</div>
</section>

<section class="section off tight">
	<div class="wrap">
		<div class="head"><div class="eyebrow">Moments from the House</div><h2 class="title">A morning <em>in the environment</em>.</h2></div>
		<div class="gallery fade-up">
			<?php ardee_placeholder( '', 'Image placeholder · 1600 by 1600, square', 'Two children of different ages working together on the hundred board on a floor mat, seen from above at a slight angle, hands and tiles in focus' ); ?>
			<?php ardee_placeholder( 'std', 'Image placeholder · 1200 by 900, landscape', 'A child pouring water from a small jug at the practical life shelf, sleeves rolled, concentration on the face, sunlit' ); ?>
			<?php ardee_placeholder( 'std', 'Image placeholder · 1200 by 900, landscape', 'The outdoor play zone: a child watering a gardening patch with a small can, sandpit and low fence behind, morning light' ); ?>
			<?php ardee_placeholder( 'std', 'Image placeholder · 1200 by 900, landscape', 'A mentor and a child sitting side by side with the sandpaper letters, the child tracing a letter with two fingers' ); ?>
			<?php ardee_placeholder( 'std', 'Image placeholder · 1200 by 900, landscape', 'Children laying the table for the in-house meal: cloth napkins, small plates and a jug, one child carrying a basket of fruit' ); ?>
		</div>
	</div>
</section>

<section class="section blue on-dark">
	<div class="wrap">
		<div class="head"><div class="eyebrow">Montessori highlights</div><h2 class="title">Six commitments <em>in every environment</em>.</h2><p class="lead">Our Montessori programme is intentionally designed to give every child a warm, confident, and emotionally secure beginning before they enter any formal campus environment.</p></div>
		<div class="g3">
			<div class="tile fade-up d0"><h4 class="h4">Certified Montessori educators</h4><p>Our trained and certified Montessori educators guide each child with patience, deep observation, and a thorough understanding of early-years development. They support growth through gentle guidance rather than instruction.</p></div>
			<div class="tile fade-up d1"><h4 class="h4">Sensorial learning materials</h4><p>Authentic Montessori apparatus invite children to learn through their senses, refine perception, and make abstract ideas concrete. Each material has a clear purpose and supports hands-on discovery.</p></div>
			<div class="tile fade-up d2"><h4 class="h4">A strong focus on independence</h4><p>From simple choices to meaningful self-care tasks, children build confidence, discipline, and ownership of their actions. These early experiences lay the foundation for independence that lasts a lifetime.</p></div>
			<div class="tile fade-up d0"><h4 class="h4">Social and emotional learning</h4><p>Grace and courtesy, mindfulness, and emotional expression are woven into daily routines. Children learn to regulate emotions, collaborate peacefully, and form trusting relationships within their community.</p></div>
			<div class="tile fade-up d1"><h4 class="h4">Parent communication via app</h4><p>Photos, updates, and classroom observations help parents feel connected to their child's day. This transparent home and school bridge supports shared understanding and builds trust.</p></div>
			<div class="tile fade-up d2"><h4 class="h4">Peace education</h4><p>At Ardee Montessori Houses, peace is lived daily through calm environments, respectful relationships, and purposeful work that nurtures self-discipline, empathy, and responsibility.</p></div>
		</div>
	</div>
</section>

<section class="section off">
	<div class="wrap">
		<div class="g2 top">
			<div class="fade-up">
				<div class="head"><div class="eyebrow">Recognition</div><h2 class="title">Awards and <em>affiliations</em>.</h2><p class="lead">Recognition earned by the Ardee Montessori Houses and the affiliations held by The Ardee Schools as a group.</p></div>
				<div class="rows">
					<div class="row"><span><strong>Brainfeed School Excellence Awards, 2017-18</strong><br>Ranked among the Top 100 Preschools in India for excellence in early childhood education.</span></div>
					<div class="row"><span><strong>Education Today North School Merit Awards, 2018-19</strong><br>Recognised as a Top Montessori School for academic quality and pedagogical practices.</span></div>
					<div class="row"><span><strong>Digital Learning, Top Preschools of India Ranking, 2018</strong><br>Awarded a Certificate of Recognition for innovation and excellence in preschool education.</span></div>
				</div>
			</div>
			<div class="fade-up d1">
				<div class="panel-label">The Ardee Schools are affiliated with or recognised by</div>
				<div class="aff">
					<div>Cambridge International</div><div>Great Place to Work</div><div>FICCI Arise</div><div>TAISI India</div><div>TEDx</div><div>Montessori</div>
				</div>
				<p class="small mt-6"><span class="ph-marker">[INSERT: the official affiliation logos as shown on theardeeschools.com, each 200 by 110 with a transparent background]</span></p>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="wrap">
		<div class="head"><div class="eyebrow">One family of schools</div><h2 class="title">Part of <em>The Ardee Schools</em>.</h2><p class="lead">Every Ardee campus reflects a unified commitment to thoughtful education, intellectual curiosity, and enduring excellence. A child who begins at this House may continue to Cambridge Primary at The Ardee School.</p></div>
		<div class="g3 fade-up">
			<a class="campus-card" href="https://theardeeschools.com/" target="_blank" rel="noopener"><small>Group</small><b>The Ardee Schools</b><span>The group landing page for all five campuses, the Teacher Training Centre and group news.</span><span class="card-link">theardeeschools.com</span></a>
			<a class="campus-card" href="https://nfctheardeeschools.com/" target="_blank" rel="noopener"><small>Kindergarten to Class 12 (K-12)</small><b>The Ardee School, New Friends Colony</b><span>The flagship campus in New Delhi: Pure Montessori through to Cambridge International Advanced Levels (A Levels).</span><span class="card-link">nfctheardeeschools.com</span></a>
			<a class="campus-card" href="https://goatheardeeschools.com/" target="_blank" rel="noopener"><small>Kindergarten to Class 12 (K-12)</small><b>The Ardee School, Goa</b><span>The coastal campus at Sangolda, Bardez: Pure Montessori through to Cambridge A Levels.</span><span class="card-link">goatheardeeschools.com</span></a>
			<a class="campus-card" href="https://munirkatheardeeschools.com/" target="_blank" rel="noopener"><small>Montessori House</small><b>The Ardee Montessori House, Munirka</b><span>Munirka, New Delhi. Children from 8 months to 6 years.</span><span class="card-link">Visit the Munirka site</span></a>
			<div class="campus-card current"><small>Montessori House &middot; this campus</small><b><?php bloginfo( 'name' ); ?></b><span>Sector 100, Noida, Uttar Pradesh. Children from 8 months to 6 years.</span></div>
			<a class="campus-card" href="https://gurugramtheardeeschools.com/" target="_blank" rel="noopener"><small>Montessori House</small><b>The Ardee Montessori House, Gurugram</b><span>The Ardee City, Gurugram, Haryana. Children from 18 months to 3 years.</span><span class="card-link">Visit the Gurugram site</span></a>
		</div>
	</div>
</section>

<section class="section off">
	<div class="wrap g2 top">
		<div class="fade-up">
			<div class="eyebrow">Parent partnership</div>
			<h2 class="title sm">Connected to <em>every day</em>.</h2>
			<p class="lead">Photos, updates and classroom observations reach families through a daily parent communication app, a transparent bridge between home and the House that supports shared understanding and builds trust. Families are invited to tour the House, virtually and in person, before their child joins.</p>
			<div class="btn-row mt-6"><a class="btn btn-blue" href="<?php echo esc_url( ardee_link( 'parents' ) ); ?>">Parent Partnership</a></div>
		</div>
		<div class="fade-up d1">
			<div class="eyebrow">Safety and wellbeing</div>
			<h2 class="title sm">A secure campus, <em>scaled to the child</em>.</h2>
			<p class="lead">A secure campus with closed-circuit television (CCTV) throughout, child-sized Montessori furnishings, a Montessori mobility zone for independence, air-conditioned rooms and fresh meals prepared in-house: the House is built so that a child can be both safe and free.</p>
			<div class="btn-row mt-6"><a class="btn btn-blue" href="<?php echo esc_url( ardee_link( 'safety' ) ); ?>">Safety and Wellbeing</a></div>
		</div>
	</div>
</section>

<section class="cta-band">
	<div class="wrap">
		<div><h2>Visit the House, <em>in person or online</em>.</h2><p>School tours are offered both virtually and in person. Our team responds to every enquiry within 24 hours, Monday to Friday.</p></div>
		<div class="btn-row"><a class="btn btn-white lg" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Book a Tour</a><a class="btn btn-outline-light" href="https://my.matterport.com/show/?m=igBGNTJpU95" target="_blank" rel="noopener">Take the Virtual Tour</a></div>
	</div>
</section>
<section class="close-band">
	<div class="wrap">
		<h2>Begin Your Journey <br><em>at Ardee</em></h2>
		<div class="btn-row"><a class="btn btn-white on-red lg" href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Enquire for 2026-27</a><a class="btn btn-outline-light lg" href="https://theardeeschools.com/contact-us/" target="_blank" rel="noopener">Contact Admissions</a></div>
	</div>
</section>

</article>

<?php get_footer(); ?>
