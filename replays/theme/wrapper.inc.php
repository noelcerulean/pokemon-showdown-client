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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7635184262247967" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.19552970836616712" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8284934933245958" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.836662910983955" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5458362743015646" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6544638844765729" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6723876595798672"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5871767541290907" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9152959362261761">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0806590806019929">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.25161465938328886">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3605309764464819">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.566745585391121"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.23556839724855916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7244035099481354"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3455855684674045"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6888744017645339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26725693619095003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7333495987338055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9653863948584562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.11318115163529074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.007400025727083426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7081948110458758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4486113518666843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9073792918899337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9510132567518528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36836388960828703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9907175678081219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6705414096258686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8886975896142879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.40699745719380376"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
