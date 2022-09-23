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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7256370131626335" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.41534057358827825" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.632593446588255" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.07075868255786699" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16159291318564017" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7279215460186361" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8709646826336339"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.50446735580485" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9676060268655517">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8133798421628216">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.0314524394961615">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.826034670352805">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2715264106971842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3110147534955696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5050100736920804"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12200472593606748"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.40883922150900087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9694573356473235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9673107150703135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8274023366963346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.10490539607787497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6918522678732422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.738325844876438"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.48949127705529416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1183833917668784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.41437316363862053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5611718874184561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4260817210586796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11159598742000543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9569233085401914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10603188877203062"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
