<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?= $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= $title_for_layout; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<?= $this->Html->meta('icon'); ?>

	<?= $this->Html->css('style.css') ?>

	<?= $this->fetch('meta'); ?>
	<?= $this->fetch('css'); ?>
	<?= $this->fetch('script'); ?>

</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Track</h1>
			<ul id="nav">
				<li><a href="/posts">Posts</a></li>
				<li><a href="/routines">Routines</a></li>
				<li><a href="/updates">Updates</a></li>
			</ul>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
