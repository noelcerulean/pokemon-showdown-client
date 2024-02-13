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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3283417365011423" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4676281809877969" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.17793763345444003" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9831434048615881" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7359507578752629" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.27942895901019216" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8548389827941167"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6870317695412262" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2354541166885724">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7243209084458149">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09466643496112148">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5495091890877972">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04665334493914619"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.525352359343563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5942058663670333"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9814857119385247"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.519304860234781"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.02746587653327759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8715051845131148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9565575332134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8389769779699268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7387024905698334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.29351450549321534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8699009607261141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8452597027365587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.25013009033069333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.21316417259339038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9736899807375006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.14654730741706778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6448956103125618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8413862399587082"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
