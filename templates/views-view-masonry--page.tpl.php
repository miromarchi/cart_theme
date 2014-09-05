<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */
?>

<?php foreach ($rows as $id => $row): ?>
  <div class="masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
    <div class="card">
        <?php print $row; ?>
    </div>
  </div>
<?php endforeach; ?>

