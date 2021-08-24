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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5304998744801961" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.22551566024025638" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9324001449934627" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8439711402256189" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7559436518825338" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6149267576986406" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5920132153556859"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6349788496300348" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6321752764451052">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3642201863227488">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4612270048695768">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10915448557153873">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3455548535949611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06580690451549365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.11047283788711715"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35114435361871377"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3730368739271692"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7791918226919154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.30249820158960117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6595201654700806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.02666340929464761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6772251144790182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.18231600761986844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.86394147521405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.29472729235613704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9506538384707441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.03867670232256826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.38333947612102115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7005638892809152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4779761634534001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4874364984212112"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
