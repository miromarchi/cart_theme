<?php
/**
 * @file
 * Template cart person content.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

	
	<div class="container">
	<div class="row clearfix">
		<div class="col-md-6 col-lg-4 column">
		    <?php print $content['one']; ?>
		</div>
		<div class="col-md-6 col-lg-4 column">
		    <?php print $content['two']; ?>
		</div>
		<div class="col-md-6 col-lg-4 column">
		    <?php print $content['three']; ?>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
		    <?php print $content['footer']; ?>
		</div>
	</div>
</div>
