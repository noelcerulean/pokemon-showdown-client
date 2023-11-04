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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.44423484541284886" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16032147770294114" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.38450243829976105" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.037246020010153646" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7774198860333594" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7089597563936845" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7727616688518126"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.976066176522344" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6430536026964222">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05018023475874167">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3738980255732709">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8793900843898508">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10937138150608416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8998534813231869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.41755528341962167"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5765373852038451"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1298140102445744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7109222446230266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.21628053654079826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.713827515072001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.12190337424909203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.002501924136216971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1591326255186074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6263588109395937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.726357602090852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43129485461899275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.46880193780958734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9155081492872865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.27757118145282855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.49234543151821186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4754016700741066"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
