(function($) {
	$.fn.jQuerySimpleCounter = function( options ) {
	    let settings = $.extend({
	        start:  0,
	        end:    100,
	        easing: 'swing',
	        duration: 400,
	        complete: ''
	    }, options );

	    const thisElement = $(this);

	    $({count: settings.start}).animate({count: settings.end}, {
			duration: settings.duration,
			easing: settings.easing,
			step: function() {
				let mathCount = Math.ceil(this.count);
				thisElement.text(mathCount);
			},
			complete: settings.complete
		});
	};

}(jQuery));

$('#followers').jQuerySimpleCounter({
    start:  0,
    end:    16,
    duration: 1000
});

$('#interact').jQuerySimpleCounter({
    start:  0,
    end:    11,
    duration: 1000
});

$('#reach').jQuerySimpleCounter({
    start:  0,
    end:    22,
    duration: 1000
});