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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6908435751481607" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.25764725977272906" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.29914280666494353" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.056369067663626815" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5797935531442395" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33272919765770625" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7941911267418544"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08654076249950693" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3102547610672033">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4481545891344241">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.47047344113244827">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.881794681525196">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23757882654174112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.33734661861770965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3805023487166259"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6942387253756801"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9015279068186941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8622785265566502"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18640662254714147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3947983487012834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8681556678321796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6167382182541268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.06373647765727264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.015420503101901462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4479043935612357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.23144534700894304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24579876243173437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.35976378326780933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4147683423282382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1517249424365552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7068116627789158"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
