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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6033838723040048" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.747977874814495" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21628940958643272" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6885890031169173" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6655750486434304" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.09898460072052062" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8820548443949248"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8721927589816445" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7474501737718">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9504259318924702">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7212383694510291">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8467149227770121">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1478575792726975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.559700780699613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7020896790436466"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41856495655456283"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.28372091810655253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8038458741761723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5842200596344493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.08284250527983783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6575001668751859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9585861302939289"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9237523904579277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0683898965887928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.49674373996809984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8653854965837782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.18586666007441077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6393847845971823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7422288890097513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6842569944118917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.17145934458866763"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
