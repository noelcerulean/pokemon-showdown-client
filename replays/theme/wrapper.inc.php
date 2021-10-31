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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.009875615616710132" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.06939506198501855" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5468480106116558" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7282166631516824" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4608418068018032" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.26411372983648107" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8871779243841267"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37136852720996094" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06688173724138191">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8969431722418828">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7036153379037908">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3946061379882855">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8693535400840806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.01855823364436282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7870383352109966"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24146293868311597"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6121737249719337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.814215712758207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7798066788351821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.22860958303359125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2248288116704653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09274996291468396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7344132150510745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7205077501995507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6655580615983061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4609268195608007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3685550101886239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.12961173548133398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8753199127448539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.39983030007338094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.20736786134145402"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
