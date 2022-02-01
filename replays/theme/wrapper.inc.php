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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4326938553838513" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4383366464536431" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.12501171182357318" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9015090125602938" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.82682014507657" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6269713146068405" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9217520471948257"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3496840088373696" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5282989988588036">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3802200257414958">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3060018607626731">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8220385301123105">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14758035255479718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8139387555001965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.34605451536279896"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4001414695060441"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.19657087915911098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3143259306858954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.742211086741752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19484649579524027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6090680454132937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1355997960716424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08413060606927125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4922339065163843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.16359523051467706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9901916583175046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.19644640704511862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.18528877214713746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8424479712557442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9508193785680139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8365125595154284"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
