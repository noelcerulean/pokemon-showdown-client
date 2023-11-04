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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15438504174156353" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5782107107800321" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6504571535704073" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5125771396444196" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.44200781947326884" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.006621712670730195" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08826236708953972"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7337205023445241" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18927295376693198">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.25671956413350583">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6340768130586267">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5970941163575183">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6721701131222708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.012295629795829432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.49958536812139775"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.988516033536603"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7024952402522013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3501612057404204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2850288909489942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5937816544057366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9942593790803209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8206805831832138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17470085627965148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5765455277745481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8621688352832966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.027365241283711983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3820525084014219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7306603033865082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.21209596681224485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4723045777933743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8004698167945354"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
