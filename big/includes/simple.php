<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Company Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Please tell us about your project and whether it's a redesign or a new site<br /><textarea name="Comments" cols="36" rows="4" placeholder="We're here to make your life better" tabindex="30"></textarea>
		</label>
	</div>	
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>

	<h1><a href="tel:1-206-934-3800">Telephone: 1-206-934-3800</a> </h1>
	
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1344.752131279727!2d-122.3223568517811!3d47.61632835168935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906accc351c149%3A0xdc1a5c338dd4395c!2sSeattle%20Central%20College!5e0!3m2!1sen!2sus!4v1582514030223!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

	

	<!-- END HTML FORM -->
