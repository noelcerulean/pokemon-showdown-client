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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7342192488471688" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16270100328197468" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6176842509080998" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2617971843632456" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.764183058644017" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8400735071262282" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7126001877521992"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17858628035922597" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7375977221097005">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3987481554230756">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7484297032316651">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.17539357646403264">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1661089332662149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5969506049028197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8134184341974269"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4981079359601339"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.0562952318309311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7389616727631552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6278169248199634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3893850437502353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.782279139073945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6354210419948403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7350907133792712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6611337325377045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.55022735600745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.40299931293947244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.932810905035711"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2925356342559393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34557270833475995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.24578585312557855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5059420946526612"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
