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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.45059916102223685" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.17633890541517694" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9721650661105976" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6524497806055687" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7909483414305587" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0411248691279662" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9146672686829176"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5436013245663256" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16142192872226735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4765138456261351">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9866311160109134">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5177289256365922">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22040739677069565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.09314163552519727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.21770800280340707"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43390241985569666"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.13456707953693625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0810419739460313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5515513103450354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.34255836076947843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9762975142464254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.15610295984026723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1880855477626222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1949315249057788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8393158722250349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.24839900092968015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6748991336429542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.11430723130314124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3605881844611398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.23441666227545466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.34623220233998686"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
