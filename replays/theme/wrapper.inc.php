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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.44486063049359403" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.47283965748508816" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5041659520928088" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.057301397766776674" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.38433038343185166" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.007323792713539223" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2593529381997868"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2260795209357811" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.693843220409952">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6612636005579247">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9215471685122938">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2719535861341509">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9804289734628384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.19199163386228824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5644734331181729"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5989576843313895"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1759745054163222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3173224802116139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.13924007098401026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8858980612480498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.22990345755096708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3179876252380307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6992155133096716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4254468155305513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5022314035005522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6681360339037581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10135378801088057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10409112664145503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6440231388139055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8829089833835275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4342574076503989"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
