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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6332969921691176" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1687075858603746" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8702587298588025" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6201261781275289" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16364460155714178" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8588223964899928" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.37559373029537824"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9174000402704701" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27588198164475375">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16125482564734805">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8912140781783398">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5332024419312098">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7409528279500548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.34063486889342554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2604353019111969"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5163101636368765"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5323592791388985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8449314628546603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9215727727455945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.23840654579080334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9271294156719021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7512066439359184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6042694708562486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0787520775762014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6262290695607708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.706269741392751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2593031334675868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.33939595534585476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5409048343929079"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2851516699407115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10770319080075508"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
