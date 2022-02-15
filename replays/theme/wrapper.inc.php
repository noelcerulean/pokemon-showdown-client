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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.044656780771336724" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6945034482967909" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.06674106963684778" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.35858392486168045" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9776503670122503" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7099996899664109" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.019001995840356667"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5023634664346894" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26625105758820267">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5945642425337856">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5851167784240054">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3452725809122821">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6195254713250076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.07038340950059996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6093068231827161"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6319185682696331"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.24878788253124107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7673349799691056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7710255676085116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6553674521125517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5969413493127413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2050012403304109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.07772466508008868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7788976286446099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9267578393928255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9677454073024103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.26481000762704965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7227461400634725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8865618818576295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.10794892922236987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6941502433703202"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
