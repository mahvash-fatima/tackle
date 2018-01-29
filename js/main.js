(function ($) {

	"use strict";

	window.Tackle = {

		init: function () {
			this.timeEntry();
			this.popup();
		},

		timeEntry: function () {
			var button = $('.tackle-time-template-section-2-primary #insert'),
				note = $('#mahvash-note'),
				ajaxUrl = tackleEntry.ajaxurl;

				button.click(function (e) {
					e.preventDefault();
					var ajax = $.ajax({
						url: ajaxUrl,
						type: 'post',
						dataType: 'json',
						data: {
							action: 'tackle_ajax_hook',
							security: tackleEntry.security,
							postTitle: note.val()
						}
					});

					ajax.done(function (response) {
						var entryNote = $('.tackle-time-template-task-note');
						entryNote.text(response.data.post_title);
					});

					ajax.fail(function () {
						console.log('fail');
					});

					ajax.always(function () {
						console.log('AJAX complete');
					});
				});

		},

		popup: function () {
			var newEntryButton = $('.tackle-time-template-section-2-primary'),
				popupContent = $( '.tackle-popup-content' );

			newEntryButton.on( 'click', function ( e ) {

				e.preventDefault();

				popupContent.bPopup();

			} );
		}

	};

	window.Tackle.init();

})(jQuery);
