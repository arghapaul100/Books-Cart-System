$(document).ready(function(){
	$('#name').focus();
	$('#myForm').on('submit',function(e){
		e.preventDefault();
		var name = $('#name').val();
		var email = $('#email').val();
		var pass = $('#pass').val();

		var url = $('#hidden_text').val();
		
		var data = {
			name : name,
			email : email,
			pass : pass
		}
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
	var cookie = document.cookie.split('=')[1].split(';')[0];
	if(cookie == "dark"){
		$('html,body').css('background-color','#292C35');
		$('h6').addClass('text-white');
	}else{
		$('html,body').css('background-color','white');
		$('h6').removeClass('text-white');
	}
})