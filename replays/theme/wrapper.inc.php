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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5586511655411779" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9770389871089649" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7700065001916321" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7728097414780777" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.013662816823105217" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1672454981476894" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6984163054231387"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13746115340310694" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7845139918762101">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16267702088232383">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2684256610357407">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7233431135529">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27887317305212944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9041515706326055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.021903234318203735"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9557310446538319"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9651217489226396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.732144322634189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.16266577218567324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5562715663948048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5322687847095822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9423453766368988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9295293784431358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22939636113300432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9945751623309504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.10823009888070723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4150220822013777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3567526540101096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6287453852704259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.35770054170904886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.42919869288878165"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
