<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>CRUD generator</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.js"></script>
	<script type="text/javascript" src="/~hawk/home-project/system/media/admin/js/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/~hawk/home-project/system/media/js/jquery-crud.js"></script>

	<link type="text/css" href="/~hawk/home-project/system/media/admin/css/simplex.default.css" rel="stylesheet" media="screen" />
	<link type="text/css" href="/~hawk/home-project/system/media/admin/css/jquery/jquery-ui.css" rel="stylesheet" media="screen"/>

	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
</head>
<body>
	<p>Generator kodu</p>
	<div id="generator_info"></div>
	<div id="generator_options">
		<?php echo $form; ?>
	</div>
	<div id="generator_fields">
		<?php echo $fields; ?>	
	</div>
	<div id="output"></div>

</body>
</html>
