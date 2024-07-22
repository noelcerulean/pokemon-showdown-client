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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7266010428753009" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.435854322549041" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8181208394936759" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08843048302382783" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.06952760653771217" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.19161191134951938" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7658332459618604"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.004020923761622219" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48326465428817644">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8017358442558213">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9840709331437976">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6341530776214592">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6504354473309684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6274543574362486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07080317475286524"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6011556589037244"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6113031021002908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10132588279423271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.31117317553329293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.16400569660817443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7646956022770794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.02241622633702356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.38436420453186937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4293344068288394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.46850269678293754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5682365351547738"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.08561133753907346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5954960719377631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6815396714406847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2623974630395034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.821676045212729"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
