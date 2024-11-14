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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3297039683200296" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7830356200292607" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2409786738625601" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5404344199274711" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0446999951236724" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.707739258197275" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6201247128759797"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.588591902174759" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7264204852312892">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8616927805355095">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.27622713327528636">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8384062408016477">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38393532595140556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8503269466000616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6716207340534257"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4157126062424208"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.005889028316028666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7988301103137092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.38460632388200455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7406451792614157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4243062378088336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1131897931915109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8650450320401117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.04685423265497679"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3866657858922684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.22030381178732306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.34062541167489657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5010108868971688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6026018025394446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8308201798764683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8838482707351081"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
