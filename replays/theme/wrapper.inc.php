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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.938485634876475" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7302303786998516" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.35549760688668397" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1792193409358276" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10348944953652572" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.24152052881851627" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7077953305997808"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.652016541943476" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7022053748863752">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6115091487934214">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7443458520665653">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.22740114861569194">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7215386908738226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9449296534996687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9190488616418924"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.660390699135758"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8103353442776764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16403881437736278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3921312703434252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.23669891851875247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8696251541352253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.34252234811805016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5633604643088208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7272329915949476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.36027258176422805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9799751177469544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1770678217025543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.39671989624357806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7834655643858426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5308456621051685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19883662349161701"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
