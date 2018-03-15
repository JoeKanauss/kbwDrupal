<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div id="cupcake-category">

	<div class="categories">
		<?php $i = 1 ;?>
		<?php foreach ($rows as $id => $row): ?>
			<?php if($i % 3 != 0): ?>
				<?php print $row; ?><span class="separator">, </span>
				<?php $i++; ?>
			<?php else: ?>
				<?php print $row; ?>
				<br>
				<?php $i++; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

</div>
