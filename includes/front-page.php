<?php
  function montreal_front_page($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>

<!-- SLIDESHOW CONTAINER WITH STRIPES BACKGROUND. CHANGE THE BELOE BG URL TO USE YOUR OWN BACKGROUND
PLEASE REMEMBER: THE BACKGROUND HAS LOW OPACITY TO MAKE SLIDESHOW VISIBLE.-->
<div class="container slideshow" >
	<section class="row largepadding">
	<div class="six columns bigpadding">
		<!-- SLIDESHOW STATEMENT -->
		<h1 class="bigtoppadding whitetext"><span class="light">WE CREATE</span><br/>BRANDS PEOPLE LOVE</h1>
		<h5 class="white blacktext smallsidepadding">MONTREAL DESIGN STUDIO</h5>
		<p class="whitetext meta">
			 We've cleaned up the air, but polluted the soul. We write more, but learn less. We plan more, but accomplish less. We've learned to rush, but not to wait. We write more, but learn less. We plan more, but accomplish less.
		</p>
	</div>
	</section>
</div>
<!-- END SLIDESHOW CONTAINER -->		
<!-- THICK STRIPE BORDER -->
<div class="smallpadding">
</div>
<!-- PORTFOLIO CONTAINER -->
<div class="container white bigpadding">
	<section class="row smallbottompadding">
	<h3 class="blacktext bold midbottommargin center">OUR RECENT WORK</h3>
	<!-- BLACKHORIZONTAL -->
	<div class="three columns alpha centered blackhorizontal">
	</div>
	<div class="four columns centered smalltoppadding">
		<p class="center">
			<a class="smallfont greytext" href="/portfolio.html">VIEW ALL PORTFOLIO</a>
		</p>
	</div>
	</section>
	<!-- BASIC PORTFOLIO ITEM ROW -->
	<section class="row midbottompadding">
	<!-- ITEM ONE -->
	<div class="item four columns alpha">
		<img src="<?php echo $root;?>/preview/preview1.jpg" alt="item">
		<h5 class="blacktext extrabold smalltoppadding">PROJECT TITLE<span class="right light">01</span></h5>
		<h6 class="blacktext">WEB DESIGN / UI/ UX</h6>
		<a href="/itembasic.html" class="blacktext smallfont">VIEW PROJECT</a>
	</div>
	<!-- ITEM TWO -->
	<div class="item four columns">
		<img src="<?php echo $root;?>/preview/preview1.jpg" alt="item">
		<h5 class="blacktext extrabold smalltoppadding">PROJECT TITLE<span class="right light">02</span></h5>
		<h6 class="blacktext">WEB DESIGN / UI/ UX</h6>
		<a href="/itembasic.html" class="blacktext smallfont">VIEW PROJECT</a>
	</div>
	<!-- ITEM THREE -->
	<div class="item four columns">
		<img src="<?php echo $root;?>/preview/preview1.jpg" alt="item">
		<h5 class="blacktext extrabold smalltoppadding">PROJECT TITLE<span class="right light">03</span></h5>
		<h6 class="blacktext">WEB DESIGN / UI/ UX</h6>
		<a href="/itembasic.html" class="blacktext smallfont">VIEW PROJECT</a>
	</div>
	</section>
</div>
<!-- end of  portfolio container -->    
<!-- THICK STRIPE BORDER -->
<div class="smallpadding">
</div>
<!-- QUOTE CONTAINER WITH STRIPE BACKGROUND AND SLIDESHOW IN THE BACK -->
<div class="container largepadding_back">
	<section class="row bigpadding">
	<!-- WHITE HORIZONTAL -->
	<div class="alpha centered six columns whitehorizontal midmargin">
	</div>
	<!-- QUOTE -->
	<div class="alpha eleven columns centered">
		<h2 class="italic center whitetext">"There's no such thing as simple. Simple is hard"</h2>
	</div>
	<!-- WHITE HORIZONTAL -->
	<div class="alpha centered six columns whitehorizontal smallmargin">
	</div>
	</section>
</div>


<!-- BLOG CONTENT CONTAINER WITH STRIPE PAGE BACKGROUND -->
<div class="container midpadding">
	<section class="row midpadding white smallbottommargin">
	<h3 class="blacktext bold midmargin center">OUR RECENT NOTES</h3>
	<div class="three columns alpha centered blackhorizontal">
	</div>
	<div class="four columns centered smalltoppadding">
		<p class="center">
			<a class="smallfont greytext" href="/blog.html">VIEW ALL NOTES</a>
		</p>
	</div>
	</section>
	<!-- POST ONE -->
	<article class="row blog white">
	<div class="eight columns centered">
		<!-- POST TITLE -->
		<a href="/blogsingle.html" title="Read Note">
		<h4 class="blacktext italic center">Beautiful interactive creative template.</h4>
		</a>
		<!-- POST META -->
		<p class="center">
			<i class="icon-time greytext"></i>
			<a class="smallfont greytext" href="#">29/12/12</a>
			&nbsp; &nbsp; <i class="greytext icon-folder-open"></i>
			<a class="smallfont greytext" href="#">DESIGN</a> / <a class="smallfont greytext" href="#">DEVELOPMENT</a>
			&nbsp; &nbsp; <i class="greytext icon-link"></i>
			<a class="smallfont greytext" href="/blogsingle.html">READ POST</a>
		</p>
	</div>
	</article>
	<!-- POST TWO -->
	<article class="row blog white">
	<div class="eight columns centered">
		<!-- POST TITLE -->
		<a href="/blogsingle.html" title="Read Note">
		<h4 class="blacktext italic center">Useful talks and videos on social media promotion.</h4>
		</a>
		<!-- POST META -->
		<p class="center">
			<i class="icon-time greytext"></i>
			<a class="smallfont greytext" href="#">29/12/12</a>
			&nbsp; &nbsp; <i class="greytext icon-folder-open"></i>
			<a class="smallfont greytext" href="#">DESIGN</a> / <a class="smallfont greytext" href="#">DEVELOPMENT</a>
			&nbsp; &nbsp; <i class="greytext icon-link"></i>
			<a class="smallfont greytext" href="/blogsingle.html">READ POST</a>
		</p>
	</div>
	</article>
	<!-- POST THREE -->
	<article class="row blog white">
	<div class="eight columns centered">
		<!-- POST TITLE -->
		<a href="/blogsingle.html" title="Read Note">
		<h4 class="blacktext italic center">How to succeed in web design.</h4>
		</a>
		<!-- POST META -->
		<p class="center">
			<i class="icon-time greytext"></i>
			<a class="smallfont greytext" href="#">29/12/12</a>
			&nbsp; &nbsp; <i class="greytext icon-folder-open"></i>
			<a class="smallfont greytext" href="#">DESIGN</a> / <a class="smallfont greytext" href="#">DEVELOPMENT</a>
			&nbsp; &nbsp; <i class="greytext icon-link"></i>
			<a class="smallfont greytext" href="/blogsingle.html">READ POST</a>
		</p>
	</div>
	</article>
</div>
<!-- END BLOG CONTAINER -->

<!-- twitter container -->
<div class="container white">
	<section class="row bigpadding">
	<h2 class="light blacktext center icon-twitter"></h2>
	<div class="alpha seven columns centered">
		<div class="tweet">
		</div>
		<a href="#" class="blacktext">
		<h6 class="center bold meta">TWITTER USERNAME</h6>
		</a>
	</div>
	</section>
</div>



  <!-- end main wrapper -->    
  
   <?php }
?>