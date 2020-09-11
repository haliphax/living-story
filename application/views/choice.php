<?php if(! defined('BASEPATH')) exit(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Story</title>
		<?php $this->load->view('styles'); ?>
	</head>
	<body>
		<p id="location">
			[
			<label for="zone">Zone:</label>
			<span id="zone"><?=$zone?></span>
			]
			[
			<label for="area">Area:</label>
			<span id="area"><?=$area?></span>
			]
			</span>
		</p>
		<hr />
		<p title="Area description">
			<?=$areadesc?>
		</p>
		<?php if(isset($event) && is_array($event)): ?>
			<div id="event">
				<?php foreach($event as $ev): ?>
					<?=$ev?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<ul>
			<?php foreach($choices as $c): ?>
				<li><a href="<?=site_url("game/choose/{$c[1]}/" . $this->player->hash($c[1]));?>"><?=$c[0]?></a></li>
			<?php endforeach; ?>
		</ul>
		<p>
			<label for="inventory">Inventory</label>
		</p>
		<ul id="inventory">
			<?php if(count($items) > 0): ?>
				<?php foreach($items as $item): ?>
					<li><span title="<?=$item[1]?>"><?=$item[0]?></span></li>
				<?php endforeach; ?>
			<?php else: ?>
				<li>Nothing</li>
			<?php endif; ?>
		</ul>
		<?php if(isset($image) && $image): ?>
			<img src="<?= base_url() ?>images/game/<?=$image?>" id="scene" />
		<?php endif; ?>
		<small><a href="<?= site_url('roll') ?>" onclick="return confirm('Are you sure?')">Start over</a></small>
	</body>
</html>
