<?php
/**
 * Title: Hero z wezwaniem do działania
 * Slug: ziarno-i-kawa/hero-cta
 * Categories: featured, banner
 * Description: Sekcja otwierająca: nagłówek H1, korzyść i przycisk CTA.
 */
$cta = esc_html__( 'Zobacz ofertę', 'ziarno-i-kawa' );
?>
<!-- wp:cover {"url":"https://turbo-carnival-x5776v6qj46j2prw7-8080.app.github.dev/wp-content/uploads/2026/11/adc6a64b-f5d8-4050-8b82-989eb6aedacc-1.webp","id":39,"alt":"Przytulne, rzemieślnicze wnętrze palarni kawy i kawiarni Ziarno\u0026Kawa z drewnianym barem, piecem do wypalania ziaren i workami z surową kawą.","dimRatio":20,"overlayColor":"contrast","isUserOverlayColor":true,"focalPoint":{"x":0.54,"y":0.49},"minHeight":100,"minHeightUnit":"vh","sizeSlug":"full","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"fontSize":"x-large","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-x-large-font-size" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);min-height:100vh"><img class="wp-block-cover__image-background wp-image-39 size-full" alt="Przytulne, rzemieślnicze wnętrze palarni kawy i kawiarni Ziarno&amp;Kawa z drewnianym barem, piecem do wypalania ziaren i workami z surową kawą." src="https://turbo-carnival-x5776v6qj46j2prw7-8080.app.github.dev/wp-content/uploads/2026/11/adc6a64b-f5d8-4050-8b82-989eb6aedacc-1.webp" style="object-position:54% 49%" data-object-fit="cover" data-object-position="54% 49%"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}}} -->
<h1 class="wp-block-heading has-text-align-center"><strong><?php esc_html_e( 'Rzemieślnicza kawa wypalana z pasją', 'ziarno-i-kawa' ); ?></strong></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"><?php esc_html_e( 'Odkryj selekcję świeżo palonych ziaren specialty oraz weź udział w warsztatach baristycznych.', 'ziarno-i-kawa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textAlign":"right"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-right wp-element-button" href="/oferta/"><?php echo $cta; ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->