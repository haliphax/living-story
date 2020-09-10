<?php if(! defined('BASEPATH')) exit(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>New Character : Story</title>
		<?php $this->load->view('styles'); ?>
	</head>
	<body>
		<?php $this->load->view('charsheet', $char); ?>
		<ul>
			<li><a href="<?=site_url('game/start');?>">Accept</a></li>
			<li><a href="">Re-roll</a></li>
		</ul>
		<p><small><a href="<?=site_url('privacy');?>">Privacy Policy</a></small></p>
	</body>
</html>
