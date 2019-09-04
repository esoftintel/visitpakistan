jQuery(document).ready(function($){
	var contentSections = jQuery('.cd-section'),
		navigationItems = jQuery('#cd-vertical-nav a');

	updateNavigation();
	jQuery(window).on('scroll', function(){
		updateNavigation();
	});

	//smooth scroll to the section
	navigationItems.on('click', function(event){
        event.preventDefault();
        smoothScroll(jQuery(this.hash));
    });
    //smooth scroll to second section
    jQuery('.cd-scroll-down').on('click', function(event){
        event.preventDefault();
        smoothScroll(jQuery(this.hash));
    });

    //open-close navigation on touch devices
    jQuery('.touch .cd-nav-trigger').on('click', function(){
    	jQuery('.touch #cd-vertical-nav').toggleClass('open');
  
    });
    //close navigation on touch devices when selectin an elemnt from the list
    jQuery('.touch #cd-vertical-nav a').on('click', function(){
    	jQuery('.touch #cd-vertical-nav').removeClass('open');
    });

	function updateNavigation() {
		contentSections.each(function(){
			$this = jQuery(this);
			var activeSection = jQuery('#cd-vertical-nav a[href="#'+$this.attr('id')+'"]').data('number') - 1;
			if ( ( $this.offset().top - jQuery(window).height()/2 < jQuery(window).scrollTop() ) && ( $this.offset().top + $this.height() - jQuery(window).height()/2 > jQuery(window).scrollTop() ) ) {
				navigationItems.eq(activeSection).addClass('is-selected');
			}else {
				navigationItems.eq(activeSection).removeClass('is-selected');
			}
		});
	}

	function smoothScroll(target) {
        jQuery('body,html').animate(
        	{'scrollTop':target.offset().top},
        	600
        );
	}
});