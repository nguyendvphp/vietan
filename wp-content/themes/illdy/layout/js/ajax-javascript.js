function filterCity() {
    var country_id = jQuery('#country').val();
        var data = {
            'action': 'get_post_city',
    	    'country_id': country_id
        };
        
        jQuery.post(ajaxurl, data, function(response) {
            console.log(response);
        });
}