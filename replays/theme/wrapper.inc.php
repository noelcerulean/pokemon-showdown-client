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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.38610275307797104" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.12475821350850436" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.981327476969452" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.0024030079756149902" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16384492178074117" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.19108225103644028" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.23956312439889405"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8389670678739882" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1420947089548974">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47441214874141036">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4218189972147601">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6606448570660981">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9447643994356285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3973429488332354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.742077012365999"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6243378257285077"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6349912288760671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46550217757143453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9904458709795068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7530305731927684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8988020249466748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.12788117231274376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6447707878630817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9528811528637591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7826462530722176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6908740454646756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5362212591633808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6328979263149759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8143823124612244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6835508181317524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5279989213097793"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
