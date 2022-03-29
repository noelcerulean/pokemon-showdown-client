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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.33780570926589126" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1366987892011544" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.009205039066094933" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.50667651047194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4871202704333051" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8387206996276038" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6700540788250506"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8944408417535343" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6233044643349719">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5992134670027749">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.696698988169731">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8064981574615104">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1853123099370615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9776545889943393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7085403652558777"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18366293615300955"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20086439375514265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5377301675179105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9237515138116916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4593856410504844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.020318104338765464"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2612345452828404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8978555957040433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9659744875749547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.04274095240336795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3728453678954582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5441572511591637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6596204623995179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5735600820149056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6881176876492081"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6553142691228839"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
