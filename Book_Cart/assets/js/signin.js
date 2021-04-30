$(document).ready(function(){
	$('input[type=email]').focus();
	$('#myForm').on('submit',function(e){
		e.preventDefault();
		var email = $('#email').val();
		var pass = $('#pass').val();

		var data = {
			email : email,
			pass : pass,
		}
		var url = $('#hidden_text').val();
		var jsonData = JSON.stringify(data);
		$.ajax({
			url:url,
			type:'post',
			data:"data="+jsonData,
			success:function(data){
				if(data == 0){
					$('#alert').removeClass('d-none');
					$('#email').focus();
				}else{
					location.href = data;
				}
			}
		})

	})
})

$(document).ready(function(){
	var cookie = document.cookie.split('=')[1].split(';')[0];
	if(cookie == "dark"){
		$('html,body').css('background-color','#292C35');
		$('h6').addClass('text-white');
	}else{
		$('html,body').css('background-color','white');
		$('h6').removeClass('text-white');
	}
})
