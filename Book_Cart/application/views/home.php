<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/style.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/HomeTable.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/spinner.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/center-simple.css">
    
</head>
<body>

<section class="" id="main" style="transition: all .2s;">
	<nav class="navbar navbar-expand-sm navbar-dark">
			<a href="" class="navbar-brand ml-5">
				<div>
					<img src="<?php echo base_url();?>assets/images/brand.svg" width="150px">
				</div>
			</a>
		  	<div class="collapse navbar-collapse" id="myNav">
		  		<div class="ml-auto mr-5 d-flex">
		  			<div class="mr-4 d-flex justify-content-center align-items-center">
		  				<h6 id="user_name" class="" onclick=""><?php if(isset($user_name))
		  				echo "Hello, ".explode(" ", $user_name)[0];?></h6>
		  			</div>
		  			<div class="d-flex justify-content-center align-items-center" id="cart_div">
		  				<a href="<?php echo base_url();?>index.php/signin/" id="sign_in_anchor" class="">
			  				<button class="btn mr-4" id="sign_btn">
				  				Sign in
				  			</button>
			  			</a>
		  			</div>
		  			<div class="d-flex justify-content-center align-items-center mr-4" id="cart_icon">
		  				<i class="fas fa-shopping-cart" id="cart_img">
		  				</i>
		  			</div>
		  			<div class="d-flex justify-content-center align-items-center mr-4" id="dark_light_icon" style="cursor: pointer;">
		  				<i class="fas fa-moon" id="dark_light_img" style="color: ; font-size: 1.5vw;"></i>
		  				<div class="d-flex justify-content-center align-items-center pl-2 pt-1">
		  					<h6 id="dark_light_text">Dark mode</h6>
		  				</div>
		  				
		  			</div>
		  			<div class="d-flex justify-content-center align-items-center" id="log_out_icon">
		  				<i class="fas fa-sign-out-alt" id="log_out_img" style="color: ; font-size: 2vw; cursor: pointer;"></i>
		  			</div>
		  			
		  		</div>
		  	</div>
	</nav>
	
	
	<section id="home" class="justify-content-center align-items-center d-flex">
		<div class="container-fluid">
			<div class="m-5">
				<div class="row justify-content-between">
					<div class="col-lg-6 d-flex justify-content-start align-items-center" id="first_col">
						<div>
							<h2>Get your new book</h2>
							<h2>with the best price</h2>
							<h4 id="h4">You can find any kind of books with the
							best price. Join us, for a special offer</h4>
							<div>
								<a href="#recomend_books">
									<button class="btn" id="exlore_btn">
										Explore now
									</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 p-0" id="second_col">
						<div id="img" class="p-0"></div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section id="recomend_books" class="pt-3">
		<div class="container-fluid">
			<h3 class="ml-5 mb-5">Recomendation for the week</h3>
				<div class="swiper-container pl-5 mb-5">
				    <div class="swiper-wrapper">
				    	<?php
				    		foreach ($recomend_books as $book) {
				    	?>
				    	<div class="swiper-slide justify-content-center d-flex" style="height:280px; ">
				    		<div>
					    		<div style="height: 60%; width: 100%; box-shadow: 0px 0px 10px rgba(0,0,0,0.5)">
						      		<img src="<?php echo $book['img'];?>" style="height:100%; width: 100%">
					      		</div>
					      		<div class="m-2">
					      			<h6 class="<?php echo $book['title'];?>" id="rec_title"><?php echo $book['title'];?></h6>
					      			<h6>Rs. <span id="price"><?php echo rand(200,1000)?></span></h6>
					      			<div>
					      				<button class="btn btn-sm" id="rec_add_cart">
					      					<i class="fas fa-shopping-cart pr-1" id=""></i>
											Add to cart
										</button>
					      			</div>
					      		</div>
				      		</div>
				      	</div>
				    	<?php
				    		}
				    	?>
				    </div>
  				</div>
		</div>
	</section>

	<section id="php_books">
		<div class="container-fluid">
			<h3 class="ml-5 mb-5">PHP</h3>
				<div class="swiper-container pl-5 mb-5">
				    <div class="swiper-wrapper">
				    	<?php
				    		foreach ($php_books as $book) {
				    	?>
				    	<div class="swiper-slide justify-content-center d-flex" style="height:280px; ">
				    		<div>
					    		<div style="height: 60%; width: 100%; box-shadow: 0px 0px 10px rgba(0,0,0,0.5)">
						      		<img src="<?php echo $book['img'];?>" style="height:100%; width: 100%">
					      		</div>
					      		<div class="m-2">
					      			<h6 class="<?php echo $book['title'];?>" id="php_title"><?php echo $book['title'];?></h6>
					      			<h6>Rs. <span id="price"><?php echo rand(200,1000)?></span></h6>
					      			<div>
					      				<button class="btn btn-sm" id="php_add_cart">
					      					<i class="fas fa-shopping-cart pr-1" id=""></i>
											Add to cart
										</button>
					      			</div>
					      		</div>
				      		</div>
				      	</div>
				    	<?php
				    		}
				    	?>
				    </div>
  				</div>
		</div>
	</section>

	<section id="javascript_books">
		<div class="container-fluid">
			<h3 class="ml-5 mb-5">JavaScript</h3>
				<div class="swiper-container pl-5 mb-5">
				    <div class="swiper-wrapper">
				    	<?php
				    		foreach ($javascript_books as $book) {
				    	?>
				    	<div class="swiper-slide justify-content-center d-flex" style="height:280px; ">
				    		<div>
					    		<div style="height: 60%; width: 100%; box-shadow: 0px 0px 10px rgba(0,0,0,0.5)">
						      		<img src="<?php echo $book['img'];?>" style="height:100%; width: 100%">
					      		</div>
					      		<div class="m-2">
					      			<h6 class="<?php echo $book['title'];?>" id="js_title"><?php echo $book['title'];?></h6>
					      			<h6>Rs. <span id="price"><?php echo rand(200,1000)?></span></h6>
					      			<div>
					      				<button class="btn btn-sm" id="js_add_cart">
					      					<i class="fas fa-shopping-cart pr-1" id=""></i>
											Add to cart
										</button>
					      			</div>
					      		</div>
				      		</div>
				      	</div>
				    	<?php
				    		}
				    	?>
				    </div>
  				</div>
		</div>
	</section>


	<section id="python_books">
		<div class="container-fluid">
			<h3 class="ml-5 mb-5">Python</h3>
				<div class="swiper-container pl-5 pb-5">
				    <div class="swiper-wrapper">
				    	<?php
				    		foreach ($python_books as $book) {
				    	?>
				    	<div class="swiper-slide justify-content-center d-flex" style="height:280px; ">
				    		<div>
					    		<div style="height: 60%; width: 100%; box-shadow: 0px 0px 10px rgba(0,0,0,0.5)">
						      		<img src="<?php echo $book['img'];?>" style="height:100%; width: 100%">
					      		</div>
					      		<div class="m-2">
					      			<h6 class="<?php echo $book['title'];?>" id="py_title"><?php echo substr($book['title'],0,15)."...";?></h6>
					      			<h6>Rs. <span id="price"><?php echo rand(200,1000)?></span></h6>
					      			<div>
					      				<button class="btn btn-sm" id="py_add_cart">
					      					<i class="fas fa-shopping-cart pr-1" id=""></i>
											Add to cart
										</button>
					      			</div>
					      		</div>
				      		</div>
				      	</div>
				    	<?php
				    		}
				    	?>
				    </div>
  				</div>
		</div>
	</section>
	<div class="alert alert-success" style="position: fixed; z-index: 1111; bottom:10%; left:50%; transform: translate(-50%, -50%); display: none;" id="alert">
		<strong>Success!</strong> Book is added to cart
	</div>
</section>
<section id="sidenav" class="" style="overflow: scroll; height: 100vh; width: 0vw; position: fixed; z-index: 1111; right: 0; top: 0; box-shadow: 0px 0px 10px rgba(0,0,0,0.5); transition: all .2s; overflow: hidden;">
		<div id="cross_icon" class="p-3">
			<i class="fas fa-times" id="cross_img"></i>
		</div>
		<div id="cart" class=" justify-content-center d-flex align-items-center" style="height: 100%; width:100%; padding-bottom: 10vw;">
			<h3 id="not_item" class="">No item's in your cart</h3>
			<div id="cart_table" class="d-none text-center">
				<h3 class="pb-3">Your Book's Cart<span>
				<i class="fas fa-shopping-cart" id="sidenav_shoppingCart_img" style="font-size: 2vw; color: black;">
		  				</i>
			</span></h3>
				<table class="table table-borderless">
					<thead>
				     <tr class="text-center">
				      	<th></th>
				        <th>Books Name</th>
				        <th>Quantity</th>
				        <th>Price</th>
				        <th>Total</th>
				      </tr>
				    </thead>
				    <tbody class="text-center">
				    	<tr id="total_amount">
				    		<td></td>
				    		<td></td>
							<td></td>
							<td>Total</td>
				    		<td></td>
				    		<td><button class="btn-sm btn" style="background-color: #6361DC; color: white;">
				    			<i class="fas fa-shopping-bag pr-1" id=""></i>
				    		Buy Now</button></td>
				    	</tr>
				    </tbody>
				</table>
			</div>
		</div>
</section>
	
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.nice-number.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
	<script type="text/javascript">
		Pace.on('done',function(){
			$('#main').css('visibility','visible');
		})
	</script>
	<script>
	    var swiper = new Swiper('.swiper-container', {
	      slidesPerView: 7,
	      spaceBetween: 30,
	      autoplay: {
        	delay: 2500,
        	disableOnInteraction: false,
          },
	      pagination: {
	        el: '.swiper-pagination',
	        clickable: true,
	      },
	    });
    </script>
    <script type="text/javascript">
    	function calculateTotal(){
    		var sum = 0;
    		var rows = document.querySelector('tbody').rows;
    		var priceArr = [];
    		for(var i=0; i<rows.length - 1; i++){
    			var totalCol = Number($(rows[i].cells[4]).text());
    			priceArr.push(totalCol);
    		}
    		// console.log(priceArr);
    		for(var j = 0; j < priceArr.length; j++){
    			sum = Number(sum + priceArr[j]);
    			$(rows[rows.length - 1].cells[4]).text(sum);
    		}

    		priceArr = [];

    	}
    	function increment(cls){
    		var input = Number($(cls).prev().val());
    		var priceForOne = Number($(cls).parents('td').next().text());
    		$(cls).prev().val(Number(input + 1));
    		input = Number($(cls).prev().val());
    		$(cls).parents('td').next().next().text(Number(input * priceForOne));

    		calculateTotal();

     	}
     	function decrement(cls){
     		var input= Number($(cls).next().val());
     		var priceForOne = Number($(cls).parents('td').next().text());
     		var totalPrice = Number($(cls).parents('td').next().next().text());
     		if(input == 1){
     			$(cls).next().val(Number(input - 0));
     		}else{
     			$(cls).next().val(Number(input - 1));
     			input= Number($(cls).next().val());
     			var minusPrice = totalPrice - priceForOne;
     			$(cls).parents('td').next().next().text(Number(minusPrice));
     			calculateTotal();
     		}
     	}
    	$(document).ready(function(){
    		// $('#main').hide();
    		$('tbody').on('click','#tableId',function(){
    			var rows = document.querySelector('tbody').rows;
    			$(this).closest('tr').remove();
    			calculateTotal();
    			if(rows.length < 2){
    				$('#cart_table').addClass('d-none');
    				$('#not_item').removeClass('d-none');
    			}
    		})
    		function addToCart(){
    			for(var i = 0; i < arguments.length; i++){
    				for(var j = 0; j < arguments[i].length; j++){
    					$(arguments[i][j]).click(function(){
    						if($('#user_name').html().length > 0){
    							$('#not_item').addClass('d-none');
    							$('#cart_table').removeClass('d-none');
    							var title = $(this).parent().prev().prev().attr('class').slice(0,20)+"...";

    							var price = $(this).parent().prev().find('span').html();
    							var img = $(this).parent().parent().prev().find("img").attr('src');
    							var qty = "<div class='handle-counter' id='handleCounter'><button class='counter-minus btn btn-primary' onclick='decrement(this)'>-</button><input type='number' value='1' id='incre_input' readonly=''><button class='counter-plus btn btn-primary' onclick='increment(this)'>+</button></div>";
    							var delete_icon = "<i class='fas fa-trash-alt'></i>"
    							var btn = "<button class='btn btn-sm btn-danger' id='tableId'>"+delete_icon+"</button>";

    							var appendDataLight = "<tr style='box-shadow: 0px 0px 5px rgba(0,0,0,0.1);' id='tbody_tr'><td class=''><img src='"+img+"' class='rounded' height='35px' width='35px' id='cart_avtar'/></td><td class='justify-content-start d-flex align-items-center'>"+title+"</td><td>"+qty+"</td><td>"+price+"</td><td>"+price+"</td><td>"+btn+"</td></tr>"

    							var appendDataDark = "<tr style='box-shadow: 0px 0px 5px rgba(255,255,255,0.10);' id='tbody_tr'><td class=''><img src='"+img+"' class='rounded' height='35px' width='35px' id='cart_avtar'/></td><td class='justify-content-start d-flex align-items-center'>"+title+"</td><td>"+qty+"</td><td>"+price+"</td><td>"+price+"</td><td>"+btn+"</td></tr>";
    							var text = $('#dark_light_text').text();
    							if(text === "Dark mode"){
    								$('#total_amount').before(appendDataLight);
    							}else{
    								$('#total_amount').before(appendDataDark);
    							}
    							$('#alert').fadeIn();
								$('#alert').fadeOut(1000);
    							calculateTotal();
    						}else{
    							location.href = "<?php echo base_url();?>index.php/signin/";
    						}
	    					
	    				})
    				}
    			}
    		}
    		function textSlice(){
    			for(var i = 0; i < arguments.length; i++){
    				 for (var j = 0; j < arguments[i].length; j++) {
		    				var text = $(arguments[i][j]).html();
	    					$(arguments[i][j]).html(text.slice(0,10)+"....");
	    			}
    			}
    		}


    		var rec_btn = document.querySelectorAll('#rec_add_cart');
    		var php_btn = document.querySelectorAll('#php_add_cart');
    		var js_btn = document.querySelectorAll('#js_add_cart');
    		var py_btn = document.querySelectorAll('#py_add_cart');


    		var rec_text = document.querySelectorAll('#rec_title');
    		var php_text = document.querySelectorAll('#php_title');
    		var js_text = document.querySelectorAll('#js_title');
    		var py_text = document.querySelectorAll('#py_title');
    		addToCart(rec_btn, php_btn, js_btn, py_btn);
    		textSlice(rec_text, php_text, js_text, py_text);


    		var text = $('#user_name').text();
		    if(text.length > 0){
		    	$('#sign_in_anchor').hide();
		    	$('#log_out_img').show();
		    }else{
		    	$('#sign_in_anchor').show();
		    	$('#log_out_img').hide();
		    }
    		var text = $('#user_name').text();
    		console.log(text.length);
			$('#log_out_img').click(function(){
				$.ajax({
					url:'<?php echo base_url()?>index.php/sessionUnset',
					type:'post',
					success:function(data){
						$('#user_name').html('');
						$('#log_out_img').hide();
						location.href = '<?php echo base_url()?>';
						$('#sign_in_anchor').show();
					}
				})
			})

		})
    </script>


			
  
</body>
</html>