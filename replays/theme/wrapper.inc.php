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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.32729842348318106" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2021469558861646" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.48611463420821677" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.01973847055403466" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8585707706895485" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0744180445540159" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.42206104322771365"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5329625566686973" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7737499635695924">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6332776455567273">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9430589179509965">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.010839977164251113">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4665039203947807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10538058696084618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2807001072455171"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13698667203504256"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.58760558937339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8719555634397644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5959329390207133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.011168154619980442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.27108250520724453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1474012592852192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7312010358845289"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6047378798316323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6749592484954297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5783577720092228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6005004204327615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45359664860696136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.682421357879903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05617640390889722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2469315081326504"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
