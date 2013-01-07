<?php 
function montreal_footer($page){
  global $root; 
?>
<!-- begin footer -->   
  <!-- FOOTER -->
<footer class="black">
<div class="container">
	<div class="row bigtoppadding">
	
		<!-- FIRST WIDGET -->
		<div class="three columns">
			<h5 class="whitetext light">Contact Us Here.</h5>
			<p class="greytext midmargin meta">
				 786 Some Place Nice, Rd Nice<br>
				 State, Big Country 7860
			</p>
		</div>
		<!--SECOND WIDGET -->
		<div class="three columns">
			<h5 class="whitetext light">Or Here.</h5>
			<p class="greytext midmargin meta">
				 p <span>(786) 9876 543 210</span><br>
				 e <a href="mailto:" class="whitetext">contact@youragency.com</a>
			</p>
		</div>
		<!-- THIRD WIDGET -->
		<div class="three columns">
			<h5 class="whitetext light">Project Planner.</h5>
			<p class="greytext midmargin meta">
				 We have prepared a <a href="/projectplanner.html" class="whitetext">project planner</a> to get to know your project better.
			</p>
		</div>
		<!-- FOURTH WIDGET -->
		<div class="three columns newsletter">
			<h5 class="whitetext light">Newsletter.</h5>
			<p class="smallfont">
				 Email updates.
			</p>
			<form id="newsletter" action="#" method="post">
				<dl class="field row">
					<dt class="text"><input type="text" placeholder="Your Email..."/></dt>
					<dd class="msg"><span class="caret"></span>You filled this out wrong.</dd>
					</dl>
					<input type="submit" name="Submit" value="Submit" class="submit alpha four columns">
				
			</form>
		</div>
	</div>
	<!-- END TOP ROW -->
	
	<!-- GREY HORIZONTAL -->
	<div class="greyhorizontal midmargin">
	</div>
	
	<div class="row">
	
	<!-- COPYRIGHT -->
		<div class="four columns">
			<p class="greytext meta">
				 © 2012 <a href="#" title="Website Design, Graphic Design, Applications &amp; Development" class="greytext meta">Montreal RSPNSV HTML</a>
			</p>
		</div>
		
		<!-- NAVIGATION -->
		<div class="five columns">
			<p class="meta">
				<a href="#" class="greytext">Home</a> &nbsp; / &nbsp; <a href="/about.html" class="greytext">About</a> &nbsp; / &nbsp; <a href="/portfolio.html" class="greytext">Portfolio</a> &nbsp; / &nbsp; <a href="/blog.html" class="greytext">Blog</a> &nbsp; / &nbsp; <a href="/contact.html" class="greytext">Contact</a>
			</p>
		</div>
		
		<!-- LINKS -->
		<div class="three columns right">
			<p class="meta">
				<a href="#" class="greytext">Facebook</a> / &nbsp; <a href="#" class="greytext">Twitter</a> / &nbsp; <a href="#" class="greytext">Behance</a>
			</p>
		</div>
	</div>
</div>
</footer>
    
   <?php }
?>