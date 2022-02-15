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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.07980660125059846" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16936460033472778" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3921640344516233" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.48800375490521586" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4982531550422511" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7042685407989524" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.14395462680321947"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.47810315105831425" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5444297594391605">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6446856652349766">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5297361210859841">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.300181082592504">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1946382497404342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6108388757942604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.23176975122116494"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.48963258896117745"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9940125609181574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12042196001252359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9751807567688513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13439521429473444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7655356043114976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22035954611163033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6712956802387771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3837127618203695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.474201761429603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.514537882480866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8460928361246214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.25350798469390323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6856148503581223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3051805055032055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.13172575836606204"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
