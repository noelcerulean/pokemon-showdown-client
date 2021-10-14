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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.537710685786855" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2843996058275109" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3485728019539944" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6735527206319831" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.12079476366852115" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2957539526820063" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7173658474339628"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7443783593410314" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0997725802597802">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6552336219321058">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2852418381700301">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.797478691964165">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15253754061810043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3910716246865853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.420225400714483"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33130447350953407"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7861243442108952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9627421403295477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5025670229826023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.027722292475189647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.11571724442014952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8527784053163221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8395593246627107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8969051731863122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8509700199065096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3168466600445383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3773070463548909"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05490294076647939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.42808973931518945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.42062557126243205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7710681871357008"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
