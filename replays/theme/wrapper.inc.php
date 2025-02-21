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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.45787012739935085" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1240071409419754" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18345812172490628" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2782422855726192" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9208759676899771" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.934688718880246" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.04968178659093647"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5935917440908831" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5594234561804066">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4159850416439381">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.954181798294814">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5840567405035553">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20455578975821953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6582717939121088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.0501064732867309"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8180816719447672"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7072639952842077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6076834201587491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8044010267827666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9405066551284624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07042994312290651"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1530575481812091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.21462559879156573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.44804398874925977"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9547525272505311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6155283578167197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9180719270354596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.17699448571192233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.17509566741173388"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9323552768660652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2701192532461789"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
