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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4694494073057569" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.39545372647362975" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8534959291266202" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2728157018239121" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.031123470686797328" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5257755241938351" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5244828495966525"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9664462766172486" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8082769810107648">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.623411613556095">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7268012666378885">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3799923979086013">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9206706513540759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.44628500602586274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6161836405241505"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7572466350885652"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5364452401127833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7492604214952541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7800774505172026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.20777193331030186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8838327009016784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6118272896029258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.24755814752584637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.18146509562826174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4180687042772031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21098619114833395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5612631825122436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8903339329434701"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.22311631839702972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.44285233862389517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.03595736690527396"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
