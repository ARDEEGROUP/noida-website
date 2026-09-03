=== Ardee Montessori House ===
A custom WordPress theme built from the approved static design for The Ardee
Montessori House campus sites (Noida, and reusable for Munirka / Gurugram).

CONTENTS
--------
style.css              Theme header + the full design-system stylesheet
                        (colours, type, header/drawer nav, hero, cards,
                        timelines, FAQ accordion, footer, etc.)
functions.php           Theme setup, asset loading, the ardee_link() and
                        ardee_placeholder() helpers, the fallback enquiry
                        form + handler, footer widget area
inc/class-ardee-nav-walker.php   Renders a WP menu as the pill nav
inc/customizer.php      Appearance -> Customize -> "Campus Details"
                        (address / phone / email used across the theme)
header.php / footer.php Site chrome: sticky pill header, mobile drawer,
                        footer columns
assets/js/site.js       Sticky header, drawer, submenus, scroll fade-ins
                        (vanilla JS, no jQuery dependency)

front-page.php                          Home
template-philosophy.php                 Our Philosophy
template-ardeeology.php                 Ardeeology
template-environments.php               Environments and Programmes
template-day.php                        A Day at the House
template-admissions.php                 Admissions
template-people.php                     Our People
template-parents.php                    Parent Partnership
template-safety.php                     Safety and Wellbeing
template-contact.php                    Contact and Visit

index.php, page.php, single.php, 404.php   Generic fallbacks so any
                        content that ISN'T one of the pages above
                        (blog posts, an ad-hoc page) still matches
                        the design.

STYLING APPROACH — CSS + Tailwind
----------------------------------
style.css carries the full, already-responsive design system exactly as
approved (design tokens, grid, cards, hero, nav, footer, etc). Tailwind CSS
is also loaded (functions.php, via the Tailwind CDN build with Preflight
disabled so it can't fight the base styles) as a utility layer: use
Tailwind classes freely for any NEW markup, one-off tweaks, or custom page
builder blocks, alongside the existing component classes. For production
you can swap the CDN script for a compiled Tailwind build (run `npx
tailwindcss -i input.css -o assets/css/tailwind.css --minify` against
this theme's PHP files) — see functions.php, function ardee_assets().

IMAGE PLACEHOLDERS
-------------------
Every photo across all 10 templates is a placeholder card — a soft blue
grid with a caption that reads like a photographer's shot brief (subject,
framing, light, aspect ratio). This is on purpose, matching the original
approved design, so a client/photographer knows exactly what to shoot for
each slot. They render via the ardee_placeholder() helper in functions.php:

    <?php ardee_placeholder( 'std', 'Image placeholder · 1600 by 1200, landscape', 'Shot brief text...' ); ?>

Ratios available: std (4:3), portrait (4:5), square, wide (16:9),
pano (21:9), tall (3:4), or '' for an unconstrained gallery tile.

To swap in a real photo once you have one, pass a 4th argument — either a
WordPress attachment ID or an image URL:

    <?php ardee_placeholder( 'std', 'Mentor and child', '', get_field('photo') ); ?>
    <?php ardee_placeholder( 'std', 'Mentor and child', '', 'https://example.com/photo.jpg' ); ?>

SETUP
-----
1. Zip the "ardee-montessori" folder (or upload as-is via FTP/SFTP to
   wp-content/themes/) and activate it under Appearance -> Themes.

2. Create one WordPress Page for each section and assign its template
   under Page Attributes -> Template:

     Page title                    Suggested slug     Template
     -----------------------------------------------------------------------
     Home                          home               (none needed — see step 3)
     Our Philosophy                philosophy          Ardee: Our Philosophy
     Ardeeology                    ardeeology          Ardee: Ardeeology
     Environments and Programmes   environments        Ardee: Environments and Programmes
     A Day at the House            day                 Ardee: A Day at the House
     Admissions                    admissions          Ardee: Admissions
     Our People                    people              Ardee: Our People
     Parent Partnership            parents             Ardee: Parent Partnership
     Safety and Wellbeing          safety              Ardee: Safety and Wellbeing
     Contact and Visit             contact             Ardee: Contact and Visit

   The slugs matter: internal links throughout the theme use the
   ardee_link('slug') helper, which looks up a Page by that exact slug
   (e.g. ardee_link('philosophy') finds the Page at /philosophy/). If you
   use different slugs, the helper still returns a working link as long
   as you update the calls, or you can rename the Pages to match.

3. Under Settings -> Reading, set "Your homepage displays" to "A static
   page" is NOT required — front-page.php is used automatically by
   WordPress for the site root regardless, so nothing else to do there.
   (If you'd rather manage Home as an editable Page too, create a Page
   called Home, assign it as the static front page, and copy
   front-page.php's content into a "page-home.php" template — the
   front-page.php template you already have will keep working either way
   since WP prioritises front-page.php for the site root.)

4. Under Appearance -> Menus, create a menu, add the same 10 destinations
   (About > Our Philosophy / Ardeeology / Our People as a sub-menu,
   Environments, A Day at the House, Admissions > ... as a sub-menu,
   Parents > ... as a sub-menu, Contact and Visit) and assign it to the
   "Primary Menu" location. If you skip this, header.php falls back to a
   hard-coded menu that links to the same 10 pages by slug, so the site
   works even before you touch Appearance -> Menus.

5. Under Appearance -> Customize -> Campus Details, set the real address,
   phone and admissions email (used in the header/footer/contact page).

6. Contact form: the Contact page ships with a working fallback form
   (see functions.php, ardee_form_shortcode()) that emails the site
   admin via wp_mail(). For production, install Contact Form 7, WPForms
   or Gravity Forms and swap the [ardee_form] shortcode in
   template-contact.php for that plugin's form shortcode — the visual
   styling (.form, .form label, .form input, etc in style.css) is
   already written generically enough to apply to most form plugins'
   default markup with a small CSS class tweak if needed.

7. Photography: replace ardee_placeholder() calls with real photos once
   supplied (see "IMAGE PLACEHOLDERS" above), or leave them in place —
   they're designed to look intentional, not broken, if photography is
   still pending.

REUSING FOR MUNIRKA / GURUGRAM
-------------------------------
This theme was written for the Noida campus content specifically (ages,
hours, campus-card labels, etc.) but every hard-coded fact lives in the
template files as plain HTML, so duplicating the theme folder, renaming it,
and doing a find/replace for "Noida" / campus-specific figures is enough
to stand up the same design for another campus.
