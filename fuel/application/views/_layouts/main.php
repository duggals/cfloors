<?php $this->load->view('_blocks/header')?>
	

		<?php

		switch ($_SERVER["REQUEST_URI"]) {
			case '/contact-us.html':
				?>

			<div class="row">
	<div class="span12">
		<div class="row">
			<div class="span12" data-motopress-type="static">
				<section class="title-section">
					<h1 class="title-header">Contact Us</h1>
					<ul class="breadcrumb breadcrumb__t"><li><a href="/">Home</a></li><li class="divider"></li><li class="active">Contact Us</li></ul>  
				</section> 
				</div>
			</div>
		<div id="content" class="row">
			<div class="span12">
				<div id="post-14" class="post-14 page type-page status-publish hentry page">
					<div class="row">
						<div class="span12">
							<div class="google-map">
								<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><a class="google-map-code" href="http://www.mapsembed.com/mytoys/" id="get-map-data">hier von mapsembed</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(53.5149063,-2.1511425999999574),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(53.5149063, -2.1511425999999574)});infowindow = new google.maps.InfoWindow({content:"<b>Con-Tech Concrete Floors Ltd</b><br/>607 Oldham Road<br/>M35 9AN " });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
							</div>
						</div>
					<div class="span4"><h2>Contact info</h2>
					<h5>If you have any enquiries, please contact us on the contact details below and one of our representatives will get back to you.<br></h5>
					</p><address>
					<strong><?php echo fuel_var('Address'); ?></strong><br>
					Telephone Number: <?php echo fuel_var('LandlineNumber'); ?><br>
					Mobile: <?php echo fuel_var('MobilePhone'); ?><br>
					E-mail: <a href="mailto:<?php echo fuel_var('GeneralEnquiriesEmail'); ?>"><?php echo fuel_var('GeneralEnquiriesEmail'); ?></a> or contact<br>
					Donald Thomson (MD) E-mail: <a href="mailto:<?php echo fuel_var('DonaldEmailAddress'); ?>"><?php echo fuel_var('DonaldEmailAddress'); ?></a><br>
					</address> </div>
					<div class="span8">

					<?php if(isset($_POST["email"])):?>

						<h2>Thank You</h2>
						
						<p>Your email has been sent will be answered by one of our representatives</p>

						<p>To send another enquiry please click <a href="">here</a></p>
			
					<?php else :?>

						<h2>Contact form</h2>
							<div class="wpcf7" id="wpcf7-f208-p14-o1">
								<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
								<div class="row-fluid">
								<p class="span4 field"><span class="wpcf7-form-control-wrap your-name"><input type="text" id="name" name="name" value="" size="40" placeholder="Name:"></span></p>
								<p class="span4 field"><span class="wpcf7-form-control-wrap your-email"><input type="email" id="email" name="email" value="" size="40" placeholder="Email:"></span></p>
								<p class="span4 field"><span class="wpcf7-form-control-wrap your-phone"><input type="text" id="phone" name="phone" value="" size="40" placeholder="Phone:"></span> </p>
								</div>
								<p class="field"><span class="wpcf7-form-control-wrap your-message"><textarea id="message" name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message:"></textarea></span> </p>
								<p class="submit-wrap">
                                                                    <input type="reset" value="clear" class="btn btn-primary">
								     <input type="submit" value="send" class="btn btn-primary">
								</p>
								</form>
							</div>

					<?php endif; ?>





						</div>
					</div> 
					<div class="clear"></div>	 
				</div> 
			</div>
		</div>
	</div>
</div>



			<? break;
			
			default:
				echo fuel_var('body', 'This is a default layout. To change this layout go to the fuel/application/views/_layouts/main.php file.');
				break;
		}


		 






		  ?>

	
<?php $this->load->view('_blocks/footer')?>
