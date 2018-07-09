/*
* @author      Krzysztof Pecak
* @copyright   2017 Krzysztof Pecak
* @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

$(document).ready(function(){

	if (typeof(angarslider_speed) == 'undefined')
		angarslider_speed = 500;
	if (typeof(angarslider_pause) == 'undefined')
		angarslider_pause = 3000;
	if (typeof(angarslider_loop) == 'undefined')
		angarslider_loop = true;
    if (typeof(angarslider_width) == 'undefined')
        angarslider_width = 1920;


	if (!!$.prototype.bxSlider)
		$('#angarslider').bxSlider({
			useCSS: false,
			maxSlides: 1,
			slideWidth: angarslider_width,
			infiniteLoop: angarslider_loop,
			hideControlOnEnd: true,
			pager: true,
			autoHover: true,
			auto: angarslider_loop,
			speed: parseInt(angarslider_speed),
			pause: angarslider_pause,
			controls: true
		});

    $('.angarslider-description').click(function () {
        window.location.href = $(this).prev('a').prop('href');
    });

	if ($('#htmlcontent_top').length > 0)
		$('#homepage-slider').addClass('col-xs-8');
	else
		$('#homepage-slider').addClass('col-xs-12');
});