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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.0684067130335182" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.878929169239316" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8373654069718448" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8674058808578629" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10401535916593918" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33021945513552353" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3907239633551307"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3583615325382252" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14833046228713065">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2495843477692381">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.21262886209828413">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6936034821080836">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7966449614933169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9325735069615873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8010554203577482"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.795671213472579"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.318655054644408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2854321986381183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7223015578524048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6535054849056123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.735799508157863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7938645855388267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.06437568697806495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11471388028774676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.45191091233464786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8709183559280651"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.03491159047426784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.21351431342875227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7626997218603602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6936210712770676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8265578305729195"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
