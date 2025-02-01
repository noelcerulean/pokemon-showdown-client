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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1674264506220906" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.710088367544603" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3621191697451738" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.22938011016843074" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4712479257304314" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.32047725472147204" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.19190849155989587"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15837577526922852" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8894731971071617">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3373740452254024">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.03651556219103691">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.949107608757292">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34050341534547046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6950575207530734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6004689333428157"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4257538638362228"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3787121277807577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9232264609707135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7412086953778134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8079934861740004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3344826878890399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3038601682956954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5929490996693463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.18485021093600884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.577914258195455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.013111799947087999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1157197417760214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.06302238204573807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2096718810807634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17169786173920953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.13493373842062217"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
