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

<!-- 
<div class="panel-display moscone-flipped clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
-->

	<div class="row clearfix">
		<div class="col-md-12 column">
    		<?php print $content['header']; ?>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-3 column">
				    <?php print $content['one']; ?>
				</div>
				<div class="col-md-3 column">
				    <?php print $content['two']; ?>
				</div>
				<div class="col-md-3 column">
				    <?php print $content['three']; ?>
				</div>
				<div class="col-md-3 column">
				    <?php print $content['four']; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
		    <?php print $content['left']; ?>
		</div>
		<div class="col-md-6 column">
		    <?php print $content['right']; ?>
		</div>
	</div>
