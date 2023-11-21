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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6464068516372854" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.263406471723977" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.20483837388072335" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7870222024587299" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9242786250978858" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.25194268189180025" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2693899758528271"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6492363972314765" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6387044495217349">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5984146131809782">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.26028006899692135">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.586882150581918">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12297747093412825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.93110065492922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5364873970114203"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.49293483478579714"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.43261308681398947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3115886893557436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3756010836742236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1091448311124148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6559368205431235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8312994729708914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.36122455413439947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7505659202805528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.784987131440207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.815278511683458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6603295436537622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8359579666214889"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9134325491550372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09869970687508034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.09339069178326209"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
