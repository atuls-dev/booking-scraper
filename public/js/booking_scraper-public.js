(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 
	$( function() {
        $( "#booking_date" ).datepicker();
    });
    
    /*// On window load booking availability
    $( window ).load(function() {
        
        var formId = $('form').attr('id'); 
        var aff_id = $('input[name=aff_id]').val();
    	var date = $('input[name=booking_date]').val();
    	var nights = $('select[name=nights]').val();
    	var adults = 2;
    	var callFunc = '';

        if ( formId == 'hedonism' ) {
            
    		adults = $('select[name=adults]').val();
		    callFunc = 'getHedonism';
		    
        }else if ( formId == 'desire-riviera' ) {
            
    		adults = $('input[name=adults]').val();
    	    callFunc = 'getDesireRiviera';
          
        }else if ( formId == 'desire-pearl' ) {
            adults = $('input[name=adults]').val();
    	    callFunc = 'getDesirePearl';
        }
        
        jQuery.ajax({
        		url: ajax.url,
        		type: "post",
        		data:{ action: callFunc, aff_id: aff_id, date: date, nights: nights, adults: adults },
        		success: function(response){
                    console.log( response ); 
                    jQuery('#available-content').html( response );
        		
                },
                error: function( error ){
                	console.log(error);
                }
        });
	  
	});*/
	
	// On Button Click Booking Availability For Reservations
    $(document).on('click', '#btn-submit-reservations', function () {
       
        var self = $(this);
        var formId = $(self).attr('form-id'); 
		var aff_id = $('input[name=aff_id]').val();
		var date = $('input[name=booking_date]').val();
		var nights = $('select[name=nights]').val();
		var adults = 2;
	    var data = false;
	    if ( formId == 'hedonism' ) {
            
    		adults = $('select[name=adults]').val();
		    data = true;
		    
        }else if ( formId == 'desire-riviera' ) {
            
    		adults = $('input[name=adults]').val();
    		data = true;
          
        }else if ( formId == 'desire-pearl' ) {
            
            adults = $('input[name=adults]').val();
            data = true;
            
        }else if ( formId == 'temptation' ) {
            
            adults = $('select[name=adults]').val();
            data = true;
            
        }else if ( formId == 'hidden-beach' ) {
            
            adults = $('input[name=adults]').val();
            data = true;
            
        }

	    if( data === true ) { 
		    // spinner code appended in submit button
	 		jQuery(self).prop('disabled', true);
	 		var GET_YOUR_BASE_URL = ajax.pluginsUrl;
	 		var loaderContainer = $( '<span/>', {
	            'class': 'loader-image-container'
	        }).insertAfter( self );
	        var loader = $( '<img/>', {
	            src: GET_YOUR_BASE_URL + 'images/loading.gif',
	            'class': 'loader-image'
	        }).appendTo( loaderContainer );
		    // spinner code appended in submit button
	           
            jQuery.ajax({
    				url: ajax.url, 
    				type: "post",
    				data:{ action: 'getBooking', formId: formId, aff_id: aff_id, date: date, nights: nights, adults: adults },
    				success: function(response){
    		            //console.log( response ); 
    		            jQuery('#available-content').html( response );
    		            loaderContainer.remove();
 		            	jQuery(self).prop('disabled', false);
    		        },
    		        error: function( error ){
    		        	//console.log(error);
    		        	loaderContainer.remove();
 		            	jQuery(self).prop('disabled', false);
    		        } 
    	    });
	    }
	 
	});

})( jQuery );
