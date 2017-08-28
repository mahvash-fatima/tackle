/**
 * This does not require document ready because its loaded at the bottom
 */
(function( $ ) {

	'use strict';

	window.Tackle = {

		init: function() {
			this.addNewTimeEntry();
			this.addNewTimeEntryLi();
			this.homeSlider();
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

		},

		addNewTimeEntryLi: function() {
			var timeEntryList = $( '.tackle-time-template-subsection-2b-subsection-ii' ),
				timeEntryContainer = $( '.tackle-time-template-subsection-2b-secondary' ),
				startTimerButton = $( '#tackle-start-timer' );
			startTimerButton.on( 'click', function() {
				timeEntryList.clone().appendTo( timeEntryContainer );
			} );
		},

		homeSlider: function() {
			$( '.tackle-home-template-slider' ).slick({
				dots: false,
				infinite: true,
				speed: 300,
				adaptiveHeight: true,
				arrows: false,
				slidesToShow: 1,
				autoplay: true,
				autoplaySpeed: 1000
			});
		}

	};

	window.Tackle.init();

})( jQuery );
