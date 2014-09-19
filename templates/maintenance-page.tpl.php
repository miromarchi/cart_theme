<?php

/**
 * This template replace the maintenance mode with the coming soon message!
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title>Cuban Art Worldwide | Coming soon!</title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link rel="stylesheet" type="text/css" href="sites/all/themes/custom/cart_theme/css/comingsoon.css" />
</head>
<body class="<?php print $classes; ?>">
    <div id="page">
        <div id="content">
            <?php if (!empty($messages)): print $messages; endif; ?>
            <div id="content-content" class="clearfix">
                <?php print $content; ?>
            </div> <!-- /content-content -->
        </div> <!-- /content -->
    </div> <!-- /page -->
</body>
</html>
