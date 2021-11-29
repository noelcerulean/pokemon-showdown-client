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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.643533793095004" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.21267286508521388" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.061591459924157155" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.15176703009620418" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.617228712473483" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7114378283587328" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.210480703856756"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08168072587361674" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9878370603144344">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06190298862076826">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.03744220486176242">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.043619638963228624">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.042101744781182227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5197743796205283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.23871120197267515"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1270524973899494"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.16029181544265447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6089822735669279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.140832136798815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.05301746096121862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8431255809411586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2336412526385223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.32060226706824757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7214435122107679"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.06108294660438962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7696177298609328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4667578627625004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1360669809760935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1053780686672503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09755553344119439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.38226430298433267"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
