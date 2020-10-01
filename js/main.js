jQuery(document).ready(function($) {

	//Intro Title Animation
	$('#intro-title').animate({'margin-top' : '100px','opacity' : '100%'},1000);		

	//Index Page Best Sellers Section Animation
	$('#best-sellers-section').mouseenter(function() {
		$('#first_trip').animate({'opacity': '100%'},500, function() {
		$('#second_trip').animate({'opacity': '100%'},500, function() {
			$('#third_trip').animate({'opacity' : '100%'}, 500);
		});
	});	
	});

	//Reviews Toggle Buttons Blocks
	$("#review1-btn").click(function(event) {
		if($(this).attr('value') == 'Hide Details'){
			$(this).attr('value','Show Details');			
		}else{
			$(this).attr('value','Hide Details');
		}
		$('#review-1-p').slideToggle('slow');
	});

	$("#review2-btn").click(function(event) {
		if($(this).attr('value') == 'Hide Details'){
			$(this).attr('value','Show Details');			
		}else{
			$(this).attr('value','Hide Details');
		}
		$('#review-2-p').slideToggle('slow');
	});

	$("#review3-btn").click(function(event) {
		if($(this).attr('value') == 'Hide Details'){
			$(this).attr('value','Show Details');			
		}else{
			$(this).attr('value','Hide Details');
		}
		$('#review-3-p').slideToggle('slow');
	});

	$("#review4-btn").click(function(event) {
		if($(this).attr('value') == 'Hide Details'){
			$(this).attr('value','Show Details');			
		}else{
			$(this).attr('value','Hide Details');
		}
		$('#review-4-p').slideToggle('slow');
	});

	//Map Function
	$("path").click(function(){
		var selectedCity = $(this).attr("name");
		var cityDescription = $(this).attr("data");
		$("path").css('fill','#7c7c7c')
		$(this).css('fill','#ed1b24');
		$("#tooltiptitle").text(selectedCity);
		$("#tooltipp").text(cityDescription);
		$("#citytooltip").show(1000);
	});
	
});