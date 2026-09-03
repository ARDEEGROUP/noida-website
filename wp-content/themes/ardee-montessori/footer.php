</main><!-- #content -->

<footer class="site-footer">
	<div class="wrap">
		<div class="cols">
			<div>
				<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>, home">
					<span class="amark" aria-hidden="true">A</span>
					<span class="wordmark"><b>The Ardee <em>Montessori House</em></b><small><?php bloginfo( 'name' ); ?></small></span>
				</a>
				<p>Our curriculum, teaching methodology and global perspective make our students feel at home with the world.</p>
				<p><?php echo nl2br( esc_html( get_theme_mod( 'ardee_address', "Lotus Boulevard, Sector 100\nNoida 201301" ) ) ); ?></p>
				<p><a href="tel:18001027333">180010ARDEE (18001027333)</a></p>
				<p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'ardee_email', 'admissions@noida.theardeeschool.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ardee_email', 'admissions@noida.theardeeschool.com' ) ); ?></a></p>
			</div>
			<div>
				<h3>About the House</h3>
				<?php if ( has_nav_menu( 'footer-about' ) ) : wp_nav_menu( array( 'theme_location' => 'footer-about', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>' ) ); else : ?>
				<ul>
					<li><a href="<?php echo esc_url( ardee_link( 'philosophy' ) ); ?>">Our Philosophy</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'ardeeology' ) ); ?>">Ardeeology</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'environments' ) ); ?>">Environments and Programmes</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'day' ) ); ?>">A Day at the House</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'people' ) ); ?>">Our People</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'parents' ) ); ?>">Parent Partnership</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'safety' ) ); ?>">Safety and Wellbeing</a></li>
				</ul>
				<?php endif; ?>
			</div>
			<div>
				<h3>Admissions</h3>
				<?php if ( has_nav_menu( 'footer-admissions' ) ) : wp_nav_menu( array( 'theme_location' => 'footer-admissions', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>' ) ); else : ?>
				<ul>
					<li><a href="<?php echo esc_url( ardee_link( 'admissions' ) ); ?>">The Admissions Journey</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'admissions/dates' ) ); ?>">Key Dates and Fees</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'admissions/documents' ) ); ?>">Documents Required</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'admissions/faq' ) ); ?>">Frequently Asked Questions</a></li>
					<li><a href="<?php echo esc_url( ardee_link( 'contact' ) ); ?>">Contact and Visit</a></li>
					<li><a class="ext" href="https://theardeeschools.com/wp-content/themes/ardee/images/prospectus-2024-2025-munirka-noida.pdf" target="_blank" rel="noopener">Montessori Prospectus (PDF)</a></li>
				</ul>
				<?php endif; ?>
			</div>
			<div>
				<h3>The Ardee Schools</h3>
				<?php if ( has_nav_menu( 'footer-group' ) ) : wp_nav_menu( array( 'theme_location' => 'footer-group', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>' ) ); else : ?>
				<ul>
					<li><a class="ext" href="https://theardeeschools.com/" target="_blank" rel="noopener">The Ardee Schools (group)</a></li>
					<li><a class="ext" href="https://nfctheardeeschools.com/" target="_blank" rel="noopener">New Friends Colony, Kindergarten to Class 12</a></li>
					<li><a class="ext" href="https://goatheardeeschools.com/" target="_blank" rel="noopener">Goa, Kindergarten to Class 12</a></li>
					<li><a class="ext" href="https://munirkatheardeeschools.com/" target="_blank" rel="noopener">Munirka, Montessori House</a></li>
					<li><a class="current" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?>, Montessori House</a></li>
					<li><a class="ext" href="https://gurugramtheardeeschools.com/" target="_blank" rel="noopener">Gurugram, Montessori House</a></li>
					<li><a class="ext" href="https://theardeeschools.com/blogs/" target="_blank" rel="noopener">News</a></li>
				</ul>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-1' ) ) : dynamic_sidebar( 'footer-1' ); endif; ?>
			</div>
		</div>
		<div class="foot-bar">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> The Ardee School. All rights reserved. &middot; <a href="https://theardeeschools.com/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a></p>
			<div class="social">
				<p>Follow Us on</p>
				<a href="https://www.instagram.com/theardeeschools/" target="_blank" rel="noopener" aria-label="Follow The Ardee Schools on Instagram">
					<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
				</a>
			</div>
		</div>
	</div>
</footer>
</div><!-- #site -->
<?php wp_footer(); ?>
</body>
</html>
