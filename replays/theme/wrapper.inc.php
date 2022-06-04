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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9309157289678232" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3721716621731681" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.0012112489673929971" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20366697533323763" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5401707580974668" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.11908252541488173" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.14490135813795213"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6182491356193993" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7444562938931061">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7596191031176911">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7070797429801565">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06189673797966">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8448453408724304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.948941486629348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9614642693350983"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.364233297268975"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.46740196493024055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08702185604265456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8577421579766042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5507676904900856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.16773396618980452"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6927926649024083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7121927952253588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.16549887384230644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48457907140521983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.34903097852894893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.840518468284035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07749552914327595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.02551087852960965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6504546049207351"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.610303549211229"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
