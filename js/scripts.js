var viewportWidth = null;
var viewportHeight = null;
var navbarHeight = null;

$(document).ready(function() {
	$(window).on("resize", function(){
		viewportWidth = $(window).width();
		viewportHeight = $(window).height();
		navbarHeight = $('#navbar').height();
	}).resize();

	$('.js-nav-trigger').click(function(){
		$('body').toggleClass('nav-mobile-open');
	});

	$('.js-dropdown').dropit({
		action: 'mouseenter'
	});

	$('.js-navbar').css('overflow', 'visible');

	$("#contact-submit").click(function() {
		var proceed = true;
		//simple validation at client's end
		//loop through each field and we simply change border color to red for invalid fields       
		$("#contact-form input[required=true], #contact-form textarea[required=true]").each(function(){
			$(this).css('border-color','');
			if(!$.trim($(this).val())){ //if this field is empty
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag              
			}
		});

		if(proceed) //everything looks good! proceed...
		{
			//get input field values data to be sent to server
			post_data = {
				'name' : $('input[name=contact-name]').val(),
				'email': $('input[name=contact-email]').val(),
				'tel'  : $('input[name=contact-tel]').val(),
				'msg'  : $('textarea[name=contact-msg]').val()
			};
			
			//Ajax post data to server
			$.post('contact-form.php', post_data, function(response){
				if(response.type == 'error'){ //load json data from server and output message     
					output = '<div class="error">'+response.text+'</div>';
				}else{
					output = '<div class="success">'+response.text+'</div>';
					//reset values in all input fields
					$("#contact-form input[required=true], #contact-form textarea[required=true]").val('');
					$("#contact-form .contact-form-body").slideUp(); //hide form after success
				}
				$("#contact-form .contact-form-body").hide().html(output).slideDown();
			}, 'json');
		}
	});

	//reset previously set border colors and hide all message on .keyup()
	$("#contact-form input[required=true], #contact-form textarea[required=true]").keyup(function() {
		$(this).css('border-color','');
		$("#result").slideUp();
	});
});


