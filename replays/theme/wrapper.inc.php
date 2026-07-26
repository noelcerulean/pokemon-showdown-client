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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5486749512513689" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.06156751409383987" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.05036098478582263" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9224013011060646" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7380692196100123" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2558562837939675" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2482893178281229"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.36386968374154494" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5060994490758706">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8394998359730428">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8101553432656017">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8513956966239413">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5889216066877678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3492771491230333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.126944653614808"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9831603181757091"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8681846882939441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9447445665353655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5769929570056231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7299785430966952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.02521564770458462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6995904518759462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7124887718985409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11760057294832449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7280930364988916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4511148738734907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8960156647829169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1461861969168412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.25302571095214565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.028023646457785212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6107091734839507"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
