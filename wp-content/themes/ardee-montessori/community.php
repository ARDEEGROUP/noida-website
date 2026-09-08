<?php
/**
 * Template Name: Ardee School – Community
 *
 * Static version: no ACF / custom fields required.
 * All copy is plain PHP text you can edit directly in this file
 * (see the variables near the top, grouped by section: HERO, PSA,
 * PARENT AMBASSADORS, ALUMNI, HOUSES).
 */
?>

<?php get_header(); ?>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"/>

<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        'ardee-blue':   '#194264',
        'ardee-deep':   '#0d2a42',
        'ardee-red':    '#992723',
        'ardee-off':    '#f7f6f3',
        'ardee-border': '#e8e4dc',
        'ink':          '#1a1a1a',
        'ink-mid':      '#4a4a4a',
        'ink-light':    '#888888',
      },
      fontFamily: {
        sans:  ['DM Sans', 'system-ui', 'sans-serif'],
        serif: ['Cormorant Garamond', 'Georgia', 'serif'],
      },
    }
  }
}
</script>

<style>
html { scroll-behavior: smooth; }
.psn-link.active { color:#194264; font-weight:600; border-bottom-color:#992723; }
.amb-card { transition: all 0.3s ease; }
.amb-card:hover { transform: translateY(-3px); box-shadow: 0 12px 32px rgba(25,66,100,0.13); }
.house-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.house-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(0,0,0,0.08); }
</style>

<?php
/* =====================================================================
   PAGE COPY — edit any value below directly
   ===================================================================== */

// ── HERO ──────────────────────────────────────────────────────────────
$hero_title_line1  = 'The Ardee';
$hero_title_line2  = 'Community';

// ── PSA ───────────────────────────────────────────────────────────────
$psa_heading_main  = 'A Community';
$psa_heading_em    = 'Built Together';
$psa_body          = 'At The Ardee School, we believe a strong community is built through meaningful relationships, shared values, and a sense of belonging. Students, families, educators, alumni, and partners come together to learn, contribute, celebrate, and grow.';

// Mini stat cards (label + sub-label)
$card_parents_label  = 'Parents';
$card_parents_sub    = 'Active participation in school governance';
$card_students_label = 'Students';
$card_students_sub   = 'Student-led initiatives and community building';
$card_alumni_label   = 'Alumni';
$card_alumni_sub     = 'A lifelong global network of Ardeeians';

// ── PARENT AMBASSADORS ────────────────────────────────────────────────
$amb_heading_main   = 'Parent';
$amb_heading_em     = 'Ambassadors';
$amb_intro          = 'Our Parent Ambassadors are valued partners in the Ardee community, fostering meaningful collaboration between families and the school. Guided by shared values, they strengthen communication, support school initiatives, and help nurture a connected and inclusive environment.';

// Info cards (title + body) — three fixed cards
$amb_card1_title = 'Community Voice';
$amb_card1_body  = 'Representing the parent body, Ambassadors encourage open communication, share feedback, and support a culture of trust and partnership.';
$amb_card2_title = 'School Partnership';
$amb_card2_body  = 'Working alongside school leadership, Ambassadors contribute to initiatives, events, and engagements that enrich the Ardee experience.';
$amb_card3_title = 'Welcoming New Families';
$amb_card3_body  = 'Ambassadors help new families feel welcomed, informed, and connected, ensuring a smooth transition into the Ardee community.';

// Photo cards — 4 fixed slots (caption only; image URL kept static)
$amb_photo1_caption = 'Celebrating our incredible educators on Teachers Day with interactive panel discussions.';
$amb_photo2_caption = 'A special moment of appreciation and token of gratitude presented during Teachers Day celebrations.';
$amb_photo3_caption = 'Our dedicated group of parent ambassadors and staff coming together for Teachers Day.';
$amb_photo4_caption = 'Building community ties at the vibrant Ardee Parent Social gathering.';

// CTA banner
$amb_cta_body = 'Interested in becoming a Parent Ambassador? We welcome parents who are passionate about the Ardee community.';
$amb_cta_link = 'mailto:contactus_nfc@theardeeschool.com';

// ── ALUMNI ────────────────────────────────────────────────────────────
$alumni_heading_main = 'Once an Ardeeian,';
$alumni_heading_em   = 'Always an Ardeeian';
$alumni_body1 = 'An Ardee education extends far beyond the years spent on campus.';
$alumni_body2 = 'Our alumni community spans leading universities and diverse career pathways in India and around the world. Ardeeians go on to excel in competitive, global environments, carrying forward the values of intellectual curiosity, integrity, and purpose that define the school.';
$alumni_email = 'alumni@theardeeschool.com';

// ── HOUSES ────────────────────────────────────────────────────────────
$houses_heading_main = 'The Ardee School';
$houses_heading_em   = 'Houses';
$houses_intro = 'Each house embodies a distinct set of values, shaping character, fostering belonging, and inspiring every student to lead with purpose.';

// Red House
$red_desc    = 'A house defined by courage, resolve, and strength of character. Ambition guided by purpose and a commitment to excellence.';
$red_captain = 'Ishanni Khanna';
$red_rep     = 'Vaaris Chitkara';

// Yellow House
$yellow_desc    = 'A house marked by spirit, optimism, and enterprise. Confidence balanced with generosity of thought and action.';
$yellow_captain = 'Idhaant Singh';
$yellow_rep     = 'Inaayat Mehra';

// Blue House
$blue_desc    = 'A house grounded in intellect, reflection, and quiet determination. Excellence pursued with focus, depth, and consistency.';
$blue_captain = 'Anysa Budhiraja';
$blue_rep     = 'Arihaan Tandon';

// Green House
$green_desc    = 'A house centred on balance, empathy, and community. Character shaped through service, humility, and shared purpose.';
$green_captain = 'Kaashvi Khanna';
$green_rep     = 'Saira';
?>


<!-- ═══════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════════ -->
<div class="relative overflow-hidden
  bg-[url('https://nfctheardeeschools.com/wp-content/uploads/2026/09/community-5.jpg.jpeg')]
  bg-cover bg-no-repeat bg-bottom lg:bg-center md:bg-center
  pt-[86px] pb-0
  md:pt-[240px] md:pb-[90px]
  lg:pt-[240px] lg:pb-[90px]">

  <div class="absolute left-0 top-0 bottom-0 w-[5px] flex flex-col z-10">
    <div class="flex-1" style="background:rgba(255,255,255,.2)"></div>
    <div class="flex-1" style="background:#992723"></div>
    <div class="flex-1" style="background:rgba(255,255,255,.35)"></div>
  </div>

  <div class="max-w-[1160px] mx-auto px-5 sm:px-10 relative z-10">

    <div class="flex items-center gap-2 text-[12px] mb-6" style="color:rgba(255,255,255,.4)">
      <a href="<?php echo esc_url( home_url('/') ); ?>" style="color:rgba(255,255,255,.4)" class="hover:text-white/70 transition-colors">Home</a>
      <span>/</span>
      <span>Community</span>
    </div>

    <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase mb-5" style="color:rgba(255,255,255,.4)">
      <span class="inline-block w-5 h-px" style="background:#992723"></span>
      COMMUNITY
    </div>

    <h1 class="font-serif font-light text-white leading-[1.08] tracking-[-1px] mb-6" style="font-size:clamp(44px,6vw,72px)">
      <?php echo esc_html( $hero_title_line1 ); ?><br>
      <em class="italic" style="color:rgba(255,255,255,.6)"><?php echo esc_html( $hero_title_line2 ); ?></em>
    </h1>

  </div>
</div>


<!-- ═══════════════════════════════════════════════════════════
     STICKY NAV
══════════════════════════════════════════════════════════════ -->
<nav class="bg-white border-b border-ardee-border sticky top-0 z-50">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10 flex overflow-x-auto">
    <a href="#psa"         class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-ardee-blue transition-colors">PSA</a>
    <a href="#alumni"      class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-ardee-blue transition-colors">Alumni</a>
    <a href="#houses"      class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-ardee-blue transition-colors">Houses</a>
    <a href="#leap" class="psn-link flex-shrink-0 text-[13px] font-medium text-ink-light px-5 py-[18px] border-b-2 border-transparent hover:text-ardee-blue transition-colors">LEAP</a>
  </div>
</nav>


<!-- ═══════════════════════════════════════════════════════════
     PSA — A Community Built Together
══════════════════════════════════════════════════════════════ -->
<section id="psa" class="bg-white py-20">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

      <div>
        <h2 class="font-serif font-normal text-ardee-blue text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-4">
          <?php echo esc_html( $psa_heading_main ); ?><br>
          <em class="text-ardee-red"><?php echo esc_html( $psa_heading_em ); ?></em>
        </h2>

        <div class="text-[15px] leading-[1.95] text-ink-mid mt-5">
          <p class="mb-4"><?php echo nl2br( esc_html( $psa_body ) ); ?></p>
        </div>

        <!-- Mini stat cards -->
        <div class="grid grid-cols-3 gap-3 mt-6">

          <!-- Parents -->
          <div class="bg-ardee-off border border-ardee-border rounded-xl p-4 text-center">
            <div class="w-9 h-9 rounded-lg bg-ardee-blue/[0.07] flex items-center justify-center mx-auto mb-2.5">
              <svg class="w-[18px] h-[18px] stroke-ardee-blue fill-none" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
              </svg>
            </div>
            <div class="text-[12px] font-semibold text-ardee-blue mb-0.5"><?php echo esc_html( $card_parents_label ); ?></div>
            <div class="text-[11px] text-ink-light leading-snug"><?php echo esc_html( $card_parents_sub ); ?></div>
          </div>

          <!-- Students -->
          <div class="bg-ardee-off border border-ardee-border rounded-xl p-4 text-center">
            <div class="w-9 h-9 rounded-lg bg-ardee-blue/[0.07] flex items-center justify-center mx-auto mb-2.5">
              <svg class="w-[18px] h-[18px] stroke-ardee-blue fill-none" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
              </svg>
            </div>
            <div class="text-[12px] font-semibold text-ardee-blue mb-0.5"><?php echo esc_html( $card_students_label ); ?></div>
            <div class="text-[11px] text-ink-light leading-snug"><?php echo esc_html( $card_students_sub ); ?></div>
          </div>

          <!-- Alumni -->
          <div class="bg-ardee-off border border-ardee-border rounded-xl p-4 text-center">
            <div class="w-9 h-9 rounded-lg bg-ardee-blue/[0.07] flex items-center justify-center mx-auto mb-2.5">
              <svg class="w-[18px] h-[18px] stroke-ardee-blue fill-none" stroke-width="1.5" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/>
                <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                <line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>
              </svg>
            </div>
            <div class="text-[12px] font-semibold text-ardee-blue mb-0.5"><?php echo esc_html( $card_alumni_label ); ?></div>
            <div class="text-[11px] text-ink-light leading-snug"><?php echo esc_html( $card_alumni_sub ); ?></div>
          </div>

        </div>
      </div>

      <!-- Right: stacked images (layout images — URLs kept static) -->
      <div class="flex flex-col gap-4">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/09/community.jpg.jpeg"
             alt="Parent workshop"
             class="w-full rounded-[20px] object-cover" style="height:280px">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/09/community-2.jpg.jpeg"
             alt="Student event"
             class="w-full rounded-[16px] object-cover" style="height:220px">
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     PARENT AMBASSADORS
══════════════════════════════════════════════════════════════ -->
<section id="ambassadors" class="py-20" style="background:#f7f6f3">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <!-- Header -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-end mb-14">
      <div>
        <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-ardee-red mb-4">
          <span class="w-[18px] h-px bg-ardee-red block"></span>PSA
        </div>
        <h2 class="font-serif font-normal text-ardee-blue text-4xl lg:text-5xl leading-[1.1] tracking-tight">
          <?php echo esc_html( $amb_heading_main ); ?><br><em class="text-ardee-red"><?php echo esc_html( $amb_heading_em ); ?></em>
        </h2>
      </div>
      <p class="text-[15px] font-light leading-[1.95] text-ink-mid max-w-lg">
        <?php echo nl2br( esc_html( $amb_intro ) ); ?>
      </p>
    </div>

    <!-- Info cards (3 fixed) -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-14">

      <div class="bg-white border border-ardee-border rounded-2xl p-7">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(25,66,100,.07)">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-ardee-blue mb-2"><?php echo esc_html( $amb_card1_title ); ?></div>
        <p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $amb_card1_body ) ); ?></p>
      </div>

      <div class="bg-white border border-ardee-border rounded-2xl p-7">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(25,66,100,.07)">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-ardee-blue mb-2"><?php echo esc_html( $amb_card2_title ); ?></div>
        <p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $amb_card2_body ) ); ?></p>
      </div>

      <div class="bg-white border border-ardee-border rounded-2xl p-7">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(25,66,100,.07)">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
            <circle cx="12" cy="12" r="10"/>
            <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
            <line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-ardee-blue mb-2"><?php echo esc_html( $amb_card3_title ); ?></div>
        <p class="text-[13px] leading-[1.7] text-ink-mid"><?php echo nl2br( esc_html( $amb_card3_body ) ); ?></p>
      </div>

    </div>

    <!-- Photo cards (4 fixed slots — captions dynamic, images static) -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">

      <div class="amb-card bg-white border border-ardee-border rounded-2xl overflow-hidden">
        <div class="aspect-[3/4] overflow-hidden bg-ardee-off">
          <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/05/psaone.jpg" alt="<?php echo esc_attr( $amb_photo1_caption ); ?>" class="w-full h-full object-cover object-top">
        </div>
        <div class="p-4">
          <div class="text-[14px] font-semibold text-ardee-blue leading-tight"><?php echo esc_html( $amb_photo1_caption ); ?></div>
        </div>
      </div>

      <div class="amb-card bg-white border border-ardee-border rounded-2xl overflow-hidden">
        <div class="aspect-[3/4] overflow-hidden bg-ardee-off">
          <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/05/psatwo.jpg" alt="<?php echo esc_attr( $amb_photo2_caption ); ?>" class="w-full h-full object-cover object-top">
        </div>
        <div class="p-4">
          <div class="text-[14px] font-semibold text-ardee-blue leading-tight"><?php echo esc_html( $amb_photo2_caption ); ?></div>
        </div>
      </div>

      <div class="amb-card bg-white border border-ardee-border rounded-2xl overflow-hidden">
        <div class="aspect-[3/4] overflow-hidden bg-ardee-off">
          <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/05/IMG_7022.jpg" alt="<?php echo esc_attr( $amb_photo3_caption ); ?>" class="w-full h-full object-cover object-top">
        </div>
        <div class="p-4">
          <div class="text-[14px] font-semibold text-ardee-blue leading-tight"><?php echo esc_html( $amb_photo3_caption ); ?></div>
        </div>
      </div>

      <div class="amb-card bg-white border border-ardee-border rounded-2xl overflow-hidden">
        <div class="aspect-[3/4] overflow-hidden bg-ardee-off">
          <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-08-at-2.05.09-PM.jpeg" alt="<?php echo esc_attr( $amb_photo4_caption ); ?>" class="w-full h-full object-cover object-top">
        </div>
        <div class="p-4">
          <div class="text-[14px] font-semibold text-ardee-blue leading-tight"><?php echo esc_html( $amb_photo4_caption ); ?></div>
        </div>
      </div>

    </div>

    <!-- CTA banner -->
    <div class="mt-10 rounded-[16px] p-7 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5" style="background:#194264">
      <div>
        <div class="text-[11px] font-bold tracking-[2px] uppercase mb-2" style="color:rgba(255,255,255,.4)">Get Involved</div>
        <p class="text-white font-light leading-[1.8]" style="font-size:clamp(14px,2vw,16px)"><?php echo nl2br( esc_html( $amb_cta_body ) ); ?></p>
      </div>
      <a href="<?php echo esc_url( $amb_cta_link ); ?>"
         class="flex-shrink-0 inline-flex items-center gap-2 bg-white text-ardee-blue font-semibold rounded-full px-6 py-3 text-[13px] hover:bg-ardee-off transition-colors no-underline">
        Express Interest
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     ALUMNI
══════════════════════════════════════════════════════════════ -->
<section id="alumni" class="bg-ardee-off py-20">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-ardee-red mb-4">
      <span class="w-[18px] h-px bg-ardee-red block"></span>Alumni Network
    </div>
    <h2 class="font-serif font-normal text-ardee-blue text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-4">
      <?php echo esc_html( $alumni_heading_main ); ?><br><em class="text-ardee-red"><?php echo esc_html( $alumni_heading_em ); ?></em>
    </h2>

    <p class="text-base font-light leading-[1.85] text-ink-mid max-w-2xl">
      <?php echo nl2br( esc_html( $alumni_body1 ) ); ?>
    </p>
    <p class="text-base font-light leading-[1.85] text-ink-mid max-w-2xl mt-3">
      <?php echo nl2br( esc_html( $alumni_body2 ) ); ?>
    </p>

    <!-- Gallery — static images, layout only -->
    <div class="flex gap-3.5 overflow-x-auto pb-2 mt-10" style="-webkit-overflow-scrolling:touch;">
      <div class="min-w-[200px] h-64 flex-shrink-0 rounded-2xl overflow-hidden">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/04/1774404139586.jpeg" alt="Alumni" class="w-full h-full object-cover">
      </div>
      <div class="min-w-[200px] h-64 flex-shrink-0 rounded-2xl overflow-hidden">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/04/1774786745355.jpeg" alt="Alumni" class="w-full h-full object-cover">
      </div>
      <div class="min-w-[200px] h-64 flex-shrink-0 rounded-2xl overflow-hidden">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/04/1774786745177.jpeg" alt="Alumni" class="w-full h-full object-cover">
      </div>
      <div class="min-w-[200px] h-64 flex-shrink-0 rounded-2xl overflow-hidden">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/04/1772856194681.jpeg" alt="Alumni" class="w-full h-full object-cover">
      </div>
      <div class="min-w-[200px] h-64 flex-shrink-0 rounded-2xl overflow-hidden">
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/05/alumnii.jpeg" alt="Alumni" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- Contact note -->
    <div class="bg-ardee-blue/[0.04] border-[1.5px] border-ardee-blue/10 rounded-xl px-7 py-6 mt-7">
      <p class="text-sm leading-[1.85] text-ink-mid">
        Our alumni community is growing and we are building a dedicated alumni platform. If you are an Ardee alumnus and would like to get involved, please
        <strong class="text-ardee-blue">contact us at
          <a href="mailto:<?php echo esc_attr( $alumni_email ); ?>" class="underline hover:no-underline">
            <?php echo esc_html( $alumni_email ); ?>
          </a>
        </strong>.
      </p>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     GET INVOLVED
══════════════════════════════════════════════════════════════ -->
<section id="get-involved" class="py-24 bg-ardee-off">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-ardee-red mb-4">
      <span class="w-[18px] h-px bg-ardee-red block"></span>Get Involved
    </div>
    <h2 class="font-serif font-normal text-ardee-blue text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-4">
      Everyone Has a Way<br><em class="text-ardee-red">to Belong</em>
    </h2>
    <p class="text-[15px] font-light leading-[1.85] text-ink-mid max-w-2xl mb-12">
      Whether you're a parent, a student, or a partner organisation, there's a meaningful way to contribute to the Ardee community.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">

      <!-- Parents -->
      <div class="amb-card bg-white border border-ardee-border rounded-2xl p-7">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(25,66,100,.07)">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-ardee-blue mb-2">Parents</div>
        <p class="text-[13px] leading-[1.7] text-ink-mid">Become a Parent Ambassador or take part in a school initiative — helping shape the community from within.</p>
      </div>

      <!-- Students -->
      <div class="amb-card bg-white border border-ardee-border rounded-2xl p-7">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(25,66,100,.07)">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-ardee-blue mb-2">Students</div>
        <p class="text-[13px] leading-[1.7] text-ink-mid">Lead, volunteer, participate, and share your ideas — student voice is at the heart of every initiative.</p>
      </div>

      <!-- Partners -->
      <div class="amb-card bg-white border border-ardee-border rounded-2xl p-7">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(25,66,100,.07)">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-ardee-blue mb-2">Partners</div>
        <p class="text-[13px] leading-[1.7] text-ink-mid">Collaborate with the school on meaningful initiatives that create impact beyond the classroom.</p>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════
     HOUSES
══════════════════════════════════════════════════════════════ -->
<section id="houses" class="py-24 bg-white">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase mb-4" style="color:#9a2a23">
      <span class="w-[18px] h-px block" style="background:#9a2a23"></span>School Houses
    </div>
    <h2 class="font-serif font-normal text-ardee-blue text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-4">
      <?php echo esc_html( $houses_heading_main ); ?><br><em style="color:#9a2a23"><?php echo esc_html( $houses_heading_em ); ?></em>
    </h2>
    <p class="text-[15px] font-light leading-[1.85] text-ink-mid max-w-2xl mb-12">
      <?php echo nl2br( esc_html( $houses_intro ) ); ?>
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

      <!-- RED HOUSE -->
      <div class="house-card rounded-2xl border overflow-hidden" style="border-color:#9a2a2322;">
        <div class="px-6 pt-8 pb-6 flex flex-col items-center text-center" style="background:#9a2a230a;">
          <img src="https://goatheardeeschools.com/wp-content/uploads/2026/06/red-house-logo.png" alt="Red House" class="w-20 h-20 object-contain mb-4">
          <h3 class="font-sans font-bold text-[16px] tracking-[2px] uppercase" style="color:#9a2a23">Red House</h3>
        </div>
        <div class="px-6 py-5 bg-white">
          <p class="text-[13px] leading-[1.8] text-ink-mid mb-4"><?php echo nl2br( esc_html( $red_desc ) ); ?></p>
          <div class="pt-4 border-t flex flex-col gap-1.5" style="border-color:#9a2a2318;">
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#9a2a23">Captain</span> — <?php echo esc_html( $red_captain ); ?></div>
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#9a2a23">Rep</span> — <?php echo esc_html( $red_rep ); ?></div>
          </div>
        </div>
      </div>

      <!-- YELLOW HOUSE -->
      <div class="house-card rounded-2xl border overflow-hidden" style="border-color:#e7aa2222;">
        <div class="px-6 pt-8 pb-6 flex flex-col items-center text-center" style="background:#e7aa220a;">
          <img src="https://goatheardeeschools.com/wp-content/uploads/2026/06/yellow-house-logo.png" alt="Yellow House" class="w-20 h-20 object-contain mb-4">
          <h3 class="font-sans font-bold text-[16px] tracking-[2px] uppercase" style="color:#e7aa22">Yellow House</h3>
        </div>
        <div class="px-6 py-5 bg-white">
          <p class="text-[13px] leading-[1.8] text-ink-mid mb-4"><?php echo nl2br( esc_html( $yellow_desc ) ); ?></p>
          <div class="pt-4 border-t flex flex-col gap-1.5" style="border-color:#e7aa2218;">
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#e7aa22">Captain</span> — <?php echo esc_html( $yellow_captain ); ?></div>
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#e7aa22">Rep</span> — <?php echo esc_html( $yellow_rep ); ?></div>
          </div>
        </div>
      </div>

      <!-- BLUE HOUSE -->
      <div class="house-card rounded-2xl border overflow-hidden" style="border-color:#466db522;">
        <div class="px-6 pt-8 pb-6 flex flex-col items-center text-center" style="background:#466db50a;">
          <img src="https://goatheardeeschools.com/wp-content/uploads/2026/06/blue-house-logo.png" alt="Blue House" class="w-20 h-20 object-contain mb-4">
          <h3 class="font-sans font-bold text-[16px] tracking-[2px] uppercase" style="color:#466db5">Blue House</h3>
        </div>
        <div class="px-6 py-5 bg-white">
          <p class="text-[13px] leading-[1.8] text-ink-mid mb-4"><?php echo nl2br( esc_html( $blue_desc ) ); ?></p>
          <div class="pt-4 border-t flex flex-col gap-1.5" style="border-color:#466db518;">
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#466db5">Captain</span> — <?php echo esc_html( $blue_captain ); ?></div>
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#466db5">Rep</span> — <?php echo esc_html( $blue_rep ); ?></div>
          </div>
        </div>
      </div>

      <!-- GREEN HOUSE -->
      <div class="house-card rounded-2xl border overflow-hidden" style="border-color:#49988422;">
        <div class="px-6 pt-8 pb-6 flex flex-col items-center text-center" style="background:#4998840a;">
          <img src="https://goatheardeeschools.com/wp-content/uploads/2026/06/green-house-logo.png" alt="Green House" class="w-20 h-20 object-contain mb-4">
          <h3 class="font-sans font-bold text-[16px] tracking-[2px] uppercase" style="color:#499884">Green House</h3>
        </div>
        <div class="px-6 py-5 bg-white">
          <p class="text-[13px] leading-[1.8] text-ink-mid mb-4"><?php echo nl2br( esc_html( $green_desc ) ); ?></p>
          <div class="pt-4 border-t flex flex-col gap-1.5" style="border-color:#49988418;">
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#499884">Captain</span> — <?php echo esc_html( $green_captain ); ?></div>
            <div class="text-[12px] text-ink-mid"><span class="font-semibold" style="color:#499884">Rep</span> — <?php echo esc_html( $green_rep ); ?></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     STUDENT COUNCIL & STUDENT-LED EVENTS
══════════════════════════════════════════════════════════════ -->
<section id="student-council" class="py-24 bg-ardee-off">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

      <!-- Left: text -->
      <div>
        <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase text-ardee-red mb-4">
          <span class="w-[18px] h-px bg-ardee-red block"></span>Student Voice
        </div>
        <h2 class="font-serif font-normal text-ardee-blue text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-5">
          Led by Students,<br><em class="text-ardee-red">Owned by Students</em>
        </h2>
        <p class="text-[15px] font-light leading-[1.95] text-ink-mid max-w-lg mb-4">
          The Ardee Student Council gives students a genuine voice in shaping school life. Elected by their peers, Council members represent student interests, work closely with school leadership, and help set the tone for a culture of responsibility and initiative.
        </p>
        <p class="text-[15px] font-light leading-[1.95] text-ink-mid max-w-lg mb-8">
          Beyond the Council, students regularly conceive, plan, and run their own events, from cultural festivals to fundraisers, gaining first hand experience in leadership, collaboration, and follow through.
        </p>

        <!-- Two mini feature cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

          <div class="amb-card bg-white border border-ardee-border rounded-2xl p-6">
            <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-4" style="background:rgba(25,66,100,.07)">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
                <path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/>
              </svg>
            </div>
            <div class="text-[14px] font-semibold text-ardee-blue mb-1.5">Student Council</div>
            <p class="text-[13px] leading-[1.6] text-ink-mid">Elected representatives who champion student interests and partner with school leadership on key decisions.</p>
          </div>

          <div class="amb-card bg-white border border-ardee-border rounded-2xl p-6">
            <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-4" style="background:rgba(25,66,100,.07)">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#194264" stroke-width="1.5">
                <path d="M8 3L4 7l4 4M16 3l4 4-4 4M12 21V9"/>
              </svg>
            </div>
            <div class="text-[14px] font-semibold text-ardee-blue mb-1.5">Student-Led Events</div>
            <p class="text-[13px] leading-[1.6] text-ink-mid">From festivals to fundraisers, students plan and run initiatives end to end, building real leadership skills.</p>
          </div>

        </div>
      </div>

      <!-- Right: single image -->
      <div>
        <img src="https://nfctheardeeschools.com/wp-content/uploads/2026/08/IMG_5961.JPG.jpeg"
             alt="Student Council"
             class="w-full rounded-[20px] object-cover" style="aspect-ratio:4/5">
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     LEAP
══════════════════════════════════════════════════════════════ -->
<section id="leap" class="py-24" style="background:#0d2a42">
  <div class="max-w-[1160px] mx-auto px-5 sm:px-10">

    <div class="flex items-center gap-2 text-[11px] font-semibold tracking-[3px] uppercase mb-4" style="color:rgba(255,255,255,.45)">
      <span class="w-[18px] h-px block" style="background:#992723"></span>Learning, Exploration, Adventure, Purpose.
    </div>

    <h2 class="font-serif font-normal text-white text-4xl lg:text-5xl leading-[1.1] tracking-tight mb-6 max-w-2xl">
      It's Not a Trip.<br>
      <em class="italic" style="color:rgba(255,255,255,.55)">It's a LEAP.</em>
    </h2>

    <p class="text-[15px] font-light leading-[1.95] max-w-2xl mb-3" style="color:rgba(255,255,255,.7)">
      LEAP is not just a trip. it's a leap. A deliberate step beyond the classroom, beyond campus, beyond the familiar. For the first time, students from our New Delhi and Goa campuses will come together on one coastline for five days built entirely around doing, not watching: adventure that pushes comfort zones, exploration that sparks curiosity, creativity that has room to breathe, community that crosses campuses, and learning that actually sticks because it's lived, not lectured.
    </p>
    <p class="text-[14px] font-medium leading-[1.8] max-w-2xl mb-14" style="color:rgba(255,255,255,.45)">
      This is what makes LEAP different, and why it's a genuine first for The Ardee School.
    </p>

    <!-- Pillar cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

      <div class="amb-card rounded-2xl p-7" style="background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.08);">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(153,39,35,.18)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e88a86" stroke-width="1.5">
            <path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-white mb-2">Ardee Studios</div>
        <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.6)">Students step behind the camera and the mic, moving from consumers of content to creators of it.</p>
      </div>

      <div class="amb-card rounded-2xl p-7" style="background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.08);">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(153,39,35,.18)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e88a86" stroke-width="1.5">
            <path d="M3 3l18 18M10.5 10.5a3 3 0 104.24 4.24"/><path d="M9.88 4.24A9.94 9.94 0 0112 4c7 0 10 8 10 8a17.9 17.9 0 01-3.35 4.6M6.6 6.6C3.7 8.4 2 12 2 12s3 8 10 8a9.9 9.9 0 004.24-.94"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-white mb-2">Off-Campus Learning</div>
        <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.6)">The classroom disappears altogether, replaced by real locations, real people and real situations that no lesson plan can simulate.</p>
      </div>

      <div class="amb-card rounded-2xl p-7" style="background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.08);">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(153,39,35,.18)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e88a86" stroke-width="1.5">
            <path d="M8 3L4 7l4 4M16 3l4 4-4 4M12 21V9"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-white mb-2">Adventure Camps</div>
        <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.6)">Physical challenge that builds teamwork and grit the old-fashioned way — by doing hard things together.</p>
      </div>

      <div class="amb-card rounded-2xl p-7" style="background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.08);">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(153,39,35,.18)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e88a86" stroke-width="1.5">
            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-white mb-2">CSR & Purpose</div>
        <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.6)">Our CSR initiatives ground the trip in purpose, giving students the chance to engage meaningfully with the community around them.</p>
      </div>

      <div class="amb-card rounded-2xl p-7" style="background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.08);">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(153,39,35,.18)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e88a86" stroke-width="1.5">
            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-white mb-2">Coastal Experiences</div>
        <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.6)">The coastline itself becomes a living classroom, turning the shores near Goa into a place of discovery.</p>
      </div>

      <div class="amb-card rounded-2xl p-7" style="background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.08);">
        <div class="w-11 h-11 rounded-[10px] flex items-center justify-center mb-5" style="background:rgba(153,39,35,.18)">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e88a86" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <div class="text-[15px] font-semibold text-white mb-2">Cross-Campus Community</div>
        <p class="text-[13px] leading-[1.7]" style="color:rgba(255,255,255,.6)">For the first time, our Delhi and Goa students stand side by side, building cross-campus friendships that will outlast the trip itself.</p>
      </div>

    </div>

  
  </div>
</section>


<script>
(function(){
  var spy = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(!e.isIntersecting) return;
      document.querySelectorAll('.psn-link').forEach(function(l){ l.classList.remove('active'); });
      var link = document.querySelector('.psn-link[href="#' + e.target.id + '"]');
      if(link){
        link.classList.add('active');
        var nav = link.closest('nav div');
        if(nav){
          var target = link.offsetLeft - (nav.offsetWidth / 2) + (link.offsetWidth / 2);
          nav.scrollTo({ left: target, behavior: 'smooth' });
        }
      }
    });
  }, { rootMargin:'-30% 0px -60% 0px' });
  document.querySelectorAll('section[id]').forEach(function(s){ spy.observe(s); });
})();
</script>

<?php get_footer(); ?>