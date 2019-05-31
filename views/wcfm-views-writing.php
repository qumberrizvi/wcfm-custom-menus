<?php
global $WCFM, $wp_query;

?>

<div class="collapse wcfm-collapse" id="wcfm_writing_listing">

	<div class="wcfm-page-headig">
		<span class="fa fa-cubes"></span>
		<span class="wcfm-page-heading-text"><?php _e( 'Pro Bio Writing', 'wcfm-custom-menus' ); ?></span>
		<?php do_action( 'wcfm_page_heading' ); ?>
	</div>
	<div class="wcfm-collapse-content">
		<div id="wcfm_page_load"></div>
		<?php do_action( 'before_wcfm_writing' ); ?>

		<div class="wcfm-container wcfm-top-element-container">
			<h2><?php _e('Get Professional Bio Writing Services', 'wcfm-custom-menus' ); ?></h2>
			<div class="wcfm-clearfix"></div>
	  </div>
	  <div class="wcfm-clearfix"></div><br />


		<div class="wcfm-container">
			<div id="wcfm_writing_listing_expander" class="wcfm-content">

				<!---- Content Starts Here ----->
				<button id="rzp-button1">Buy Now</button>
				<br><br><br>
				<p> You could be a gifted artist but if your biography is not professionally written then, it can severely reduce your chances of getting shortlisted by prospective talent buyers. <br>
As per the data we have collected in the last 4 years, a poorly written artist biography has emerged as one of the top 3 reasons for artists being ignored by talent buyers. <br>
You need not become a writer to this. Leave it to professional writers at StarClinch. <br>
In just <strong>₹399</strong>, you can get a professionally written artist biography and USP, that can attract talent buyers to your profile and give them a better insight about your professional achievements. <br><br>

<strong>Here are the advantages of a professionally written artist biography:</strong></p><br>
					<ul>
						<li>Artist profile will stand out in comparison to the competition</li>
						<li>It will keep the Talent Buyers interested so that you are given the opportunity to perform</li>
						<li>Your skills and career accomplishments will be clearly illustrated</li>
						<li>Talent Buyers will not lose interest in your profile</li>
						<li>It will also help Talent Buyers to sum up your skills and achievements with ease</li>
					</ul>
					<div>
						<strong><p>Last purchase:</p></strong>
						<p>Nothing to see here. :(</p>
					</div>
				<!-- Payment Gateway Starts Here -->
				<?php do_action('wcfm_before_payment'); ?>
				<button id="rzp-button2">Buy Now</button>
				<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
				<script>
				var options = {
				    "key": "rzp_live_rZv3GJQOx0VuCu", // Enter the Key ID generated from the Dashboard
				    "amount": "39900", // INR 399.00
				    "name": "Pro Bio Writing",
				    "description": "Pro Bio Writing Services",
				    "image": "https://starclinch.com/wp-content/uploads/2019/03/Starclinch-Logo_450x450.png",
//				    "order_id": "order_9A33XWu170gUtm",
				    "handler": function (response){
				     //   alert(response.razorpay_payment_id);
						 if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
  					 	redirect_url = '/dashboard/contact';
					 		} else {
  				 		redirect_url = '/dashboard/success';
				 			}
				 			location.href = redirect_url;
				    },
				   //  "prefill": {
				   //     "name": "Gaurav Kumar",
				   //     "email": "gaurav.kumar@example.com"
				   // },
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
		do_action( 'after_wcfm_writing' );
		?>
	</div>
</div>
