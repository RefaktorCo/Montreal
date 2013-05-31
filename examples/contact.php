<?php global $root; ?>

<div id="map">
</div>
<!-- CONTACT CONTAINER -->
<div class="container" style="background:url(<?php echo $root; ?>/img/stripes.png);">
	<section class="row white">
	
	<!-- FORM COLUMN -->
	<div class="seven columns leftpadding bigpadding" data-role="form">
		<h3 class="extrabold blacktext midbottommargin">GET IN TOUCH</h3>
		<p class="meta">
			Please fill out the form below to get in touch. We aim to respond to all enquiries within 3 working days.
		</p>
		  <?php $block = module_invoke('contact_form_blocks', 'block_view', '0'); ?>	
                  <?php print $block['content']; ?>
		<div class="row midpadding" id="success">
		</div>
	</div>
	<!-- SIDEBAR -->
	<div class="four columns push_one grey sidebar">
		<div class="twelve columns smallmargin">
			<h5 class="blacktext extrabold smallbottompadding">COME FIND US</h5>
			<p class="meta">
				786 Some Place Nice, Rd Nice<br>
				 State, Big Country 7860 <br/><br/>
				<span class="extrabold">p</span> (786)9876543210<br/>
				<span class="extrabold">e</span> contact@youragency.com
			</p>
		</div>
		<div class="twelve columns blackhorizontal midmargin">
		</div>
		<div class="twelve columns smallmargin">
			<h5 class="blacktext extrabold smallbottompadding">PROJECT PLANNER</h5>
			<p class="meta">
				We have prepared a project planner to get to know you and your project better.
			</p>
			<a href="/projectplanner.html" class="button">Get Started</a>
		</div>
	</div>
	</section>
</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true">
</script>
<script src="<?php echo $root;?>/js/maps.js">
</script>
<script type="text/javascript">
//<![CDATA[
  var map;
 jQuery(document).ready(function ($) {
  prettyPrint();
  map = new GMaps({
  div: '#map',
  lat: 48.8584,
  lng: 2.2946,
  });
  map.addMarker({
  lat: 48.8584,
  lng: 2.2946,
  title: 'MONTREAL Html Template',
  click: function(e){
  if(console.log)
  console.log(e);
  alert('You clicked in this marker');
  }
  });
  });
  //]]>
</script>