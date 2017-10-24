$(function () {
	$('.simple-timer').simpletimer({
	  hour: 11,
	  hourDom: '.timer-hour',
	  minute: 0,
	  minuteDom: '.timer-minute',
	  second: 00,
	  secondDom: '.timer-second'
	});
});

$( document ).ready(function(){

	var slider_margin = $("form input[name='slider_margin']").val();
	$("#mytimer_container .progress-striped").css('margin-top', slider_margin + 'px');

	var above_text = $("form #above_text").val();
	var pos1 = parseInt(above_text.indexOf("[")) + 1;
	var pos2 = above_text.indexOf("]");
	var prefix = above_text.slice(0, pos1 - 1); 
	var number = above_text.slice(pos1, pos2);
	var suffix = above_text.slice(parseInt(pos2) + 1, above_text.length); 
	$('#text_above_timer').html(prefix + '<span id="scarcitynumber" style="background-color: rgb(255, 255, 255); color: rgb(169, 68, 66);	border-radius: 5px;">' + number +'</span>' + suffix);

	var font_color = $("form #picker1").val();
	$('#text_above_timer').css('color', font_color);

	var text_font = $('#pre_font').val();
	$('select[name="text_font"]').find('option[value="' + text_font + '"]').attr('selected', 'true');
	$('#text_above_timer').css('font-family', text_font);


	$("form input[name='slider_margin']").change( function() {
		var slider_margin = $(this).val();
		$("#mytimer_container .progress-striped").css('margin-top', slider_margin + 'px');
	});

	$("form #above_text").on('input', function() {
		var above_text = $(this).val();

		console.log(above_text);

		var pos1 = parseInt(above_text.indexOf("[")) + 1;
		var pos2 = above_text.indexOf("]");
		var prefix = above_text;
		var number = '';
		var suffix = '';
		if( pos1 > 1 && pos2 >1){
			var prefix = above_text.slice(0, pos1 - 1); 
			var number = above_text.slice(pos1, pos2);
			var suffix = above_text.slice(parseInt(pos2) + 1, above_text.length); 
		}
		$('#text_above_timer').html(prefix + '<span id="scarcitynumber" style="background-color: rgb(255, 255, 255); color: rgb(169, 68, 66);	border-radius: 5px;">' + number +'</span>' + suffix);
	});

	$(".colorpicker").click(function(){
		setTimeout(300, my_color());
	});

	function my_color(){
		var font_color = $("form #picker1").val();
		console.log(font_color);
		$('#text_above_timer').css('color', font_color);		
	}

	$('select[name="text_font"]').change(function() 
	{ 
		$('#text_above_timer').css('font-family', $(this).val());
	});	

	$('.btn-primary').click(function() {
		console.log($('#picker1').val());
	});
});