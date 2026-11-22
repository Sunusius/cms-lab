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

// Zadanie G4: rejestracja własnych stylów bloków (register_block_style)
add_action( 'init', 'mf_register_block_styles' );
function mf_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'         => 'mf-cien',
			'label'        => __( 'Z cieniem', 'mf-child' ),
			'inline_style' => '.wp-block-button.is-style-mf-cien .wp-block-button__link {'
				. ' box-shadow: 0 4px 0 var(--mf-accent, #8C4A27); }',
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'mf-karta',
			'label'        => __( 'Karta', 'mf-child' ),
			'inline_style' => '.wp-block-group.is-style-mf-karta {'
				. ' background-color: #EFE8DD;'
				. ' color: #2C1E16;'
				. ' border: 1px solid var(--mf-accent, #8C4A27);'
				. ' border-radius: 8px;'
				. ' padding: 1.5rem; }',
		)
	);
}

// Zadanie B1-B3: rejestracja dynamicznego bloku Informacja o firmie
add_action( 'init', fn() => register_block_type( get_stylesheet_directory() . '/blocks/info-firmy' ) );
