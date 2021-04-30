function __darkmode(){
	var rows = document.querySelector('tbody').rows;
	document.cookie = "mode=dark";
	$('#dark_light_text').text("Light mode");
	$('#dark_light_text').css('color','white');
	$('#dark_light_img').css('color','white');
	$('.navbar, #first_col, #recomend_books, #php_books , #javascript_books, #python_books').css('color','white');
	$('#sign_btn').css('color','white');
	$('#dark_light_img').removeClass('fa-moon');
	$('#dark_light_img').addClass('fa-sun');
	for(var i=0; i<rows.length - 1; i++){
		$(rows[i]).css('box-shadow','0px 0px 5px rgba(255,255,255,0.10)');
	}
	$('#sidenav_shoppingCart_img').css('color','white');
	$('#cart, #cross_icon, table').css({
		'background':'#292C35',
		'color':'white'
	})
	$('#main').css({
		'background':'#292C35',
		'color':'white'
	})
}
function __lightmode(){
	var rows = document.querySelector('tbody').rows;
	document.cookie = "mode=light";
	$('#dark_light_text').text("Dark mode");
	$('#dark_light_text').css('color','black');
	$('#dark_light_img').css('color','black');
	$('.navbar, #first_col, #recomend_books, #php_books , #javascript_books, #python_books').css('color','black');
	$('#first_col').css('color','#484848');
	$('#sign_btn').css('color','#6361DC');
	$('#sidenav_shoppingCart_img').css('color','black');
	$('#dark_light_img').removeClass('fa-sun');
	$('#dark_light_img').addClass('fa-moon');
	for(var i=0; i<rows.length - 1; i++){
		$(rows[i]).css('box-shadow','0px 0px 5px rgba(0,0,0,0.1)');
	}
	$('#cart, #cross_icon, table').css({
		'background':'white',
		'color':'black'
	})
	$('#main').css({
		'background':'white',
		'color':'black'
	})
	$('#sign_btn').on('mouseover',function(){
		$('#sign_btn').css('color','white');
	})
	$('#sign_btn').on('mouseleave',function(){
		$('#sign_btn').css('color','#6361DC');
	})
}
$(document).ready(function(){
	if(document.cookie == ""){
		document.cookie = "mode=light";
	}else{
		var edge = document.cookie.split('=')[1].split(';')[0];
		if(edge == "light"){
			__lightmode();

		}else{
			__darkmode();
		}
	}
	$('#dark_light_icon').click(function(){
		var text = $('#dark_light_text').text();
		if(text === "Dark mode"){
			__darkmode();
		}else{
			__lightmode();
		}
	})
})

$(document).ready(function(){
	$('#cart_img').click(function(){
		$('#sidenav').css('width','50vw');
		$('#main').css('opacity','50%');
		$('#cart').show();
	});
});
$(document).ready(function(){
	$('#cross_img').click(function(){
		$('#cart').hide();
		$('#sidenav').css('width','0vw');
		$('#main').css('opacity','100%');
	});
});


