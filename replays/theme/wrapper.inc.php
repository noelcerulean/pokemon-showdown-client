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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.31114954240060055" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3095500311782997" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5876744496199666" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6583570771709115" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7341077947451251" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8975652412677249" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6702419471630359"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20770054844950847" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4453036707127578">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6861873769620142">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3366420904509375">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.38446552861567174">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14940274622699845"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08746413244666629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4221556616415829"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9624803718530197"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8288996584122985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.38049784453964786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8790285979972907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.030251566259914542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6841776713565821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8642739606321972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.0725841973682273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9450717261746726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5587311295924586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8642159270898924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9443513918475612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8528448299773406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9037741184158874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.03178885074699611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1596829628658849"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
