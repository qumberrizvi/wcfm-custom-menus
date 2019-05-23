<?php
global $WCFM, $wp_query;

?>

<div class="collapse wcfm-collapse" id="wcfm_service_listing">

	<div class="wcfm-page-headig">
		<span class="fa fa-cubes"></span>
		<span class="wcfm-page-heading-text"><?php _e( 'Pro Bio Writing', 'wcfm-custom-menus' ); ?></span>
		<?php do_action( 'wcfm_page_heading' ); ?>
	</div>
	<div class="wcfm-collapse-content">
		<div id="wcfm_page_load"></div>
		<?php do_action( 'before_wcfm_service' ); ?>

		<div class="wcfm-container wcfm-top-element-container">
			<h2><?php _e('Get Professional Bio Writing Services', 'wcfm-custom-menus' ); ?></h2>
			<div class="wcfm-clearfix"></div>
	  </div>
	  <div class="wcfm-clearfix"></div><br />


		<div class="wcfm-container">
			<div id="wcfm_service_listing_expander" class="wcfm-content">

				<!---- Content Starts Here ----->
				<button id="rzp-button1">Buy Now</button>
				<br><br><br>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br>
					exercitation ullamco laboris nisi ut aliquip ex ea <br>
					commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu <br>
					fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit <br>
					anim id est laborum.</p><br><br>
					<strong><p>Lorem ipsum dolor sit amet</p></strong><br>
					<ul>
						<li>This is a line.</li>
						<li>It can be part of a poem. Or a story</li>
						<li>It can just be a thought of you,</li>
						<li>Something to remember.</li>
						<li>It can be an idea.</li>
						<li>It can be a conversation,</li>
						<li>With someone else or yourself.</li>
					</ul>
					<div>
						<strong><p>Last purchase:</p></strong>
						<p>Nothing to see here. :(</p>
					</div>

				<!-- Payment Gateway Starts Here -->
				<button id="rzp-button2">Buy Now</button>
				<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
				<script>
				var options = {
				    "key": "rzp_test_DMXbaCXeLLG5BX", // Enter the Key ID generated from the Dashboard
				    "amount": "29935", // INR 299.35
				    "name": "Pro Bio Writing",
				    "description": "A Wild Sheep Chase is the third novel by Japanese author  Haruki Murakami",
				    "image": "https://starclinch.com/wp-content/uploads/2019/03/Starclinch-Logo_450x450.png",
//				    "order_id": "order_9A33XWu170gUtm",
				    "handler": function (response){
				     //   alert(response.razorpay_payment_id);
						 if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
  					 	redirect_url = '/dashboard/contact';
					 		} else {
  				 		redirect_url = '/dashboard/upgrade';
				 			}
				 			location.href = redirect_url;
				    },
				    "prefill": {
				        "name": "Gaurav Kumar",
				        "email": "gaurav.kumar@example.com"
				    },
				    "notes": {
				        "address": "Your Address"
				    },
				    "theme": {
				        "color": "#F37254"
				    }
				};
				var rzp1 = new Razorpay(options);
				document.getElementById('rzp-button1').onclick = function(e){
				    rzp1.open();
				    e.preventDefault();
				}
				var rzp2 = new Razorpay(options);
				document.getElementById('rzp-button2').onclick = function(e){
						rzp2.open();
						e.preventDefault();
				}
				</script>
				<!-- Payment Gateway Ends Here -->

				<div class="wcfm-clearfix"></div>
			</div>
			<div class="wcfm-clearfix"></div>
		</div>

		<div class="wcfm-clearfix"></div>
		<?php
		do_action( 'after_wcfm_service' );
		?>
	</div>
</div>
