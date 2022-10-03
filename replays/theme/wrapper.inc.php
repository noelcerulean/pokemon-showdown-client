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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.28618910017445676" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2519715433664491" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.23843076303329092" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2558833640238578" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.807008468575952" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.47679972140444193" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24431914561951218"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0952947572243803" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9531605033786226">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7033461744020402">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5950416141870998">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.025918265325070022">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5260731095236555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5041306023501466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6837342570856362"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.26887207237333155"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3957658477836885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6387607464601364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5363916528980308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7325489005841344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5170176879109474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4952713554249826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2810576843954191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.003269580162204022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.47839048380192306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.04130499819303868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5796306005352756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8322402592705265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8877287666201183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9300960117641173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9531846015508276"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
