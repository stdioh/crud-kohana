<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">

<!-- 
 * Simplex Admin Template - Version 1.0
 *
 * Copyright 2011, Prosoftware.pl Dominik Cwiklik
 * @see http://www.prosoftware.pl/simplex-admin-template/
 * @license MIT http://www.opensource.org/licenses/mit-license.php
 *
 * Includes jQuery | http://jquery.com/ | Copyright 2011, John Resig | Dual licensed under the MIT or GPL Version 2 licenses.
 * Includes Uni-form | http://sprawsm.com/uni-form/ | Copyright (c) 2010, Dragan Babic | Released under the MIT License.
 * Includes Facebox | http://defunkt.io/facebox/ | Copyright (c) 2007/2008 Chris Wanstrath  | Released under the MIT License.
 *
 * Date: Fri Mar 25 00:29:24 2011
-->

<head>
	<title>Panel administracyjny</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php foreach ($admin_styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>	
    <?php foreach ($admin_scripts as $file) echo HTML::script($file), "\n" ?>
</head>

<body>
	<div id="dialog" title="Dialog Title" style="display: none;"></div>
	<div id="container" class="use-sidebar">
		
		<div id="header">
			
			<div id="header-right">
				<ul class="clearfix">
					<li class="last"><a href="#">Wyloguj</a></li> 
				</ul>
			</div>
			
			<div id="logo">
				<div class="logoAsText"><a href="#">QuantumIdea Admin</a></div>
			</div> 
			
			<div id="top-nav">
			
				<ul>
					<li class="t"><a href="<?php echo URL::site('admin/home'); ?>">Strona główna</a></li>
				</ul>
				
			</div>
			
		</div>
		
		<div id="sidebar">
		
			<div id="left-menu">
				<div class="menu-box">
				  
				  <h4 class="title">Akcje</h4>
				  
				  <ul class="actions-list">
					<!-- MENU !-->
				  </ul>
				  
				</div>
			
			</div>
			
			<a id="separator" href="#" title="Toggle sidebar"></a>
			
		</div> 
		
		<div id="content">
		
			<div class="round">
			    <div class="round-head">
					<h2>Panel administratora</h2>
				</div>
		
				<div class="round-content">
					<?php echo $data; ?>
				</div>
				
			</div>
		<!-- #content end -->
		
		<br class="clear" />
		
		<div id="footer">
			<div class="float-left">&copy; 2011 QuantumIdea.pl</div>
			<div class="float-right"><a href="#" class="backtotop">w górę</a></div>
			<div class="clear"></div>
		</div>
		
	</div>
</body>
</html>
