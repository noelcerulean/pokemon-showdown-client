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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7005742598610842" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7183034516848739" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8536336264766098" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6757431931777131" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7224938639253273" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.17164400218470832" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2530113252589088"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.28307463380431885" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22989096604746195">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2509666916791182">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4333272073632577">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8286631083802176">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7687239041670213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10556662638230807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.11267730737285242"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3130892924830051"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49176719091092824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9421580866687231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8758832723480432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19218875478673847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.16158473135033002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5149183998572135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9031572703846196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6717530261318136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4438189553682803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5195765939507342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8972936948586503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.004943893268789301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8329855435585143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.30093259804388306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.009166670234793672"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
