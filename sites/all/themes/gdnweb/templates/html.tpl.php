<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
		<?php print $head; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<?php print $scripts; ?>
	</head>
	<body class="<?php /*print $classes;*/ ?>" <?php print $attributes;?>>
		<div id="section-top" class="dexp-section">
			<?php //print $page_top; ?>
			<?php print $page; ?>
			<?php //print $page_bottom; ?>
		</div>
	</body>
</html>
