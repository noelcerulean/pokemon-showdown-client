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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40227534075126514" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7926097598943322" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8622321415033816" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.894356721385998" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3196437850629208" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5789424335042379" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.25248080737089595"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20695267637657944" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21958032829226992">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4036500954992581">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3182357615228282">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.43926957543880896">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12507748650587325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.31968748645487266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4457805174398215"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6863876043329276"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7479422552587431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.771532396460431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8288917163299876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.09449387039389046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9065133501205409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3276066351681748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.24408346680020498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.07511860066830711"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.999045708463846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.18840037135119747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7195077500286615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7699131132465871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.10031633289830277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7023598474823332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7300643997848166"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
