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
	<div class="clearfix">
		<div class="column col-md-6 left"">
		    <?php print $content['left']; ?>
		</div>
		<div class="column col-md-6 right">
		    <?php print $content['right']; ?>
		</div>
	</div>
	<div class="clearfix">
		<div class="column contentmain">
		    <?php print $content['contentmain']; ?>
		</div>
	</div>
	<div class="clearfix">
		<div class="column">
    		<?php print $content['footer']; ?>
		</div>
	</div>
