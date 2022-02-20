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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8619137179762646" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3844882522388038" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.003324477966450745" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1331068578428387" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.794323791550207" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.713079735534105" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5908651252220272"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5508958905867938" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02891267702889655">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44942390612486083">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6333824201988156">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5691522660703638">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4924019936456172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6205210021725607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6769796971248259"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5244623077302104"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2596250071573998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7932169507944853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8498675008124998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8068111967505334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.14855053327599954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2836508304197225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5432166930008271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8421709631030385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9903656993993679"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8239830699176853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.735841223548207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.0457126373139507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7564018324193491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5992298514886139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.24460499284565707"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
