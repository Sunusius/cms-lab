<?php
add_action( 'wp_enqueue_scripts', 'mf_child_enqueue_styles' );
function mf_child_enqueue_styles() {
	wp_enqueue_style(
		'mf-child-style',
		get_stylesheet_uri(),
		array( 'twenty-twenty-one-style' ),
		wp_get_theme()->get( 'Version' )
	);
}

// Zadanie G3: ładowanie tłumaczeń motywu potomnego (i18n)
add_action( 'after_setup_theme', 'mf_child_setup' );
function mf_child_setup() {
	load_child_theme_textdomain( 'mf-child', get_stylesheet_directory() . '/languages' );
}

// Zadanie G3: filtr skracający długość zajawki (w słowach)
add_filter( 'excerpt_length', 'mf_excerpt_length', 20 );
function mf_excerpt_length( $length ) {
	return 22;
}

// Zadanie G3: filtr dodający notkę pod pojedynczym wpisem
add_filter( 'the_content', 'mf_add_note' );
function mf_add_note( $content ) {
	// Tylko główna treść pojedynczego wpisu, nie widżety ani listy
	if ( is_single() && in_the_loop() && is_main_query() ) {
		$note     = esc_html__( 'Masz pytania o nasze ziarna lub metody parzenia? Napisz do nas: kontakt@ziarnoikawa.pl', 'mf-child' );
		$content .= '<p class="mf-note">' . $note . '</p>';
	}
	return $content; // filtr ZAWSZE zwraca wartość
}
