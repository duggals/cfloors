<html lang="en-UK">
<!--<![endif]-->
<head>
<title><?php 
			if (!empty($is_blog)) :
				echo $CI->fuel_blog->page_title($page_title, '', 'right');
			else:
				echo "Con-Tech Concrete Floors Ltd ".fuel_var('page_title', '');
			endif;


		?></title>
<meta name="keywords" content="<?php echo fuel_var('meta_keywords','Concrete flooring contractors, concreting floor contractors, concrete flooring, industrial concrete flooring, concrete floors Manchester, north west concrete flooring, concrete works, concrete contractors, concrete companies manchester, power float finish, skip float finish, flat matt finish, composite floors')?>">
<meta name="description" content="<?php echo fuel_var('meta_description','Specialising in the laying and finishing of concrete floors, industrial and commercial floor specialists.')?>">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
		echo css('bootstrap').css($css);
		echo css('responsive').css($css);
		echo css('camera').css($css);
		echo css('main-style').css($css);
		echo css('final-styles').css($css);
		echo css('magnific-popup').css($css);

		if (!empty($is_blog)):
			echo $CI->fuel_blog->header();
		endif;
?>

<link rel="shortcut icon" href="/assets/images/favicon.ico?v=2" type="image/x-icon"/>

<?php echo js('jquery-1.7.2.min').js($js); ?>
<?php echo js('swfobject').js($js); ?>
<?php echo js('modernizr').js($js); ?>
<?php echo js('jquery.elastislide').js($js); ?>
<?php echo js('jflickrfeed').js($js); ?>
<?php echo js('custom').js($js); ?>
<?php echo js('bootstrap.min').js($js); ?>
<?php echo js('validate').js($js); ?>
<?php echo js('functions').js($js); ?>
<?php echo js('jquery.mobile.customized.min').js($js); ?>
<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/assets/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
	<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<?php
	if(isset($_POST["email"])){	
	$to = "don.concretefloors@live.co.uk";
	$subject = "Contact enquiry";
	$message = "Name: ".$_POST["name"]."<br>";
	$message.= "Email: ".$_POST["email"]."<br>";
	$message.= "Phone: ".$_POST["phone"]."<br>";
	$message.= "Enquiry: ".$_POST["message"]."<br>";
	$from = "enquiries@contechfloors.co.uk";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	echo "<!--Mail Sent.-->";
	}

?>
<body>
	<div id="motopress-main" class="main-holder">
		<header class="motopress-wrapper header">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span6">
								<div class="logo pull-left">
									<a href="/"
										class="logo_h logo_h__img"><img
										src="/assets/images/logo3.png"
										alt="Construct47" title="Construction company"></a>
									<p class="logo_tagline">Con-Tech Concrete Floors Ltd - Specialising in Laying &amp; Finishing of Concrete Floors</p>
								</div>
							</div>
							<div class="span6">
								<nav class="nav nav__primary clearfix">
									<?php echo fuel_nav(array('container_tag_id' => 'topnav','container_tag_class'=>"sf-menu sf-js-enabled", 'item_id_prefix' => 'menu-item-', 'subcontainer_tag_class' =>array('sub-menu','sub-menu','sub-menu','sub-menu'))); ?>									
								</nav>
									<p id="tel-header">Tel: <?php echo fuel_var('LandlineNumber'); ?><br/>Mobile: <?php echo fuel_var('MobilePhone'); ?></p>	
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</header>
		<div class="motopress-wrapper content-holder clearfix">
			<div class="container">