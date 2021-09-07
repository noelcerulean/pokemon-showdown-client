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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18360486433710688" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.010041207297419863" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.005278250572312793" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5948205718555999" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20632549273102962" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.804607436724843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6555884326801866"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.044722721614814276" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26598082887598173">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2174749936856717">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.785508123539497">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9981608396564703">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1188991260137322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8509093784415913"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9238927565188644"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.723196571901082"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4083940075579291"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9755130000789618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7104253940806498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0628943873975254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7636518956738516"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8007749466207186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3446740320608772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7656213451347205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6453811223413173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6402121508375704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2684089254565989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3746158744691268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.696051914886717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17526420999056835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19314738344880977"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
