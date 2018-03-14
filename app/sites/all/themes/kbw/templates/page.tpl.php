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

	<div id="content">
  
		<?php print render($page['content']); ?>
	</div>

	<?php if($page['sidebar_first']): ?>
	<div id="sidebar">
		<?php print render($page['sidebar_first']);?>
	</div>
	<?php endif; ?>
	</div>

	<?php if($page['footer']): ?>
	<div id="footer">
		<?php print render($page['footer']);?>
	</div>
	<?php endif; ?>