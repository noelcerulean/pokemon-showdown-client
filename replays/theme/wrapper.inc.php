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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.32462241153567317" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.909122846008128" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7106716699363175" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.17737930278649205" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.07518226454209032" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7590000611277441" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3088670514470617"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.24275561583868288" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48202217105634904">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2362365095053266">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.06981233822292965">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5159048632277166">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3576134211646763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9696930831477981"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.04655392857221863"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08847414210594617"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7579245415028134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46219261127999767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1447357616128494"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6728588338582301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9410570234254481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8230019277417175"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7965730324894561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6903930501464473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9675824106141854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5682693526411552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6147097328590405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.13075628009161877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.434933164832231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2592217980172997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4369156671786646"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
