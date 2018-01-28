(function ($) {

	"use strict";

	window.Tackle = {

		init: function () {
			this.test();
		},

		test: function () {
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



		}

	};

	window.Tackle.init();

})(jQuery);
