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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.84052927098978" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1962276021646603" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8919177061250101" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.31649047481675185" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9816671973675082" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5469843327526913" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3812173711465723"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13568053355970133" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.516001078860481">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12163301999740428">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4069652497225924">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.48410976533191574">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10973490022273391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7561915695787227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3054054471089138"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23691614862041455"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.06289439022729781"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8026639082311691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4175926109411343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8940118864440902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7006486940215289"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.03643195276516775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2401598130626097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5458684859742449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5225063800020657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6813933402649983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6207486043063404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7008509058146422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.40860739587877526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3222929879287866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.26866346544653985"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
