<?php include 'includes/header.php';?>
<!--header include ends here    -->
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "barbara.pronsato@gmail.com";  //place your/your client's email address here
        $toName = "Amberlene Labrette"; //place your client's name here
        $website = "web120 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    

</aside>
<!-- END RIGHT COL -->
<!--footer include starts here-->
<?php include 'includes/footer.php';?>