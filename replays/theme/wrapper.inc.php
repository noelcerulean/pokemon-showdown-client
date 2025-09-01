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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18329270410550724" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7732485943797602" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7753440353032779" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5377096581073177" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32615555666675333" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9301191814113154" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4530749091032735"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8429365503434634" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6762392563547421">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39197029105824277">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9082236447267378">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5591795463102482">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.025587842413894446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.798559578959005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6546159300306145"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22978464568144208"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6225248585001766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0028847033167880287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.24213786521471525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8611428594203359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9503928510310282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.13563347492866984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.20059858387337948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5618329784898328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3359308137768642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7373557569971121"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3080809898142922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.907834661416236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5849766970948485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2577075047301125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1589516385164551"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
