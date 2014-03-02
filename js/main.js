$(document).ready(function(){
	
	//Blueprint - Full Width Image Slider
	//https://github.com/codrops/Blueprint-FullWidthImageSlider
	$( '#cbp-fwslider' ).cbpFWSlider();
	
	//Custom cbp-fwslider controller that extends auto scroll functionality to the plugin.
	//By Matt Hopson
	var sliderLength = $("#cbp-fwslider ul li").length;
	var sliderCurrent;
	var sliderNext;
	var autoSlider = setInterval(function(){
		sliderCurrent = $(".cbp-fwdots span.cbp-fwcurrent").index() + 1;
		if(sliderCurrent == sliderLength){
			sliderNext = 1;
		}else{
			sliderNext  = sliderCurrent + 1;
		}
		//No API for plugin, so controlling auto scroll with jQuery click() method (not my favorite, but best case).
		$(".cbp-fwdots span:nth-child(" + sliderNext + ")").addClass("autoSlider").click().removeClass("autoSlider");
	},3000);
	//Test if a user clicked indicator, prev, or next button and  kill the autoslide.
	$(".cbp-fwdots span, .cbp-fwnext, .cbp-fwprev").click(function(){
		if(!$(".cbp-fwdots span.autoSlider").length){
			clearInterval(autoSlider);
		}
	});
});