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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.855108831977053" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9729839985285424" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9519428984777197" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.14129235527846717" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7284570252040288" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7657777491801397" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6360691621147855"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.19308106214634002" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.030987331800474194">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.707283558126802">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.19944197029821342">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1754588684792986">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7892616791241097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14819190047323771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8643330571475452"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1727293527738436"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5045538471769903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43141934435087403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5380723955538834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6125918007978759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2233592477929629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.241898607494487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5668482286272803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7345357020298621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.571309894016315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2833816291539546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.23499690316796085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8409035969056908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5820133088037945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7227652048398291"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7608873765864531"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
