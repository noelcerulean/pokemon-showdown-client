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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.00707145037831447" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6448013456068233" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.65762830363538" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2424106836647404" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5050681937002071" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.44549510501598144" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.38321895215821056"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7929768390347014" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6886669515334496">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5135554038945285">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.13714957989579335">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.09634515308086544">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7059204052220704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7429065789080369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8971702974320515"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7654315943085321"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5109127334228469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5967975677920623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8674298245522913"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4395486369289259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9587718676701089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6284794980021666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.18074863954776466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.32660184672187387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5957701082188185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3347475075464166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7435042203293036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7230921177991592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9533630550236023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5773247326008166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.983525468059189"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
