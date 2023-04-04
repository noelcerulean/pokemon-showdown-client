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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.14559221552817259" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7667376972848241" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9628831257333657" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9399606895571215" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3694833928179" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.45748744679900377" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2039526848779536"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6508717423793999" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12003177966761003">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2918002542989422">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6263495629270253">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2964204107581314">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18704816901358545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.432805066368394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9003407542234665"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7283121583787231"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6852116526064895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7352039409724145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2618612425086124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9184751604303352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8171384898156355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1380663036079699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7369220623826991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3462720845631888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6702230347153459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8493958908448955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5010720429268531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9409626321112394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7647702337188755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3690181287583363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6682085053762072"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
