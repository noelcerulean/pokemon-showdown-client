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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.24254296836478262" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.30084678497013195" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.19769468976147397" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.07625715998799532" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9050754041720477" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20502027882842055" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.26000065414745244"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5949262300245839" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18214141781719428">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20699912405776133">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.29320160361109093">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2604619550388221">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7177710226336798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7159321617025052"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6160876291385802"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0739572309511698"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.42337118239718396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.41099346788940316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.623093677145792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4934386652390361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6377085757308145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6743327908632026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5550362476916513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.46424726603288624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9123271784047371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9725622421523767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.37320748669502946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.22186310577494872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.834345543206122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6421966893773878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6556545301144363"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
