<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="cupcake-gallery">
<h1 class="tag-title">Cupcake Category:<br><span class="tag-title-two">- <?php print $view->get_title(); ?> -</span></h1> 
<?php $i = 0; ?>
	<?php foreach($rows as $id => $row): ?>
		<?php if ($i == 0 || $i % 3 == 0): ?>
			 <div class="cc-row">
				<div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' cupcake"';  } ?>>
					<?php print $row; ?>
				</div>
		<?php else: ?>
				<div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' cupcake"';  } ?>>
				<?php print $row; ?>
				</div>
			</div>
		<?php endif; ?>
		
		<?php $i = $i + 1; ?>
		
	<?php endforeach; ?>
	
	<?php if($i % 3 == 0): ?>
		</div>
	<?php endif; ?>
	<div id="row-clear">
	</div>
</div>
