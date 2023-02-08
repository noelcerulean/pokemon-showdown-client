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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.869993288132511" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3373059112109431" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.27736816552273447" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5861720476957546" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.04786275201710688" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20758720460394486" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18122101901150556"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3064963022305309" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.35275152063666515">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2920891488851567">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.43770138943827663">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14939357198793757">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5236177221968197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.37911257204668036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4856516846149541"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37521296615128796"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9462904846846394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.025756189996848367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5496306979966932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7053469711440141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7323104754862704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8005301668429263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23407963499567952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6270391156557922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8937304614279307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.33932674795524354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5433104303731944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.004871471303581787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.325905662626478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8480797462582652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9468471370957683"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
