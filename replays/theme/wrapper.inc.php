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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3460328844989624" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9296447083399073" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5369072240322663" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9739033718915038" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.17062191458288" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8472390221879416" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2537470700856397"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12204975224416881" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6235254706485025">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16729315111663579">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8585291423445272">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.715074691027352">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1333424220306263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0835596920405346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4556202012555326"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10689586149620944"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.23204723959728657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5608257873257334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9139315323009574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.05100910897442801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9781547927153451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.17211542809865543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5414356426271498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3870891060438588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7824689307241617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6601237075704796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6040575476682744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8952318241129924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9078580848421789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9456518885321108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8204102257608685"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
