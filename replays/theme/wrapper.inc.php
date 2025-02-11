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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9602743196826735" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.22517944430155357" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5636067819891297" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8818494417598886" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3185101896555165" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8406342749851075" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.02322441492361005"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.28501827745523367" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6419840945705704">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7895320834092332">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.29152323533825175">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8321423929747516">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11726027803256045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2137408245841912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.43025413462285744"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5397653368940389"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.15484139493662874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5034674617614363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7864767825636285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.022893583594473466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2683028616698455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8333416674993546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.43791936425564293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6925617549667498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5342990502676057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09697867993949738"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24514540230640236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.25151591302900167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.19177535908703391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.04522961142261339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9031942923242764"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
