<?php
/**
 * page-o-nas.php - szablon tylko dla strony o slugu "o-nas".
 * Hierarchia: page-o-nas.php (child) -> page.php (rodzic) -> index.php
 */
get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'mf-o-nas' ); ?>>
		<header class="entry-header alignwide">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?>
				<p class="mf-lead"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<?php endif; ?>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>

			<section class="mf-company-box" aria-label="<?php esc_attr_e( 'Dane palarni i kawiarni Ziarno & Kawa', 'mf-child' ); ?>">
				<h2><?php esc_html_e( 'Odwiedź naszą kawiarnię i palarnię', 'mf-child' ); ?></h2>
				<p>
					<strong><?php esc_html_e( 'Adres:', 'mf-child' ); ?></strong>
					<?php echo esc_html( 'ul. Kawowa 12, 62-030 Luboń' ); ?>
				</p>
				<p>
					<strong><?php esc_html_e( 'Godziny otwarcia:', 'mf-child' ); ?></strong><br>
					<?php esc_html_e( 'Pn - Pt: 7:30 - 19:00', 'mf-child' ); ?><br>
					<?php esc_html_e( 'Sobota: 9:00 - 20:00', 'mf-child' ); ?>
				</p>
				<p>
					<strong><?php esc_html_e( 'Telefon:', 'mf-child' ); ?></strong>
					<a href="<?php echo esc_url( 'tel:+48555666777' ); ?>"><?php echo esc_html( '48-555-666-777' ); ?></a>
				</p>
				<p>
					<strong><?php esc_html_e( 'Email:', 'mf-child' ); ?></strong>
					<a href="<?php echo esc_url( 'mailto:kontakt@ziarnoikawa.pl' ); ?>"><?php echo esc_html( 'kontakt@ziarnoikawa.pl' ); ?></a>
				</p>
			</section>
		</div>
	</article>
	<?php
endwhile;

get_footer();
