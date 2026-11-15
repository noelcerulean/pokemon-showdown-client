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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.35161284980575325" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6981359751736254" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3268587268379526" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5298004628666118" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7888549705932039" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20956426670682826" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7113674032883955"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2844615929790565" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5520530285383711">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5455233222567774">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5040406621937888">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6158575522849203">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.394070681304176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5656686320559436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9289840580893562"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4144619810474415"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.929840852392823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3002745848183065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3649204968241674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7492100812843744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.34706458192907985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5641508658759544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.346958942898942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9635896971809215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.803593562813181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6544498934518133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.882862988948914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5067521055242094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.10304921578893966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2901431106100971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5411336247928836"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
