
$(document).ready(function(){
	var count = 0;
	$('.dialogue-text').each(function() {
		$(this).addClass('index-'+count+'');
		count++;
	});
	$('.cloud').each(function() {
		$(this).addClass('index-'+count+'');
		count++;
	});
	
	$(window).scroll(function() {

		var scrollNum = parseInt($(window).scrollTop()),
			startingTop = -500;

		if (scrollNum <= 3999) {
			$('#sun').html('<img class="sun" src="/wp-content/images/parallax/sun.png" />')
		} else if (scrollNum >= 4000) {
			$('#sun').html('<img class="sun sun-fade" src="/wp-content/images/parallax/sun-pink-radial.png" />')
		}

		var currentOpac = parseInt($('.night-hills').css('opacity'));
		if (scrollNum > 4500 && scrollNum < 15000 && scrollNum%2 == 0) { 
			var newOpac = 0.0 + ((scrollNum - 4500)/10000);
			$('.night-hills').css({'opacity':newOpac});

		}

		if (scrollNum > 5500 && scrollNum < 25000) {
			var moonTop = -1000 + + ((scrollNum + 1)/25);
			$('#moon').css({'top':moonTop});
		}

		if (scrollNum%2 == 0) {
			var newTop = startingTop + ((scrollNum + 1)/15);	
			var nightTop = -2000 + ((scrollNum + 1)/10);
			$('#sun').css({'top':newTop});
			$('#night-bg').css({'top':nightTop});
		}

		if (scrollNum >= 0 && scrollNum < 900) {
			$('.dialogue-bubble').fadeOut();
		}
		if (scrollNum >= 900 && scrollNum < 16400) {
			$('#young-dialogue').fadeIn('slow');
		}
		if (scrollNum < 3000) {
			$('#old-dialogue').fadeOut();
		}
		if (scrollNum >= 1000 && scrollNum < 3200) {
			$('.index-1').fadeOut();
			$('.index-4').fadeOut();
			$('.index-0').fadeIn();
			$('.index-0').css({'opacity':1.0});
		} 
		if (scrollNum >= 3200 && scrollNum < 18600) {
			$('#old-dialogue').fadeIn();
		}
		if (scrollNum >= 3200 && scrollNum < 5400) {
			$('.index-5').fadeOut();
			$('.index-4').fadeIn();
			$('.index-4').css({'opacity':1.0});
			$('.index-0').show();
			$('.index-0').css({'opacity':0.4});
			$('.index-1').fadeOut();
		} 
		if (scrollNum >= 5400 && scrollNum < 7600) {
			$('.index-0').fadeOut();
			$('.index-2').fadeOut();
			$('.index-1').fadeIn();
			$('.index-1').css({'opacity':1.0});
			$('.index-4').show();
			$('.index-4').css({'opacity':0.4});
			$('.index-5').fadeOut();
		} 
		if (scrollNum >= 7601 && scrollNum < 9800) {
			$('.index-6').fadeOut();
			$('.index-4').fadeOut();
			$('.index-5').fadeIn();
			$('.index-5').css({'opacity':1.0});
			$('.index-1').show();
			$('.index-1').css({'opacity':0.4});
			$('.index-2').fadeOut();
		} 
		if (scrollNum >= 9800 && scrollNum < 12000) {
			$('.index-3').fadeOut();
			$('.index-1').fadeOut();
			$('.index-2').fadeIn();
			$('.index-2').css({'opacity':1.0});
			$('.index-5').show();
			$('.index-5').css({'opacity':0.4});
			$('.index-6').fadeOut();
		} 
		if (scrollNum >= 12000 && scrollNum < 14200) {
			$('.index-5').fadeOut();
			$('.index-7').fadeOut();
			$('.index-6').fadeIn();
			$('.index-6').css({'opacity':1.0});
			$('.index-2').show();
			$('.index-2').css({'opacity':0.4});
			$('.index-3').fadeOut();
		} 
		if (scrollNum >= 14200 && scrollNum < 16400) {
			$('.index-2').fadeOut();
			$('.index-3').fadeIn();
			$('.index-3').css({'opacity':1.0});
			$('.index-6').show();
			$('.index-6').css({'opacity':0.4});
			$('.index-7').fadeOut();
		} 
		if (scrollNum >= 16400 && scrollNum < 18600) {
			$('.index-6').fadeOut();
			$('.index-7').fadeIn();
			$('.index-7').css({'opacity':1.0});
			$('.index-3').fadeOut();
			$('#young-dialogue').fadeOut('slow');
		} 
		if (scrollNum >= 18600) {
			$('#old-dialogue').fadeOut('slow');
		}

	});

})
