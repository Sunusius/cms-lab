// blocks/info-firmy/index.js - bez npm, korzysta z globalnych obiektów wp.*
( function ( blocks, element, blockEditor, ServerSideRender ) {
	var el = element.createElement;

	blocks.registerBlockType( 'mf-child/info-firmy', {
		edit: function ( props ) {
			// Podgląd w edytorze generuje PHP (render.php)
			return el(
				'div',
				blockEditor.useBlockProps(),
				el( ServerSideRender, {
					block: 'mf-child/info-firmy',
					attributes: props.attributes,
				} )
			);
		},
		save: function () {
			return null; // blok dynamiczny - HTML powstaje na serwerze
		},
		// TODO (opcjonalnie): przełącznik pokazTelefon w InspectorControls
	} );
} )( window.wp.blocks, window.wp.element, window.wp.blockEditor, window.wp.serverSideRender );
