<?php
/**
 * Template Name: Ardee School – Campus Page
 *
 * Static version of the Campus page: no ACF / custom fields required.
 * All copy below is plain PHP text you can edit directly in this file.
 * Section markers (HERO, CAMPUS OVERVIEW, LEARNING SPACES, etc.) are kept
 * so it's easy to find and edit each part.
 */

get_header();


// ══════════════════════════════════════════════════
// HERO
// ══════════════════════════════════════════════════
$campus_hero_heading = 'An Award-Winning';
$campus_hero_italic  = 'Green Campus';

// ══════════════════════════════════════════════════
// CAMPUS OVERVIEW
// ══════════════════════════════════════════════════
$campus_ov_heading = 'The Space Teaches';
$campus_ov_italic  = 'Neuroarchitecture';

$campus_ov_para1 = 'The Ardee School campus has been conceived with deliberate care by a team of distinguished architects, creating an environment where space itself becomes a medium for learning. Every element, proportion, light, material, and form has been considered to support the intellectual and developmental journey of the child.';

$campus_ov_para2 = 'The campus is organised to encourage clarity of thought and freedom of movement, enabling students to engage with their surroundings in a manner that is both intuitive and purposeful. Indoor and outdoor spaces are seamlessly connected, offering a rich and varied learning landscape that supports reflection, exploration, and collaboration.';

$campus_ov_para3 = 'This carefully designed environment reflects a deep understanding of how children learn, quietly fostering independence, curiosity, and a sense of belonging. The school\'s commitment to excellence in design has been recognised with the Best School Building Award, North India (2017).';

$campus_ov_stat1_num   = '20K+';
$campus_ov_stat1_label = 'Sq ft indoor sports hall';
$campus_ov_stat2_num   = '230';
$campus_ov_stat2_label = 'Retractable seats, Discovery Court, Amphitheatre';

// ══════════════════════════════════════════════════
// LEARNING SPACES
// ══════════════════════════════════════════════════
$ls_heading = 'Every Space';
$ls_italic  = 'Designed to Teach';

$ls_featured_tag   = 'Heart of the Campus';
$ls_featured_title = 'Discovery Court';
$ls_featured_para1 = 'At the centre of the school stands the Discovery Court, a carefully considered amphitheatre where the life of the community naturally converges. Designed as the architectural and intellectual heart of the campus, it brings together learning, performance, and shared experience.';
$ls_featured_para2 = 'Framed by a living vertical garden and bathed in natural light through expansive sky glass galleries, the Court offers a setting that is both refined and dynamic. Retractable seating for 230, oriented towards a raised stage, enables seamless transitions between performances and academic showcases, supported by integrated audio visual infrastructure.';
$ls_featured_para3 = 'More than a physical space, the Discovery Court serves as a forum for exchange, where ideas are presented, perspectives are challenged, and a culture of thoughtful dialogue is cultivated.';

$ls_card1_title = 'Smart Classrooms';
$ls_card1_para1 = 'Classrooms are designed with precision to support focus, clarity, and contemporary learning. Each space is equipped with Smart interactive boards and advanced AV systems, complemented by acoustically treated interiors to ensure optimal sound quality.';
$ls_card1_para2 = 'Air quality is continuously monitored, with purification systems maintaining a healthy environment, while energy efficient lighting enhances both comfort and sustainability. From Year 6 onwards, ergonomically designed, adjustable seating supports posture and engagement.';
$ls_card1_para3 = 'Each classroom reflects a commitment to creating an environment that is both technologically advanced and academically purposeful.';

$ls_card2_title = 'Earth Café';
$ls_card2_para1 = 'The Earth Café provides a calm and welcoming setting where students gather each day for breakfast and lunch. Thoughtfully designed as an integral part of the school experience, it encourages community interaction within a relaxed and well supervised environment.';
$ls_card2_para2 = "Menus are carefully curated to ensure nutritional balance and are shared with families in advance, reflecting the school's commitment to student wellbeing and transparency.";

$ls_lrc_tag   = 'Library & Digital Resources';
$ls_lrc_title = 'Learning Resource Centres';
$ls_lrc_body  = 'A modern automated library linked with the curriculum and the interests and needs of the reader. The Ardee digital library offers magazine articles, books, papers, images, sound files and videos. A special IT skill programme develops independent learning from the preliminary Key-Stage.';

// ══════════════════════════════════════════════════
// LABS & STUDIOS
// ══════════════════════════════════════════════════
$labs_heading = 'Studios';
$labs_italic  = 'Makers & Thinkers';

$labs_cards = array(
  array( 'title' => 'Makers Lab',               'body' => 'A dedicated space for innovation and experimentation, the Makers Lab brings together advanced tools including 3D printers, laser scanners, eye tracking systems, and VR technologies. Supported by woodworking and prototyping facilities, it encourages students to translate ideas into tangible outcomes, where Science, Technology, Engineering, Art, and Mathematics converge in purposeful creation.' ),
  array( 'title' => 'Music Studio',             'body' => 'A professionally designed, double-walled soundproof studio that supports both vocal and instrumental training. Serving as a recording space, it provides students with the opportunity to refine their musical expression while exploring composition, performance, and production in a focused environment.' ),
  array( 'title' => 'Art Studios',              'body' => 'Spacious and light filled, the Art Studios are complemented by an observatory terrace, offering an inspiring setting for creative exploration. Connected to the Design Technology laboratory, the studios support work across materials and mediums, enabling students to engage with both two dimensional and three dimensional forms.' ),
  array( 'title' => 'Science Laboratories',     'body' => 'Purpose built laboratories for Chemistry, Physics, and Biology, equipped to international safety standards. The facilities support advanced experimentation across areas such as cell biology, genetics, molecular biology, and enzymatic studies, encouraging rigorous scientific inquiry and practical understanding.' ),
  array( 'title' => 'ICT Labs',                 'body' => 'Two fully equipped ICT laboratories, supported by dedicated internal servers and high speed broadband connectivity. With access to current operating systems and software, students are provided with a reliable and future ready digital environment to support research, coding, and technological fluency.' ),
  array( 'title' => 'Learning Resource Centre', 'body' => 'A vibrant hub for independent study, research, and collaborative learning, housing an extensive collection of books, digital periodicals, and reference materials designed to cultivate a lifelong love for reading.' ),
);

// ══════════════════════════════════════════════════
// SPORTS
// ══════════════════════════════════════════════════
$sp_eyebrow = 'Sports Facilities';
$sp_heading = 'Every Sport.';
$sp_italic  = 'Every Student.';
$sp_intro1  = 'At The Ardee School, sport is regarded as an essential dimension of education, offering every student the opportunity to develop discipline, resilience, and a strong sense of teamwork.';
$sp_intro2  = 'A broad and carefully structured sporting programme ensures participation across a wide range of disciplines, supported by the expertise of the Ardee Physical Education department and specialist coaches.';

$sp_cards = array(
  array(
    'img' => 'https://nfctheardeeschools.com/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-13-at-3.47.27-PM.jpeg', 'alt' => 'Indoor Sports Hall',
    'tag' => '20,000+ Sq Ft', 'title' => 'Indoor Sports Hall',
    'body' => 'A state of the art, climate controlled indoor sports arena designed for year round performance excellence. Equipped with advanced air washing systems and electrostatic purification, the space maintains optimal conditions even during peak summer. The hall supports a wide spectrum of disciplines including gymnastics, parkour, yoga, and structured fitness programmes, creating a dynamic environment that fosters agility, strength, and holistic wellbeing.', 'd' => 'd1',
  ),
  array(
    'img' => 'https://nfctheardeeschools.com/wp-content/uploads/2026/09/Astro-Turf.jpg.jpeg', 'alt' => 'Astro Turf & Soccer Field',
    'tag' => 'International Standard', 'title' => 'Astro Turf & Soccer Field',
    'body' => 'A professionally engineered AstroTurf field built to international specifications, accommodating both 7 a side and 9 a side formats 50 × 30 metres. Students benefit from structured training sessions led by experienced coaches, alongside curated weekend sports engagements across football, basketball, cricket, and volleyball.', 'd' => 'd2',
  ),
  array(
    'img' => 'https://nfctheardeeschools.com/wp-content/uploads/2026/09/Swimming.jpg.jpeg', 'alt' => 'Swimming Pool',
    'tag' => 'All Key-Stage', 'title' => 'Swimming Pool',
    'body' => 'A fully supervised half olympic size aquatic facility catering to learners from EYFS through Secondary. Programmes are led by certified instructors, with continuous lifeguard presence and rigorously enforced safety protocols. The swimming curriculum is designed to build confidence, endurance, and technical proficiency, while instilling discipline and water safety from an early age.', 'd' => 'd1',
  ),
  array(
    'img' => 'https://nfctheardeeschools.com/wp-content/uploads/2026/08/bas.jpg', 'alt' => 'Basketball Court',
    'tag' => '28m × 15m', 'title' => 'Basketball Court',
    'body' => 'An international standard, multi sport court featuring a high performance synthetic rubber surface 9 layer construction and professional grade fibreglass backboards. Engineered with padded safety infrastructure, the space is optimised not only for basketball but also for tennis and badminton training.', 'd' => 'd2',
  ),
  array(
    'img' => 'https://nfctheardeeschools.com/wp-content/uploads/2026/08/Aerial-Yoga.jpg', 'alt' => 'Arial Yoga',
    'tag' => 'International Standard', 'title' => 'Arial Yoga',
    'body' => 'Yoga helps students build strength, flexibility, and inner calm. It encourages mindfulness, improves concentration, and supports overall wellbeing, making it an important part of school life.', 'd' => 'd2',
  ),
  array(
    'img' => 'https://nfctheardeeschools.com/wp-content/uploads/2026/09/Pickleball.jpg.jpeg', 'alt' => 'Pickleball Court',
    'tag' => '20,000+ Sq Ft', 'title' => 'Pickleball Court',
    'body' => "The Ardee School is among the few institutions in the country to offer dedicated Pickleball facilities, reflecting our commitment to embracing both emerging and established sports. Our campus features four international-standard courts, providing ample space for students to train, practise, and compete in this rapidly growing global sport. Guided by our specialist PE team and professional coaches, students are introduced to the game's unique blend of strategy, agility, and precision.", 'd' => 'd1',
  ),
  array(
    'img' => 'https://nfctheardeeschools.com/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-06-at-11.02.01-AM.jpeg', 'alt' => 'Cricket',
    'tag' => '20,000+ Sq Ft', 'title' => 'Cricket',
    'body' => 'The Ardee School offers over 14 sports disciplines, with Cricket being one of the most sought-after programmes among our students. Dedicated cricket coaching sessions are conducted in the morning, afternoon, and evening under the guidance of our expert coaches, ensuring continuous skill development and professional training opportunities for aspiring players.', 'd' => 'd1',
  ),
);

// ══════════════════════════════════════════════════
// AIR QUALITY
// ══════════════════════════════════════════════════
$aq_eyebrow        = 'Air Quality Management';
$aq_heading_italic = 'The Right to Breathe Clean Air';
$aq_para1 = 'At The Ardee School, clean air is not an added feature, it is a foundational commitment.';
$aq_para2 = 'We actively monitor and manage indoor air quality across all learning and activity spaces. Real time AQI and PM2.5 levels are continuously tracked, ensuring that every classroom and sports facility maintains a safe and optimised environment for students.';
$aq_para3 = 'Even when outdoor air quality reaches severe levels, indoor ecosystems remain protected through advanced purification systems, allowing uninterrupted learning, play, and performance.';

$aq_press = array(
  array( 'source' => 'The New York Times', 'headline' => 'Who Gets to Breathe Clean Air in New Delhi?' ),
  array( 'source' => 'The Atlantic',       'headline' => 'The Delhi Air Crisis — What It Means for the World' ),
  array( 'source' => 'Education World',    'headline' => 'How are Delhi schools fighting pollution?' ),
);

// ══════════════════════════════════════════════════
// TRANSPORT
// ══════════════════════════════════════════════════
$tr_eyebrow    = 'Transport';
$tr_heading    = 'Safe Journeys,';
$tr_italic     = 'Every Single Day.';
$tr_card_title = 'Transport';
$tr_para1 = 'Reliable, intelligently managed transport designed with safety, precision, and convenience at its core.';
$tr_para2 = 'Our GPS enabled school transport network spans key areas of Delhi, offering real time tracking and complete visibility for parents. Each bus is equipped with essential safety features, including onboard first aid kits, while routes are strategically planned and continuously optimised for efficiency and coverage.';
$tr_para3 = 'The result is a service that is not only dependable, but deeply reassuring, ensuring every journey to and from school is safe, seamless, and well supervised.';

// ══════════════════════════════════════════════════
// MENU
// ══════════════════════════════════════════════════
$mn_eyebrow = 'School Menu';
$mn_heading = 'Nourishing Minds,';
$mn_italic  = 'One Meal at a Time.';
$mn_intro   = 'At The Ardee School, nutrition is taken as seriously as academics. Our carefully curated weekly menus are designed by nutrition specialists to ensure every child receives wholesome, balanced meals that fuel their learning and growth.';

$mn_cards = array(
  array(
    'title' => 'Fresh Daily',
    'body'  => 'Every meal is prepared from scratch each morning using premium, seasonal ingredients sourced from trusted local suppliers. No preservatives, no shortcuts, just honest, wholesome food made with care, consistency, and love.',
    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z"/><path d="M8 12h8M12 8v8"/></svg>',
    'd' => '',
  ),
  array(
    'title' => 'Monthly Menu Shared',
    'body'  => 'We share our monthly menu with families on the 1st of every month so parents are always in the loop. Dietary preferences, allergies, and cultural considerations are thoughtfully accommodated, because every child deserves a meal that feels made for them. The parent ambassadors also do routine checks to insure hygiene and quality of food.',
    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg>',
    'd' => 'd1',
  ),
  array(
    'title' => 'Nutritionally Balanced',
    'body'  => 'Each dish is carefully calibrated to meet dietary guidelines for school age children, delivering the ideal balance of proteins, complex carbohydrates, healthy fats, and essential micronutrients, supporting concentration, stamina, and long term wellbeing.',
    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>',
    'd' => 'd2',
  ),
);

// ══════════════════════════════════════════════════
// SAFETY
// ══════════════════════════════════════════════════
$sf_eyebrow = 'Safety & Wellbeing';
$sf_heading = "Your Child's Safety";
$sf_italic  = 'Always First.';
$sf_intro   = 'A secure, nurturing environment underpins everything we do at The Ardee School. From the moment a child arrives on campus to the moment they leave, their safety and wellbeing are our highest priority.';

$sf_cards = array(
  array(
    'title' => 'Security & Surveillance',
    'body'  => 'A fully integrated campus security framework ensures a safe, secure, and closely monitored environment for all students and staff. The campus is equipped with over 175 high-definition CCTV cameras strategically installed across classrooms, corridors, common areas, entry and exit points, and outdoor spaces to ensure continuous surveillance and monitoring.',
    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.7)" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'd' => '',
  ),
  array(
    'title' => 'Health & Well-being',
    'body'  => 'A full-time qualified Health Officer is present on campus to maintain health records and support student well-being. The school also features a fully equipped dedicated health room to ensure immediate care and medical attention whenever required.',
    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.7)" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
    'd' => 'd1',
  ),
  array(
    'title' => 'Child Protection Policy',
    'body'  => 'Age-appropriate safety practices and a comprehensive Child Protection Policy create a structured environment where every child can thrive. All staff undergo regular safeguarding training.',
    'icon'  => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.7)" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>',
    'd' => 'd2',
  ),
);
?>

<style>
.g2c{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.grid-3col{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.grid-2col{display:grid;grid-template-columns:repeat(2,1fr);gap:24px}
.lrc-row{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center}
.stats-mini{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
@media(max-width:860px){.g2c{grid-template-columns:1fr;gap:40px}.lrc-row{grid-template-columns:1fr;gap:20px}.grid-3col{grid-template-columns:repeat(2,1fr)}}
@media(max-width:600px){.grid-2col{grid-template-columns:1fr}.grid-3col{grid-template-columns:1fr}.stats-mini{grid-template-columns:1fr 1fr}.hero-section{padding:100px 0 60px !important}section{padding-top:56px !important;padding-bottom:56px !important}.psn-link{padding:14px 14px !important;font-size:12px !important}.ls-featured{grid-row:auto !important}}
.fade-up{opacity:0;transform:translateY(28px);transition:opacity .7s ease,transform .7s ease}
.fade-up.d1{transition-delay:.12s}
.fade-up.d2{transition-delay:.22s}
.fade-up.d3{transition-delay:.32s}
.fade-up.visible{opacity:1;transform:none}
</style>

<!-- ══════════════════════════════════════════════════
     HERO — ACF Group: "Campus Hero"
══════════════════════════════════════════════════ -->
<div class="hero-section relative bg-blue-deep overflow-hidden bg-[url('https://nfctheardeeschools.com/wp-content/uploads/2026/05/frefgh.jpg.jpeg')] bg-cover bg-center" style="padding:240px 0 90px">
  <!-- Static decorative side bar -->
  <div class="absolute left-0 top-0 bottom-0 w-[5px] flex flex-col z-10">
    <div class="flex-1" style="background:rgba(255,255,255,.2)"></div>
    <div class="flex-1 bg-red"></div>
    <div class="flex-1" style="background:rgba(255,255,255,.35)"></div>
  </div>
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10 relative z-10">
    <!-- Static breadcrumb -->
    <div class="flex items-center gap-2 text-[12px] mb-6" style="color:rgba(255,255,255,.4)">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="hover:text-white/70 transition-colors" style="color:rgba(255,255,255,.4)">Home</a>
      <span>/</span><span>Campus</span>
    </div>
    <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase mb-5" style="color:rgba(255,255,255,.4)">
      <span class="inline-block w-5 h-px bg-red"></span>The Campus
    </div>
    <h1 class="font-serif font-light text-white leading-[1.08] tracking-[-1px] mb-6" style="font-size:clamp(36px,6vw,72px)">
      <?php echo esc_html( $campus_hero_heading ); ?><br>
      <em class="italic" style="color:rgba(255,255,255,.6)"><?php echo esc_html( $campus_hero_italic ); ?></em>
    </h1>
  </div>
</div>


<!-- PAGE NAV — static labels -->
<div class="bg-white border-b border-border sticky top-0 z-[100]">
  <div class="psn-inner max-w-[1160px] mx-auto px-5 sm:px-10 flex overflow-x-auto">
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer active" href="#campus-overview">Overview</a>
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer" href="#learning-spaces">Learning Spaces</a>
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer" href="#labs">Labs &amp; Studios</a>
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer" href="#sports">Sports</a>
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer" href="#air-quality">Air Quality</a>
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer" href="#transport">Transport</a>
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer" href="#menu">Menu</a>
    <a class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-blue transition-colors cursor-pointer" href="#safety">Safety</a>
  </div>
</div>


<!-- ══════════════════════════════════════════════════
     CAMPUS OVERVIEW — ACF Group: "Campus Overview Section"
══════════════════════════════════════════════════ -->
<section id="campus-overview" class="bg-white py-24">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">
    <div class="g2c">

      <div class="fade-up">
        <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-red mb-4">
          <span class="w-5 h-px bg-red inline-block"></span>The Campus
        </div>
        <h2 class="font-serif font-normal text-blue leading-[1.1] tracking-[-0.5px] mb-5" style="font-size:clamp(28px,4vw,52px)">
          <?php echo esc_html( $campus_ov_heading ); ?><br><em class="italic text-red"><?php echo esc_html( $campus_ov_italic ); ?></em>
        </h2>
        <div class="text-[16px] leading-[1.95] text-ink-mid mt-6">
          <p class="mb-[18px]"><?php echo nl2br( esc_html( $campus_ov_para1 ) ); ?></p>
          <p class="mb-[18px]"><?php echo nl2br( esc_html( $campus_ov_para2 ) ); ?></p>
          <p class="mb-[18px]"><?php echo nl2br( esc_html( $campus_ov_para3 ) ); ?></p>
        </div>
      </div>

      <div class="fade-up d2">
        <div class="flex flex-col gap-4">
          <!-- Static Matterport embed -->
          <div class="bg-blue rounded-[20px] overflow-hidden relative" style="aspect-ratio:4/3">
            <div class="absolute top-3 left-4 text-[10px] font-bold tracking-[3px] uppercase z-10" style="color:rgba(255,255,255,.4)">Campus Walkthrough</div>
            <iframe src="https://my.matterport.com/show/?m=AMuci7T2zHf" width="100%" height="100%" frameborder="0" allowfullscreen allow="xr-spatial-tracking" style="position:absolute;top:0;left:0;width:100%;height:100%;border:none;"></iframe>
          </div>
          <div class="stats-mini">
            <!-- Stat 1 & 2 — ACF -->
            <div class="bg-off border border-border rounded-xl p-5 text-center">
              <div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,36px)"><?php echo esc_html( $campus_ov_stat1_num ); ?></div>
              <div class="text-[11px] text-ink-light mt-1"><?php echo esc_html( $campus_ov_stat1_label ); ?></div>
            </div>
            <div class="bg-off border border-border rounded-xl p-5 text-center">
              <div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,36px)"><?php echo esc_html( $campus_ov_stat2_num ); ?></div>
              <div class="text-[11px] text-ink-light mt-1"><?php echo esc_html( $campus_ov_stat2_label ); ?></div>
            </div>
            <!-- Remaining stat tiles — static labels -->
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">Air-conditioned</div></div>
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">Smart Classroom</div></div>
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">Pollution Controlled</div></div>
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">Green Campus</div></div>
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">Transport</div></div>
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">Meals</div></div>
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">Health Room</div></div>
            <div class="bg-off border border-border rounded-xl p-5 text-center"><div class="font-serif font-normal text-blue leading-none" style="font-size:clamp(28px,5vw,32px)">CCTV</div></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════════
     LEARNING SPACES — ACF Group: "Learning Spaces Section"
══════════════════════════════════════════════════ -->
<section id="learning-spaces" class="py-24" style="background:#f7f6f3">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="fade-up">
      <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-red mb-4">
        <span class="w-5 h-px bg-red inline-block"></span>Learning Spaces
      </div>
      <h2 class="font-serif font-normal text-blue leading-[1.1] tracking-[-0.5px] mb-5" style="font-size:clamp(28px,4vw,52px)">
        <?php echo esc_html( $ls_heading ); ?><br><em class="italic text-red"><?php echo esc_html( $ls_italic ); ?></em>
      </h2>
    </div>

   <div class="grid-2col mt-12">

  <!-- LEFT COLUMN: Discovery Court + Corner Cafe (separate, stacked cards) -->
  <div class="flex flex-col gap-6">

    <!-- Discovery Court — closes fully on its own, no row-span-2 anymore -->
    <div class="bg-white border border-border rounded-[20px] overflow-hidden ls-featured fade-up d1">
      <div class="w-full img-ph" style="aspect-ratio:4/3;border-radius:0">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/08/Discovery.jpg" alt="Discovery Court">
      </div>
      <div class="p-7">
        <div class="text-[10px] font-bold tracking-[2px] uppercase text-red mb-2"><?php echo esc_html( $ls_featured_tag ); ?></div>
        <div class="text-[20px] font-semibold text-blue mb-3"><?php echo esc_html( $ls_featured_title ); ?></div>
        <?php if ( $ls_featured_para1 ) : ?><p class="text-[14px] leading-[1.8] text-ink-mid mt-3"><?php echo nl2br( esc_html( $ls_featured_para1 ) ); ?></p><?php endif; ?>
        <?php if ( $ls_featured_para2 ) : ?><p class="text-[14px] leading-[1.8] text-ink-mid mt-3"><?php echo nl2br( esc_html( $ls_featured_para2 ) ); ?></p><?php endif; ?>
        <?php if ( $ls_featured_para3 ) : ?><p class="text-[14px] leading-[1.8] text-ink-mid mt-3"><?php echo nl2br( esc_html( $ls_featured_para3 ) ); ?></p><?php endif; ?>
      </div>
    </div>
    <!-- Discovery Court ends here -->

    <!-- Corner Cafe — its OWN independent card, same style as Smart Classrooms/Earth Café -->
    <div class="bg-white border border-border rounded-2xl overflow-hidden fade-up d2">
      <div class="w-full img-ph" style="aspect-ratio:16/9;border-radius:0">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/08/corner.jpg" alt="Corner Cafe">
      </div>
      <div class="p-[22px]">
        <div class="text-[15px] font-semibold text-blue mb-2">Corner Cafe</div>
        <p class="text-[13px] leading-[1.7] text-ink-mid">
          The Corner Café is a thoughtfully designed space created especially for our Foundation Years learners, offering a warm and inviting environment where children experience community mealtimes with independence, confidence, and joy.
          A dedicated buffet area enables mentors to serve the children while also creating opportunities for students to serve their peers. The café-style seating encourages meaningful social interaction, grace and courtesy, and a growing sense of community.
        </p>
      </div>
    </div>
    <!-- Corner Cafe ends here -->

  </div>

  <!-- RIGHT COLUMN: Smart Classrooms + Earth Café (unchanged) -->
  <div class="flex flex-col gap-6">

    <div class="bg-white border border-border rounded-2xl overflow-hidden fade-up d2">
      <div class="w-full img-ph" style="aspect-ratio:16/9;border-radius:0">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/04/smart.jpg" alt="Smart Classroom">
      </div>
      <div class="p-[22px]">
        <div class="text-[15px] font-semibold text-blue mb-2"><?php echo esc_html( $ls_card1_title ); ?></div>
        <?php if ( $ls_card1_para1 ) : ?><p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $ls_card1_para1 ) ); ?></p><?php endif; ?>
        <?php if ( $ls_card1_para2 ) : ?><p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $ls_card1_para2 ) ); ?></p><?php endif; ?>
        <?php if ( $ls_card1_para3 ) : ?><p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $ls_card1_para3 ) ); ?></p><?php endif; ?>
      </div>
    </div>

    <div class="bg-white border border-border rounded-2xl overflow-hidden fade-up d3">
      <div class="w-full img-ph" style="aspect-ratio:16/9;border-radius:0">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/04/Earth-Cafe-1.jpg" alt="Earth Café">
      </div>
      <div class="p-[22px]">
        <div class="text-[15px] font-semibold text-blue mb-2"><?php echo esc_html( $ls_card2_title ); ?></div>
        <?php if ( $ls_card2_para1 ) : ?><p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $ls_card2_para1 ) ); ?></p><?php endif; ?>
        <?php if ( $ls_card2_para2 ) : ?><p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $ls_card2_para2 ) ); ?></p><?php endif; ?>
      </div>
    </div>

  </div>

</div>

    <!-- LRC row -->
    <div class="bg-white border border-border rounded-2xl p-8 mt-6 fade-up d1">
      <div class="lrc-row">
        <div>
          <div class="text-[10px] font-bold tracking-[2px] uppercase text-red mb-2"><?php echo esc_html( $ls_lrc_tag ); ?></div>
          <div class="text-[20px] font-semibold text-blue mb-3"><?php echo esc_html( $ls_lrc_title ); ?></div>
          <p class="text-[14px] leading-[1.8] text-ink-mid"><?php echo nl2br( esc_html( $ls_lrc_body ) ); ?></p>
        </div>
        <div class="w-full img-ph" style="aspect-ratio:16/9">
          <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/04/lib.jpg" alt="Library">
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════════════
     LABS & STUDIOS — ACF Group: "Labs & Studios Section"
══════════════════════════════════════════════════ -->
<section id="labs" class="py-24" style="background:#0d2a42">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="fade-up">
      <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase mb-4" style="color:rgba(255,255,255,.4)">
        <span class="inline-block w-5 h-px bg-red"></span>Labs &amp; Studios
      </div>
      <h2 class="font-serif font-normal text-white leading-[1.1] tracking-[-0.5px]" style="font-size:clamp(28px,4vw,52px)">
        <?php echo esc_html( $labs_heading ); ?><br><em class="italic" style="color:#992723"><?php echo esc_html( $labs_italic ); ?></em>
      </h2>
    </div>

    <!-- Static images, ACF title/body -->
    <div class="grid-3col mt-12">
      <?php
      $labs_images = array(
        'https://nfctheardeeschools.com/wp-content/uploads/2026/08/IMG_5846.jpg',
        'https://nfctheardeeschools.com/wp-content/uploads/2026/08/Music-room.jpg',
        'https://nfctheardeeschools.com/wp-content/uploads/2026/04/art.jpg',
        'https://nfctheardeeschools.com/wp-content/uploads/2026/05/vvv.jpeg',
        'https://nfctheardeeschools.com/wp-content/uploads/2026/04/WhatsApp-Image-2026-04-28-at-16.12.00.jpeg',
        'https://nfctheardeeschools.com/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-20-at-1.09.26-PM.jpeg',
      );
      $labs_delays = array('','d2','','d1','d2','d2');
      foreach ( $labs_cards as $i => $card ) :
      ?>
      <div class="rounded-2xl overflow-hidden fade-up <?php echo esc_attr( $labs_delays[$i] ); ?>" style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08)">
        <div class="w-full img-ph" style="aspect-ratio:16/9;border-radius:0;background:rgba(255,255,255,.04);border-color:rgba(255,255,255,.1)">
          <img src="<?php echo esc_url( $labs_images[$i] ); ?>" alt="<?php echo esc_attr( $card['title'] ); ?>">
        </div>
        <div class="p-6">
          <div class="text-[15px] font-semibold text-white mb-2"><?php echo esc_html( $card['title'] ); ?></div>
          <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.45)"><?php echo nl2br( esc_html( $card['body'] ) ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════════
     SPORTS — ACF Group: "Sports Section"
══════════════════════════════════════════════════ -->
<section id="sports" class="bg-white py-24">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="fade-up">
      <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-red mb-4">
        <span class="w-5 h-px bg-red inline-block"></span><?php echo esc_html( $sp_eyebrow ); ?>
      </div>
      <h2 class="font-serif font-normal text-blue leading-[1.1] tracking-[-0.5px] mb-5" style="font-size:clamp(28px,4vw,52px)">
        <?php echo esc_html( $sp_heading ); ?><br><em class="italic text-red"><?php echo esc_html( $sp_italic ); ?></em>
      </h2>
      <p class="font-light leading-[1.85] text-ink-mid max-w-[600px]" style="font-size:clamp(14px,2vw,17px)"><?php echo nl2br( esc_html( $sp_intro1 ) ); ?></p>
      <p class="font-light leading-[1.85] text-ink-mid max-w-[600px]" style="font-size:clamp(14px,2vw,17px)"><?php echo nl2br( esc_html( $sp_intro2 ) ); ?></p>
    </div>

    <!-- 7 sport cards — images static, text ACF -->
    <div class="grid-3col mt-12">
      <?php foreach ( $sp_cards as $card ) : ?>
      <div class="bg-off border border-border rounded-2xl overflow-hidden fade-up <?php echo esc_attr( $card['d'] ); ?>">
        <div class="w-full img-ph" style="aspect-ratio:16/9;border-radius:0">
          <img src="<?php echo esc_url( $card['img'] ); ?>" alt="<?php echo esc_attr( $card['alt'] ); ?>">
        </div>
        <div class="p-6">
          <div class="text-[10px] font-bold tracking-[2px] uppercase text-red mb-2"><?php echo esc_html( $card['tag'] ); ?></div>
          <div class="text-[18px] font-semibold text-blue mb-2"><?php echo esc_html( $card['title'] ); ?></div>
          <p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $card['body'] ) ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════════
     AIR QUALITY — ACF Group: "Air Quality Section"
══════════════════════════════════════════════════ -->
<section id="air-quality" class="py-24" style="background:#f7f6f3">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">
    <div class="g2c">
      <div class="fade-up">
        <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-red mb-4">
          <span class="w-5 h-px bg-red inline-block"></span><?php echo esc_html( $aq_eyebrow ); ?>
        </div>
        <h2 class="font-serif font-normal text-blue leading-[1.1] tracking-[-0.5px] mb-5" style="font-size:clamp(28px,4vw,52px)">
          <em class="italic text-ink-mid"><?php echo esc_html( $aq_heading_italic ); ?></em>
        </h2>
        <div class="text-[16px] leading-[1.95] text-ink-mid mt-6">
          <p class="mb-[18px]"><?php echo nl2br( esc_html( $aq_para1 ) ); ?></p>
          <p class="mb-[18px]"><?php echo nl2br( esc_html( $aq_para2 ) ); ?></p>
          <p class="mb-[18px]"><?php echo nl2br( esc_html( $aq_para3 ) ); ?></p>
        </div>
        <!-- Featured-in press list — ACF text-driven -->
        <div class="mt-7 flex flex-col gap-[10px]">
          <div class="text-[10px] font-bold tracking-[2px] uppercase text-ink-light mb-1">Featured In</div>
          <?php foreach ( $aq_press as $p ) : ?>
          <div class="flex items-center gap-3 px-4 py-3 bg-white border border-border rounded-[10px]">
            <div class="w-1 h-1 rounded-full bg-red flex-shrink-0"></div>
            <span class="text-[13px] font-semibold text-ink"><?php echo esc_html( $p['source'] ); ?></span>
            <span class="text-[12px] text-ink-light"><?php echo esc_html( $p['headline'] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- Static image -->
      <div>
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-06-at-11.15.00-AM.jpeg" alt="Air Quality" class="w-full rounded-[20px] mt-12 fade-up d1">
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════════
     TRANSPORT — ACF Group: "Transport Section"
══════════════════════════════════════════════════ -->
<section id="transport" class="bg-white py-24">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">
    <div class="fade-up">
      <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-red mb-4">
        <span class="w-5 h-px bg-red inline-block"></span><?php echo esc_html( $tr_eyebrow ); ?>
      </div>
      <h2 class="font-serif font-normal text-blue leading-[1.1] tracking-[-0.5px] mb-5" style="font-size:clamp(28px,4vw,52px)">
        <?php echo esc_html( $tr_heading ); ?><br><em class="italic text-red"><?php echo esc_html( $tr_italic ); ?></em>
      </h2>
    </div>
    <div class="g2c mt-12">
      <!-- Static image -->
      <div class="fade-up d1">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-06-at-11.07.40-AM.jpeg" alt="School Transport" class="w-full rounded-[20px] object-cover" style="aspect-ratio:4/3;object-fit:cover">
      </div>
      <div class="fade-up d2">
        <div class="bg-off border border-border rounded-[20px] p-9">
          <!-- Static icon -->
          <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-6" style="background:rgba(25,66,100,.07)">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5"><path d="M3 17a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 00-2-2H5a2 2 0 00-2 2v3z"/><path d="M5 12V7a2 2 0 012-2h10a2 2 0 012 2v5"/><circle cx="7.5" cy="17.5" r="1.5"/><circle cx="16.5" cy="17.5" r="1.5"/></svg>
          </div>
          <div class="text-[20px] font-semibold text-blue mb-4"><?php echo esc_html( $tr_card_title ); ?></div>
          <p class="text-[14px] leading-[1.85] text-ink-mid mb-4"><?php echo nl2br( esc_html( $tr_para1 ) ); ?></p>
          <p class="text-[14px] leading-[1.85] text-ink-mid mb-4"><?php echo nl2br( esc_html( $tr_para2 ) ); ?></p>
          <p class="text-[14px] leading-[1.85] text-ink-mid"><?php echo nl2br( esc_html( $tr_para3 ) ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════════
     MENU — ACF Group: "Menu Section"
══════════════════════════════════════════════════ -->
<section id="menu" class="py-24" style="background:#f7f6f3">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">
    <div class="fade-up flex items-start justify-between gap-8">
      <div>
        <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-red mb-4">
          <span class="w-5 h-px bg-red inline-block"></span><?php echo esc_html( $mn_eyebrow ); ?>
        </div>
        <h2 class="font-serif font-normal text-blue leading-[1.1] tracking-[-0.5px] mb-3" style="font-size:clamp(28px,4vw,52px)">
          <?php echo esc_html( $mn_heading ); ?><br><em class="italic text-red"><?php echo esc_html( $mn_italic ); ?></em>
        </h2>
        <p class="font-light leading-[1.85] text-ink-mid max-w-[600px] mt-4" style="font-size:clamp(14px,2vw,17px)"><?php echo nl2br( esc_html( $mn_intro ) ); ?></p>
      </div>
      <!-- Static PDF button -->
      <div class="flex-shrink-0 mt-[52px]">
        <a href="https://nfctheardeeschools.com/wp-content/uploads/2026/08/NFC-September.pdf" class="inline-flex items-center gap-2 px-5 py-3 border border-blue text-blue text-[13px] font-medium rounded-[10px] hover:bg-blue hover:text-white transition-colors" style="white-space:nowrap" target="_blank" rel="noopener">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
          Sample Menu PDF
        </a>
      </div>
    </div>
    <!-- Static café image -->
    <div class="fade-up d1 mt-10 rounded-[20px] overflow-hidden" style="aspect-ratio:18/11">
      <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/09/Earth-cafe-2.jpg.jpeg" alt="Earth Café" class="w-full h-full object-cover">
    </div>
    <!-- 3 menu feature cards — icons static, text ACF -->
    <div class="grid-3col mt-8">
      <?php foreach ( $mn_cards as $c ) : ?>
      <div class="bg-white border border-border rounded-2xl p-7 fade-up <?php echo esc_attr( $c['d'] ); ?>">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(25,66,100,.07)">
          <?php echo $c['icon']; /* Static icon SVG */ ?>
        </div>
        <div class="text-[15px] font-semibold text-blue mb-2"><?php echo esc_html( $c['title'] ); ?></div>
        <p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $c['body'] ) ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════════
     SAFETY — ACF Group: "Safety Section"
══════════════════════════════════════════════════ -->
<section id="safety" class="py-24" style="background:#0d2a42">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">
    <div class="fade-up">
      <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase mb-4" style="color:rgba(255,255,255,.4)">
        <span class="inline-block w-5 h-px bg-red"></span><?php echo esc_html( $sf_eyebrow ); ?>
      </div>
      <h2 class="font-serif font-normal text-white leading-[1.1] tracking-[-0.5px] mb-3" style="font-size:clamp(28px,4vw,52px)">
        <?php echo esc_html( $sf_heading ); ?><br><em class="italic" style="color:#992723"><?php echo esc_html( $sf_italic ); ?></em>
      </h2>
      <p class="font-light leading-[1.85] max-w-[600px] mt-4" style="color:rgba(255,255,255,.55);font-size:clamp(14px,2vw,17px)"><?php echo nl2br( esc_html( $sf_intro ) ); ?></p>
    </div>
    <!-- Static safety image -->
    <div class="fade-up d1 mt-10 rounded-[20px] overflow-hidden" style="aspect-ratio:12/8">
      <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/09/security.jpg.jpeg" alt="Campus Safety" class="w-full h-full object-cover">
    </div>
    <!-- 3 safety cards — icons static, text ACF -->
    <div class="grid-3col mt-8">
      <?php foreach ( $sf_cards as $c ) : ?>
      <div class="rounded-2xl p-7 fade-up <?php echo esc_attr( $c['d'] ); ?>" style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08)">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(255,255,255,.08)">
          <?php echo $c['icon']; /* Static icon SVG */ ?>
        </div>
        <div class="text-[15px] font-semibold text-white mb-2"><?php echo esc_html( $c['title'] ); ?></div>
        <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.5)"><?php echo nl2br( esc_html( $c['body'] ) ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>

<script>
(function(){
  var menuBtn=document.getElementById('menuBtn'),closeBtn=document.getElementById('closeBtn'),sidebar=document.getElementById('sidebar'),overlay=document.getElementById('overlay');
  if(menuBtn&&sidebar&&overlay){
    menuBtn.addEventListener('click',function(){sidebar.classList.remove('translate-x-full');overlay.classList.remove('hidden');});
    function cm(){sidebar.classList.add('translate-x-full');overlay.classList.add('hidden');}
    if(closeBtn)closeBtn.addEventListener('click',cm);
    overlay.addEventListener('click',cm);
  }
})();
(function(){
  var header=document.getElementById('site-header'),menuBtn=document.getElementById('menuBtn');
  if(!header)return;
  window.addEventListener('scroll',function(){
    if(window.scrollY>60){header.classList.add('scrolled');if(menuBtn)menuBtn.style.color='#374151';}
    else{header.classList.remove('scrolled');if(menuBtn)menuBtn.style.color='#000';}
  },{passive:true});
})();
(function(){
  var obs=new IntersectionObserver(function(entries){
    entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);}});
  },{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
  document.querySelectorAll('.fade-up').forEach(function(el){obs.observe(el);});
})();
(function(){
  var spy=new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(!e.isIntersecting)return;
      document.querySelectorAll('.psn-link').forEach(function(l){l.classList.remove('active');});
      var link=document.querySelector('.psn-link[href="#'+e.target.id+'"]');
      if(link){
        link.classList.add('active');
        var nav=link.closest('.psn-inner');
        if(nav){var t=link.offsetLeft-(nav.offsetWidth/2)+(link.offsetWidth/2);nav.scrollTo({left:t,behavior:'smooth'});}
      }
    });
  },{rootMargin:'-30% 0px -60% 0px'});
  document.querySelectorAll('section[id]').forEach(function(s){spy.observe(s);});
})();
</script>