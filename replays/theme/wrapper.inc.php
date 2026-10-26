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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8980639968991364" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1976689479581597" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.00415752382462431" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.45293548725308796" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5724198671118863" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.358461347753978" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.15411018498278284"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8898567703914022" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.331904716923785">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.819578933976383">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.20543869663329506">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.23252247221291134">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5072006652023209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4923213442560277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5204107141598766"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9757123007317627"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8587549511112937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04013301820882109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8111462733765358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.008933637131996797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.01502273148583444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5597106883520677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10119552419565814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8448048005442101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4527345533803824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.27131926214168733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8122583596913704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5048382336832822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6157524378157362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9780748966149138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.44925011170712703"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
