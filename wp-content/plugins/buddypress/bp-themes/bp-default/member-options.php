<?php
/*
Template Name: Member Options
*/
?>
<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<div id="member-optns-info">
					<div id="member-optns-title">Choose Your Membership Level</div>

					<div id="optn-1" class="optn-container">
						<div class="optn-header">
							<div class="optn-title">FREE</br>MEMBER</div>
						</div>
						<div class="optn-details">
							<ul>
								<li>Search all stories and historical entries</li>
								<li>Publish one story a month</li>
								<li>Add unlimited documetns &amp images to story</li>
								<li>Add one video per story</li>
							</ul>
						</div>
						<div class="optn-price">
							<div class="click-text">Click to Register</div>
							<a href="/register"><div class="optn-free-button"></div></a>
						</div>
					</div>

					<div id="optn-2" class="optn-container">
						<div class="optn-header">
							<div class="optn-title">PUBLISHING</br>MEMBER</div>
						</div>
						<div class="optn-details">
							<ul>
								<li>Search all stories and historical entries</li>
								<li>Publish unlimited stories a month</li>
								<li>Add unlimited documetns &amp images to stories</li>
								<li>Add two videos per story</li>
							</ul>
						</div>
						<div class="optn-price">
							<div class="click-text">Click to Register</div>
							<div class="optn-price-text">$9.95 per month</div>
							<?php echo do_shortcode('[s2Member-PayPal-Button level="1" ccaps="" desc="Archivist - Publishing Member" ps="paypal" lc="" cc="USD" dg="0" ns="1" 
					custom="bookofrelations.com" ta="0" tp="0" tt="D" ra="9.95" rp="1" rt="M" rr="1" rrt="" rra="1" image="default" output="button" /]') ?>
						</div>
					</div>

					<!-- <div id="optn-1" class="optn-container">
						<div class="optn-header">
							<div class="optn-title">Archivist</div>
							<div class="optn-subtitle">Publishing Member</div>
						</div>
						<div class="optn-details">
							<ul>
								<li>Search and Read Stories</li>
								<li>Publish up to 4 articles a month (maximum 2,500 words, about 10 pages)</li>
								<li>4 documents/images</li>
								<li>1 Video Upload</li>
								<li>Access to add your Family History</li>
								<li>Access to Digitized Family Books (When available)</li>

							</ul>
						</div>
						<div class="optn-price">
							<div class="click-text">Click to Subscribe</div>
							<div class="optn-price-text">$9.95 per month</div>
							<?php echo do_shortcode('[s2Member-PayPal-Button level="1" ccaps="" desc="Archivist - Publishing Member" ps="paypal" lc="" cc="USD" dg="0" ns="1" 
					custom="bookofrelations.com" ta="0" tp="0" tt="D" ra="9.95" rp="1" rt="M" rr="1" rrt="" rra="1" image="default" output="button" /]') ?>
						</div>
					</div>
				</div>

				</br>
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>