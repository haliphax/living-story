<?php if(! defined('BASEPATH')) exit(); ?>
<div id="charsheet">
<h3>Character</h3>
	<p>
		<label for="char_name">Name:</label>
		<span id="char_name"><?=$char['name']?></span>
	</p>
	<p>
		<label for="char_stats_life">Life:</label>
		<span id="char_stats_life"><?=$char['stats']['life']?>/<?=($char['stats']['stamina'] * 2)?></span>
	</p>
	<p>
		<label for="char_stats_stamina">Stamina:</label>
		<span id="char_stats_stamina"><?=$char['stats']['stamina']?></span>
	</p>	
	<p>
		<label for="char_stats_strength">Strength:</label>
		<span id="char_stats_strength"><?=$char['stats']['strength']?></span>
	</p>
	<p>
		<label for="char_stats_cunning">Cunning:</label>
		<span id="char_stats_cunning"><?=$char['stats']['cunning']?></span>
	</p>
	<p>
		<label for="char_stats_magic">Magic:</label>
		<span id="char_stats_magic"><?=$char['stats']['magic']?></span>
	</p>
</div>
