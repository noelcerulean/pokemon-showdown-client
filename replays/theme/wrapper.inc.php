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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40626357212429554" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.14272565360166722" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.53413614826476" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3664078647129776" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.360812251077006" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6903684964221048" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7485196979164821"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1382700410916593" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.29726634215828907">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06762748871586166">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.29840756262629387">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.16048520250814646">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06582313294351083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9400448544958908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5865345552308523"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46775747148626734"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5225145092011219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9563829929839753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8996810425437711"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.596668307778055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6564942407385441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.03598180115161176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.42796478265031235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6580415725699722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7390709485804487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.38942580994588405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8555699612559613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5147484817736723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8581716434294095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.564033601467606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.08777062486778586"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
