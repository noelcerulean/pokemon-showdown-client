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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.25638014701525824" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4169551576187156" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21433593228196934" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1899353773271626" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.625059205228812" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.38180434011495423" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3165944296383236"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.49610415831749366" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8055252880913839">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49647078578462644">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6009639692325415">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7873202782608559">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6532610614833769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.41289854376055346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1279294407872369"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.01075688553932097"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7378344082347559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32824467595089324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.03570459865837905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.08084062188196173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4018071271981214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4624251146095393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.012077579118614734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.048165854594745205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.705897061137307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8380206145410156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9365533059406885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5268519816866624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7877777371136967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3170105360108375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3646259036977755"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
