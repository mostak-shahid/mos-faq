jQuery(document).ready(function($) {
	$('.mos-faq-accordion .mos-faq-title a, .mos-faq-accordion .mos-faq-title .mos-faq-icon-con').click(function(event) {
	    event.preventDefault();
	    $(this).closest(".mos-faq-heading").siblings('.mos-faq-collapse').slideToggle("slow");
	    $(this).closest(".mos-faq-unit").toggleClass("opened");
	    $(this).closest(".mos-faq-unit").siblings().find('.mos-faq-collapse').slideUp("slow");
	    $(this).closest(".mos-faq-unit").siblings().removeClass("opened");
	});
	$('.mos-faq-collapsible .mos-faq-title a, .mos-faq-collapsible .mos-faq-title .mos-faq-icon-con').click(function(event) {
	    event.preventDefault();
	    $(this).closest(".mos-faq-heading").siblings('.mos-faq-collapse').slideToggle("slow");
	    $(this).closest(".mos-faq-unit").toggleClass("opened");
	});
	col_reset ();
	function col_reset () {		
		if ($(window).width() < 992) {
			$('[id^="mos-faq-"] .mos-faq-unit').unwrap();
			$('[id^="mos-faq-"]').wrapInner('<div class="mos-faq-col-1"></div>');
		}
	}
});