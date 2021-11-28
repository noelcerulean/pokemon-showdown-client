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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7808679429723266" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.05941880593188231" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.12399683493778291" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8094781486755553" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.31734210333258783" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8307156910544167" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7340213351345501"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.09278136142831928" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42954751936272184">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37896860912312214">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.716008869812133">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.17931151189166683">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6064369685850142"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.28472816861816774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8757885936343142"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29858468688325956"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.38507983779598476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.032923835579321103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.39714146373808523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9216330676403119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.904030252811856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.11349643094717643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.853345409072471"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6620487487064621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6238473564091216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.44725433211563925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.15086338451824743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9515841787116852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.46643455439667836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9220403921677922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8740007005914703"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
