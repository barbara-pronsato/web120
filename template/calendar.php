<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
<h1><a href="index.php" ><i class="logo fa <?=$logo?>"></i>Seattle Chess School</a></h1>
  <!-- <h1><a href="index.php"><i class"logo fa <?=logo?>"></Barbara Pronsato</a></h1> -->
  <nav>


  <body>

  <div id='cssmenu'>
<ul>
<li class='has-sub'><a href='template.php'><span>Welcome</span></a></li>
<li class='has-sub'><a href='calendar.php'><span>Classes</span></a></li>
<li class='has-sub'><a href='problem.php'><span>Problem</span></a></li>
<li class='has-sub'><a href='about.php'><span>About</span></a></li>
<li class='last'><a href='contactme.php'><span>Contact</span></a></li>
</ul>
</div>

</body>
 
      <!-- <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li> -->
    </ul>
  </nav>
</header>
<!--header include ends here    -->
<!-- START LEFT COL -->
<section>
 <!-- <h2 class="pageID"><?=$PageID?></h2> -->

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/chessClass.jpg" class="desktop" alt="chessClass image" />
 <img src="images/chessClass.jpg" class="tablet" alt="chessClass image" />
 <img src="images/chessClass.jpg" class="phone" alt="chessClass image" />


 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>

<h2>E pluribus unum</h2>

<p> I'm baby put a bird on it la croix pitchfork cornhole, cloud bread live-edge four dollar toast post-ironic. Truffaut umami kogi semiotics jean shorts +1, banh mi knausgaard next level VHS messenger bag stumptown brunch drinking vinegar. Truffaut food truck normcore beard. Craft beer vexillologist pork belly squid, tilde pok pok chartreuse tacos godard.</p>

<p>Pour-over synth succulents art party lo-fi yr, tattooed hashtag organic green juice migas marfa stumptown. Chambray umami franzen ramps keytar fashion axe helvetica artisan gluten-free. Iceland stumptown gentrify glossier fashion axe sriracha. Cronut vice tacos forage next level fam enamel pin semiotics. Keytar salvia +1, tofu selvage messenger bag viral church-key meggings lyft.</p>

</aside>
<!-- END RIGHT COL -->
<!--footer include starts here-->

<footer>


  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Barbara Pronsato</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>


  <ul class="social-icons">
  <li><a href="https://www.instagram.com/amberlene.labrette/">instagram<span></span></a></li>
  <li><a href="https://pinterest.com/languagenews">pinterest<span></span></a></li>
  <li><a href="https://www.youtube.com/multilingualbooks">youtube<span></span></a></li>
  <li><a href="">gplus<span></span></a></li>
  <li><a href="https://twitter.com/languagenews">twitter<span></span></a></li>
  <li><a href="https://facebook.com/multilingualbooks">facebook<span></span></a></li>
 </ul>

</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>