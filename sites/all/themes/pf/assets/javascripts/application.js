(function($, window, document){
	$(function(){
		if (Modernizr.backgroundsize) {
			$("html").css("background-image", "url(/drupal/sites/all/themes/pf/assets/images/23.jpg)");
		} else {
			$("body").append("<img src='/drupal/sites/all/themes/pf/assets/images/23.jpg' id='fullBg' />");
			var img = $("#fullBg");
			var resizeBg = function(img){
				var imgWidth = img.width();
				var imgHeight = img.height();
				var over = imgWidth / imgHeight;
				var under = imgHeight / imgWidth;
				var body_width = $(window).width(); 
				var body_height = $(window).height();
				if (body_width / body_height >= over) {
					var cssProps = {
						width: body_width + 'px',
						height: Math.ceil(under * body_width) + 'px',
						left: '0px',
						top: Math.abs((under * body_width) - body_height) / -2 + 'px'
					};
				} else {
					var cssProps = ({
						width: Math.ceil(over * body_height) + 'px',
						height: body_height + 'px',
						top: '0px',
						left: Math.abs((over * body_height) - body_width) / -2 + 'px'
					});
				}
				img.css(cssProps);
			};
			resizeBg(img);
			$(window).resize(function(){
				resizeBg(img);
			});
		}
	});
})(jQuery, this, this.document);