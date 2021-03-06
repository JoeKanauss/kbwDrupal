<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300" rel="stylesheet">
</head>
<body>

	<div id="header">
		<img src="/kbwDrupal/app/sites/all/themes/kbw/images/kbw_top_3.png" />
		<div id="main-menu">
			<!--<?php print theme('links',array('links'=>$main_menu)); ?>-->
			<?php print render($page['header']);?>
		</div>
	</div>

	<div id="wrapper">

	<?php if(!empty($page['left-sidebar'])){?>
	<div id="sidebar" class="left-sidebar">
		<?php print render($page['left-sidebar']);?>
	</div>
	<?php 
	}
	else{
	
	} ?>
	
	<?php if(!empty($page['left-sidebar']) && empty($page['right-sidebar'])){?>
		<div id="content-with-left-sidebar">
	<?php }
		else if(!empty($page['left-sidebar']) && !empty($page['right-sidebar'])){?>
		<div id="content-with-both-sidebars">
	<?php }
		else if(empty($page['left-sidebar']) && !empty($page['right-sidebar'])){?>
		<div id="content-with-right-sidebar">
	<?php }
		else{ 
	?>
		<div id="content">	
	<?php } ?>
	
		<?php
		$views_page = views_get_page_view();
		$menu_object = menu_get_object();
		
		if($views_page->human_name != "taxonomy terms 2" && $menu_object->type != "information"){ ?>
			<h1 class="title"><span class="information-title-dash">- </span><?php print render($title); ?> <span class="information-title-dash">-</span></h1>
		<?php 
		}
		else if($menu_object->type == "information"){ ?>
			<h1 class="title"><span class="information-title-dash">- </span><?php print render($title); ?> <span class="information-title-dash">-</span></h1>
		<?php
		}
		else{
			
		}?>
		
	
		<?php print render($page['content']); ?> 
		
		
		<?php if($views_page->human_name != "page" && $views_page->name != "cupcake_gallery"){ ?>
			<img class="logo" src="/kbwDrupal/app/sites/all/themes/kbw/images/logo-100w.png" />
		<?php }
		else{ ?>
			
		<?php }?>
		
	</div>
	</div>
	</div>
	</div>
	
	<?php if(!empty($page['right-sidebar'])){ ?>
		<div class="right-sidebar">
	<?php 
		print render($page['right-sidebar']);
	} ?>
		</div>

	<?php if($page['footer']): ?>
	<div id="footer">
		<?php print render($page['footer']);?>
	</div>
	<?php endif; ?>