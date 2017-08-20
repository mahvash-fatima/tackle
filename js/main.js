/**
 * This does not require document ready because its loaded at the bottom
 */
(function( $ ) {

	'use strict';

	window.Tackle = {

		init: function() {
			this.addNewTimeEntry();
		},

		addNewTimeEntry: function() {
			var modal = $( '.tackle-add-new-time-entry-modal-box' ),
				button = $( '#tackle-add-new-time-entry-button' ),
				close = $( '#tackle-add-new-time-entry-close-button' ),
				styles = {
					top: ( ( window.innerHeight / 2 ) - ( modal.height() / 2 ) ) + 'px',
					left: ( ( window.innerWidth / 2 ) - ( modal.width() / 2 ) ) + 'px'
				};

			button.on( 'click', function() {
				modal.css( 'display', 'block' );
			} );

			modal.css( styles );

			close.on( 'click', function() {
				modal.css( 'display', 'none' );
			} );

		}

	};

	window.Tackle.init();

})( jQuery );
