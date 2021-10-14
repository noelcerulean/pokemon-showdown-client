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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.21042148921540194" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4011513703952314" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.07591202855318246" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.15065566604295078" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22645187938085187" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5106460590907476" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8143262170315242"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11200789287016821" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2298186971131726">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9873142068852725">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.018185944620746186">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4804289949139715">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.46083164757078254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7491302121244268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8970426542711898"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.005219144376145124"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2678161414759743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5675617254201528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08116969513460259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9185859480130616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.12311445196230375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7068378032985818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4814135806127626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4577467119674854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.530160848829047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7095256183338101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9728481523187409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6474697484797973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8227432436895232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4517233394940472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5422893967047724"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
