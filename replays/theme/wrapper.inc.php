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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.219120873301468" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.45623187492832185" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9473889760481704" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5865060167389582" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5072545881667656" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.31336239342387784" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.44986458252572614"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8808885526726715" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8992287463482374">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.18923082564173566">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.30652136738888625">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5603489808172075">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5104825811680835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.756958341265944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7313263380763957"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7456446607004259"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8876713397417961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2540652886213952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.19443614219700467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9156068091577954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.504282039931079"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24919764172007808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.0644687033828868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5111975286121082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8514573926323095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8891710902177088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.22563612628980634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5955471108142574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1560717254225028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3989645064052776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10385457950325594"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
