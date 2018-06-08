var $ = jQuery;

$(document).ready(function($){
	$('#job-apply').validate({
		rules: {
		    subscribe: {
		      required: true
		    },
		    email: {
		        required: true,
		        email: true
		    }
		}
	});
});