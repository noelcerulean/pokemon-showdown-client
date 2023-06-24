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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3250657824726091" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7602964196563922" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3868986305875133" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8596180070430575" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27433561964177033" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5046117431980277" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.30315012231536875"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.43991693675889154" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8674287661170523">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02377696732539336">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9726555500645364">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9643663205370265">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9321576211343983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8456909359636617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9762099754119369"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10371616254794414"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.014122829292756434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2052080843570918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6785903697255773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.43548678900127546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.39091940542719006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6413617950730122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4214108790092117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5719075639375664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4446901718007872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.012124523821239963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9377542151436322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9178907992038836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6395693688256261"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6751525279084518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2012371108437161"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
