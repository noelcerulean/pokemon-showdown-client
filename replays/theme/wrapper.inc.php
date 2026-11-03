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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3146405550837078" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.962511560058457" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.32854163038517803" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.048649630524734144" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7381096950774496" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8449043523495601" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.14774146742496397"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6816305312803208" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.916716978420532">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3856712758603782">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4500958897107481">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4973538437929912">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5713170311250638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2687625483934547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7184453463999743"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08476482637851657"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.27872394259077227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5646198701062054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09619650963691206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.523567563916871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42684435282210886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22157202100363715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4830148435934015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.38747836658106505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.17639317631075457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9212719973903517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1402832144405839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7925264848500048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5009583724680031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8233712427711073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.38171448712564016"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
