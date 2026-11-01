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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.41623950859245307" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.885753104590096" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7973418553897857" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6909381888097794" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4479795761021703" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.011153430017739607" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.29965224711125316"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5940347716650609" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9165344527114162">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21994796907178327">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9882705426201127">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3949257888170331">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4240883539747963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7946862890246247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8518047919172981"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.32881227383482414"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.176110105223644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8653002552399163"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.844531555024532"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.826168517947141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.705092042590103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.751235920790139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.015401418847350468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.19218682617589578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2102974686211525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3039783580255532"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.49208653252360446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7950830439266624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.20198053390647874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8432437404423943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3722614921404679"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
