if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

//Start behaviors
(function($) 
{
Drupal.behaviors.highcontrast = 
	{
     attach: function(context, settings) 
	 {

			$.fn.clickToggle = function(func1, func2) 
			{
				var funcs = [func1, func2];
				this.data('toggleclicked', 0);
				this.click(function() {
					var data = $(this).data();
					var tc = data.toggleclicked;
					$.proxy(funcs[tc], this)();
					data.toggleclicked = (tc + 1) % 2;
				});
				return this;
			};

			// Cookie Functions - Start
			$(document).ready(function () {				
				
				$('#contrast').click(function()
				{
					if ($('body').hasClass('highcontrast')) 
					{
					  $('body').removeClass('highcontrast');
					  setCookie("ondetemforro_highcontrast", 0);
					}
					else 
					{
					  $('body').addClass('highcontrast');
					  setCookie("ondetemforro_highcontrast", 1);
					}
			
					return false;
				});
			})	
	 }
    }	
})(jQuery);			 

// Cookie Functions
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}