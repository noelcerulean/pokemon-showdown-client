<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5034043426730332" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6454785886588803" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.782647839621005" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9614109524895855" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9727501604986946" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4546620228750127" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5354576131523732"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1473371799818879" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14604646422817025">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.010248662109054507">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9447903438143701">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8998234370242393">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29374210383268995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5057411399037364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8895740704350295"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.44939649933251813"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.0677592167201424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2754283122799581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8918683172878716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12674933794545118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5548440563325052"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8253032552304549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.785949656969946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.009697567699581855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1555427222514636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6162125730955257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.573624749102136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5365844398121986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3645284505714286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.01679525536199966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7791192077156281"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
