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
			<div class="row clearfix">
				<div class="col-md-7 column">
    				<?php print $content['contentmain']; ?>
				</div>
				<div class="col-md-5 column">
    				<?php print $content['sidebar']; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
    		<?php print $content['footer']; ?>
		</div>
	</div>
