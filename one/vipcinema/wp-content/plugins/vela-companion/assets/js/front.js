jQuery(document).ready(function($) {
	
	// contact form
	function IsEmail(email) {
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!regex.test(email)) {
			return false;
		}else{
			return true;
		}
		}
	
	jQuery(".cactus-contact-form #submit").click(function(){
		
		var obj = jQuery(this).parents(".cactus-contact-form");
		obj.find(".noticefailed").text("");
	
		var name    = obj.find("input#name").val();
		var email   = obj.find("input#email").val();
		var subject = obj.find("input#subject").val();
		var message = obj.find("textarea#message").val();
	
		if(name ===""){
			obj.find(".noticefailed").text(vela_params.i18n.i2);
			return false;
		}
		
		if( !IsEmail( email ) ) {
			obj.find(".noticefailed").text(vela_params.i18n.i3);
			return false;
		}
		
		if(subject ===""){
			obj.find(".noticefailed").text(vela_params.i18n.i4);
			return false;
		}
		
		if(message === ""){
			obj.find(".noticefailed").text(vela_params.i18n.i5);
			return false;
		}
		obj.find(".noticefailed").html("");
		obj.find(".noticefailed").append("<img alt='loading' class='loading' src='"+vela_params.plugins_url+"/assets/images/AjaxLoader.gif' />");
	
		jQuery.ajax({
			type:"POST",
			dataType:"json",
			url:vela_params.ajaxurl,
			data:{'name':name,'email':email,'message':message,'subject':subject,'action':'cactus_contact'},
			success:function(data){
				if(data.error==0){
					obj.find(".noticefailed").addClass("noticesuccess").removeClass("noticefailed");
					obj.find(".noticesuccess").html(data.msg);
				}else{
					obj.find(".noticefailed").html(data.msg);	
				}
			jQuery('.loading').remove();obj[0].reset();
				return false;
			},error:function(){
				obj.find(".noticefailed").html("Error.");
				obj.find('.loading').remove();
				return false;
				}
			});
			
			return false;
		});
		/* woocommerce */

	$('#grid').click(function() {
		$(this).addClass('active');
		$('#list').removeClass('active');
		$.cookie('gridcookie','grid', { path: '/' });
		$('.archive .post-wrap ul.products').fadeOut(300, function() {
			$(this).addClass('grid').removeClass('list').fadeIn(300);
		});
		return false;
	});

	$('#list').click(function() {
		$(this).addClass('active');
		$('#grid').removeClass('active');
		$.cookie('gridcookie','list', { path: '/' });
		$('.archive .post-wrap ul.products').fadeOut(300, function() {
			$(this).removeClass('grid').addClass('list').fadeIn(300);
		});
		return false;
	});

	if ($.cookie('gridcookie')) {
        $('.archive .post-wrap ul.products, #gridlist-toggle').addClass(jQuery.cookie('gridcookie'));
    }

    if ($.cookie('gridcookie') == 'grid') {
        $('.gridlist-toggle #grid').addClass('active');
        $('.gridlist-toggle #list').removeClass('active');
    }

    if ($.cookie('gridcookie') == 'list') {
        $('.gridlist-toggle #list').addClass('active');
        $('.gridlist-toggle #grid').removeClass('active');
    }

	$('#gridlist-toggle a').click(function(event) {
	    event.preventDefault();
	});
	
	$(".cactus-e-testimonial-carousel").owlCarousel({
                items: 1
            });
	$(".owl-carousel-1").owlCarousel({
                items: 6
            })
	

});