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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5519342093155406" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.936410536703921" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.029592442036070254" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3301709576874603" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.23895197279960412" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.29064585444951674" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6858062561895266"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5726620515028158" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18208099323561444">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.046335663577108166">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.837743753200286">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9055508647447261">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2852705086753924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9805560511608555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2831170533186662"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7684969267639594"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.16152127348935608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5877360680913999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.48514899756683527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9637479917130523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.957387268364245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.47718423303714874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9694916564316669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.002545417633343705"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5872654238504642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6510367618680339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2813875046345238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05784188230896392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8712584496485318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09418187003819645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2833196593297074"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
