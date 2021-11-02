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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8720513156250378" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.37634511238479984" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4394665732513108" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2177981320297746" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4057841452888924" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3515903996905796" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2871834581681607"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5114005289181167" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19260239327918538">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8261687014507244">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.289425570587037">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.11185831101274046">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3295578970150288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4697162139930313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3030931213673862"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.25291329114070416"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.23939266073602128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8210273607853447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7815312330860062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6709243887981511"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.20326988019691505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.28746412246207975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.27531817364296995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6097238752893552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2889996262202983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.04253624335786799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3517984268675116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3904998540441904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9010596123179158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9749062642498365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8717484176491679"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
