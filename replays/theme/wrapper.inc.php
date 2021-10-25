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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.37807440776455437" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15566881008955114" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6673952256294278" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4123092761999485" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5764404911434085" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3039289376806036" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.46468289600086354"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1789606916345261" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4909440458496068">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8261269941067102">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.40109643735487666">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14101249808016725">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7377393238339074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.60090959121661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.15734029435801666"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.010865056585485311"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9733371528053822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1802651685451666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2896873490569527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6346024006931474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6631396122362374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4799362949194552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5866232240551275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9506129173874032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3859671390257675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3271088312191024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6954274789682708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.52343683143666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3542098316049247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.38314172498842547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.41083268149786"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
