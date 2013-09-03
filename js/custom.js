/*******************************************/
// CUSTOM JS //
/*******************************************/
jQuery(document).ready(function() {
	jQuery('#portfolio-sorting li:first-child a').addClass('active');

	jQuery("#portfolio-sorting li a").click(function() {
		// Remove current active class
		jQuery("#portfolio-sorting li a.active").removeClass('active');

		//add active class to clicked button 
		jQuery(this).addClass('active');

		// Get the button text 
		var filterValue = 'cat-' + jQuery(this).text().toLowerCase().replace(' ','-');

		// If we clicked we clicked all we show all items
		if (filterValue === "cat-all") {
			jQuery('.portfolio-entry').removeClass('hidden');
		} else {
			// Else we find the portfolio entries that match the clicked button
			// And then add the class of .hidden
			jQuery(".portfolio-entry").each(function(){
				if(!jQuery(this).hasClass(filterValue)) {
					jQuery(this).addClass('hidden');
				}else {
					jQuery(this).removeClass('hidden');
				}
			});
		}

		return false;
	});
});