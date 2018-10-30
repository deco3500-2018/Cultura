/* If you're feeling fancy you can add interactivity 
    to your site with Javascript */

// prints "hi" in the browser's dev tools console
console.log('hi');


//init dropdown
$(document).ready(function(){

/* message_template function will handle the error and warning message at run time of ajax*/
function message_template(message,messageClass){
	var html='';
	  html+= '<div class="ajax_load_message">';
      html+= '<div class="message_box">';
      html+= '<span class="'+messageClass+'">';
      html+= message;
      html+= '</span>';	  
      html+= '</div>';	  
      html+= '</div>';	 

   return html; 	  
}

/* Now This will handle form submit on click button */
 $('body').on('click', '.submit_filter',function(){
    var formData= $('#advance_filter').serialize();
	 $.ajax({
		   type: 'POST',
		   url:'get_result.php',
		   data:formData,
		   dataType: "json",
		   beforeSend:function(){
			   var template = message_template('Please wait..','alert alert-success');
			   $('#practicesData').html(template);
		   },
		   success:function(res){
			   console.log(res);
			   if(res.status==200){
				   $('#practicesData').html(res.template);
			   }
			   else if(res.status==300){
				   var template = message_template(res.Message,'alert alert-waring'); 
				   $('#practicesData').html(template);
			   }else{
				    var template = message_template(res.Message,'alert alert-danger'); 
				   $('#practicesData').html(res.Message); 
			   }
		   },
	 });
   return false;
 });

  $('.ui.dropdown')
    .dropdown()
  ;

  // $('.ui.button')
  //   .button()
  // ;

  $('#select')
  .dropdown()
;

});

// Freelancer Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a:not(.dropdown-toggle)').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Floating label headings for the contact form
    $(function() {
        $("body").on("input propertychange", ".floating-label-form-group", function(e) {
            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
        }).on("focus", ".floating-label-form-group", function() {
            $(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function() {
            $(this).removeClass("floating-label-form-group-with-focus");
        });
    });

})(jQuery); // End of use strict
